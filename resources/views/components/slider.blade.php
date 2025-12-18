<script>
    const slides = @json($slides);
</script>
<div class="container mx-auto md:px-4 md:py-6">
    <div 
        x-data="{
            slides: slides,
            currentIndex: 0,
            touchStartX: 0,
            touchEndX: 0,
            minSwipeDistance: 50,

            goTo(index) {
                this.currentIndex = index;
            },
            next() {
                this.currentIndex = (this.currentIndex + 1) % this.slides.length;
            },
            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
            },
            autoPlay: false,
            interval: null,

            
            touchStart(e) {
                this.touchStartX = e.touches[0].clientX;
            },

            
            touchEnd(e) {
                this.touchEndX = e.changedTouches[0].clientX;
                this.handleSwipe();
            },

            
            handleSwipe() {
                const diff = this.touchStartX - this.touchEndX;

                if (Math.abs(diff) < this.minSwipeDistance) return;

                if (diff > 0) {
                    
                    this.next();
                } else {
                    
                    this.prev();
                }
            }
        }"
        x-init="
            if (autoPlay) {
                interval = setInterval(() => next(), 3000);
            }
        "
        class="relative w-full overflow-hidden md:rounded-3xl shadow-lg"

        @mouseenter="if (autoPlay) {clearInterval(interval)}"
        @mouseleave="if (autoPlay && !interval) {interval = setInterval(() => next(), 3000)}"
        @touchstart.passive="touchStart"
        @touchend.passive="touchEnd"
    >
        
        <div 
            class="flex transition-transform duration-700 ease-in-out max-h-150 bg-gray-200"
            :style="`transform: translateX(-${currentIndex * 100}%)`"
        >
            <template x-for="slide in slides" :key="slide.desktopSrc">
                <div class="w-full shrink-0 relative">
                    <a :href="slide.link" class="block w-full h-full">
                        <picture class="block w-full h-full" aria-hidden="true">
                            
                            <source 
                                :srcset="slide.mobileSrc" 
                                media="(max-width: 480px)" 
                                type="image/jpg"
                            >
                            
                            <img 
                                :src="slide.desktopSrc" 
                                :alt="slide.alt" 
                                class="w-full h-full object-center"
                                loading="lazy"
                            >
                        </picture>
                    </a>
                </div>
            </template>
        </div>

        
        <button 
            @click="prev()"
            class="hidden md:block absolute top-1/2 left-2 transform -translate-y-1/2 bg-black/30 text-white py-3 px-3 rounded-full hover:bg-black/75 transition z-10 cursor-pointer"
            aria-label="Предыдущий слайд"
        >
            <x-menu.icon name="chevron-left" class="size-4 fill-white"/>
        </button>

        
        <button 
            @click="next()"
            class="hidden md:block absolute top-1/2 right-2 transform -translate-y-1/2 bg-black/30 text-white p-3 rounded-full hover:bg-black/75 transition z-10 cursor-pointer"
            aria-label="Следующий слайд"
        >
            <x-menu.icon name="chevron-right" class="size-4 fill-white"/>
        </button>

        
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <template x-for="(slide, index) in slides" :key="index">
                <span 
                    @click="goTo(index)" 
                    :class="{ 'bg-white': index === $data.currentIndex, 'bg-gray-400': index !== $data.currentIndex }" 
                    class="w-3 h-3 rounded-full cursor-pointer transition"
                    :aria-label="'Слайд ' + (index + 1)"
                ></span>
            </template>
        </div>
    </div>
</div>