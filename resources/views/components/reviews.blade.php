<style>
    [x-cloak]{
        display: none !important;
    }
</style>
<section id="hero" class="py-10">
    <div class="container mx-auto" 
        x-data="{
            open:false,
            currentMessage: '',
            currentName: '',
            openModal(message, name) {
                this.currentName = name;
                this.currentMessage = message;
                this.open = true;
            }
        }"
    >
        <h2 class="text-4xl font-bold text-accent text-center mb-4 mx-4">Отзывы</h2>

        @if (!empty($reviews))
            <div class="mt-10 lg:mt-20 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 lg:gap-10.5 px-4 lg:px-24">
                @foreach ($reviews as $item)
                    <div class="bg-white shadow rounded-2xl lg:min-h-55 flex flex-col justify-start py-4 px-5 lg:py-5.5 lg:px-7.5 hover:shadow-2xl transition-shadow">
                        <div class="flex gap-4 mb-8">
                            <picture class="block w-20 h-20 rounded-full overflow-hidden flex-none">
                                <img class="object-center object-cover h-20 w-20"  src="{{ $item['avatar'] }}" alt="">
                            </picture>
                            
                            <div class="flex flex-col justify-center gap-3 flex-1">
                                <p class="font-semibold">{{ $item['name'] }}</p>
                                <p class="text-xs text-gray-400">{{ $item['city'] }}</p>
                            </div>
                        </div>
                        <div class="grow flex flex-col justify-between">
                            <div>
                                {{ Str::words($item['message'], 15, ' ...') }}
                            </div>
                            <div class="mt-8">
                                <a href="#" 
                                    @click.prevent="openModal('{{ addslashes($item['message']) }}','{{ $item['name'] }}')"
                                    class="underline text-gray-400"
                                >Читать отзыв</a>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="#" class="underline font-semibold text-accent hover:text-accent/75 transition-all duration-150">Читать все отзывы</a>
            </div>
            <div
                x-cloak 
                x-show="open"
                class="fixed inset-0 z-50 overflow-y-auto bg-black/50 flex items-center justify-center"
            >

                <div 
                    @click.outside="open = false"
                    class = "bg-white rounded-lg shadow-xl px-6 pt-2 pb-6 min-w-90 max-w-2xl mx-auto trasform transition-all duration-300 ease-in-out"
                >
                    <div class="flex justify-between items-center mb-4">
                        <h3 x-html="currentName" class="text-2xl font-semibold">Отзыв</h3>
                        <button @click="open = false" class="text-gray-500 text-2xl">&times;</button>
                    </div>
                    <div class="content text-gray-700 leading-relaxed" x-html="currentMessage"></div>
                </div>

            </div>
        @else
            <p>No Data</p>
        @endif
    </div>
</section>