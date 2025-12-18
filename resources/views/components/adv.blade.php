<section id="hero" class="py-10">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-accent text-center mb-4 mx-4">Наши преимущества</h2>
        @if (!empty($adv))
            <div class="mt-10 lg:mt-20 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 px-4">
                @foreach ($adv as $item)
                    <div class="bg-white rounded-2xl relative min-h-25  pt-12.5 mt-8">
                        <picture class="h-18 absolute left-[50%] top-[-30%] -translate-x-1/2">
                            <img src="{{ $item['src']}}" alt="" class="h-full w-auto object-contain">
                        </picture>
                        
                        <div class="text-[14px] text-center px-1 pb-4">{{ $item['desc'] }}</div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No Data</p>
        @endif
    </div>
</section>