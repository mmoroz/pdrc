<header class="bg-white">
    <x-menu.top />
    <div class="container mx-auto pt-14 pb-4 px-4">
        <div class="flex items-center justify-between flex-wrap">
            
            <a href="/" class="block w-full md:w-1/2 xl:w-1/3">
                <img src="/images/logo.svg" class="w-84 mx-auto md:mx-0" alt="">
            </a>

            <div class="hidden md:block relative md:w-1/2 xl:w-1/3">
                <x-menu.icon name="lupa" class="size-6 absolute top-2.5 left-3 fill-gray-400"/>

                <input 
                    type="text" 
                    placeholder="Поиск товара" 
                    class="w-full border border-gray-300 py-2 pl-10 pr-4 outline-none rounded-full"
                >
            </div>

            <div class="flex items-center justify-between xl:justify-end gap-6 w-full pt-6 lg:pt-0 xl:w-1/3">
                <div class="flex flex-wrap gap-2 md:gap-0 justify-between w-full lg:w-2/3 xl:flex-col xl:items-end">
                    <a href="tel:+73832865489" class="text-[0.875rem] md:text-[1.2rem]">+7 (383) <span class="font-semibold">286-54-89</span></a>
                    <a href="tel:+79231436000" class="text-[0.875rem] md:text-[1.2rem] flex items-center gap-2">
                        <x-menu.icon name="whatsup" class="size-4 md:size-6 stroke-none fill-green-700" />
                        <span>+7 (923) <span class="font-semibold">143-60-00</span></span>
                    </a>
                    <a href="tel:88001013305" class="text-[0.875rem] md:text-[1.2rem]">8 (800) <span class="font-semibold">101-33-05</span></a>
                </div>
                <a href="/cart" class="hidden lg:block">
                    <x-menu.icon name="cart" class="size-12"/>
                </a>
            </div>

        </div>
    </div>
    <x-menu.main/>
</header>