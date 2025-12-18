<div
    x-data="{ isOpen: false, scrolled: false, isSearch:false }"
    :class="{ 'shadow-md': scrolled }"
    @scroll.window="scrolled = window.pageYOffset > 20"
    class="fixed top-0 left-0 w-full bg-white z-50 transition-all duration-300 border-b  border-gray-300"
>
    <div class="container mx-auto px-4 py-1.5">
        <div class="flex justify-between items-center">

            <!-- Десктопное меню -->
            <nav class="hidden lg:flex space-x-6">
                <a href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Каталог</a>
                <a href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">О нас</a>
                <a href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Доставка и оплата</a>
                <a href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Гарантия</a>
                <a href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Партнерство</a>
                <a href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Контакты</a>
                <a href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Отзывы</a>
            </nav>

            <!-- Мобильная кнопка (бургер) -->
            <button
                @click="isOpen = !isOpen"
                class="lg:hidden text-gray-700 focus:outline-none"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        :d="isOpen ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'"
                    />
                </svg>
            </button>

            <!-- Кнопка "Записаться" -->
            <div class="flex items-center gap-2">
                <div class="flex">
                    <a
                        href="#contact"
                        class="flex items-center gap-2 bg-[#6189e9] border border-[#6189e9] text-[12px] text-white px-4 py-1 rounded-full hover:bg-[#e8efff] hover:text-accent transition duration-200 shadow-sm hover:shadow"
                    >
                        <x-menu.icon name="phone" class="size-3" />

                        <span>Обратный звонок</span>
                    </a>
                </div>

                <a href="#" @click.prevent="isSearch = !isSearch" class="md:hidden">
                    <x-menu.icon name="lupa" class="size-6 fill-gray-700"/>
                </a>
                <a href="/cart" class="lg:hidden">
                    <x-menu.icon name="cart" class="size-6" />
                </a>
            </div>

            
        </div>

        <!-- Мобильное меню -->
        <div
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2"
            class="lg:hidden mt-4 pt-4 border-t border-gray-100"
        >
            <nav class="flex flex-col space-y-4 pb-8">
                <a @click="isOpen = false" href="#" class="flex gap-1 text-sm text-gray-700 hover:text-indigo-600 transition duration-150"><x-menu.icon name='vk' class="size-6"/> <span>Каталог</span></a>
                <a @click="isOpen = false" href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">О нас</a>
                <a @click="isOpen = false" href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Доставка и оплата</a>
                <a @click="isOpen = false" href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Гарантия</a>
                <a @click="isOpen = false" href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Партнерство</a>
                <a @click="isOpen = false" href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Контакты</a>
                <a @click="isOpen = false" href="#" class="text-sm text-gray-700 hover:text-accent transition duration-150">Отзывы</a>
            </nav>
        </div>

        <div
            x-show="isSearch"
            class="lg:hidden mt-4 pt-4 border-t border-gray-100 pb-3"
        >
            <div class="relative md:w-1/2 xl:w-1/3">
                <x-menu.icon name="lupa" class="size-6 absolute top-2.5 left-3 fill-gray-400"/>

                <input 
                    type="text" 
                    placeholder="Поиск товара" 
                    class="w-full border border-gray-300 py-2 pl-10 pr-4 outline-none rounded-full"
                >
            </div>
        </div>
    </div>
</div>