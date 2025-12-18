<section id="hero" class="py-10">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-accent text-center mb-4">Каталог</h2>
        <p class="text-lg text-gray-600 text-center">Высококачественное оборудование и профессиональный сервис.</p>

        @if (!empty($categories))
            <div class="mt-10 lg:mt-20 grid grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-10.5 px-4 lg:px-24">
                @foreach ($categories as $item)
                    <x-catalog.homeItem :item="$item"  />
                @endforeach
            </div>
        @else
            <p>No Data</p>
        @endif
        
    </div>
</section>