<div x-cloak class="sticky top-0" x-data="{ open: false }" x-on:resize.window="open=open&&window.innerWidth<768">
    <nav class="bg-white shadow">
        <div class="px-4 mx-auto container sm:container-sm md:container-md lg:container-lg">
            <div class="flex justify-between items-center gap-4">
                <a href="" class="text-orange-400 text-2xl font-bold py-3">Cerita Dapur</a>
                <button x-on:click="open=true" class="sm:hidden"><i data-feather="menu"></i></button>
                <div class="hidden sm:flex gap-5 items-center">
                    <a href="" class="text-orange-400 text-lg">Beranda</a>
                    <a href="" class="text-gray-600 text-lg">Cari</a>
                    <a href="" class="text-gray-600 text-lg">Masuk</a>
                    <a href="" class="rounded-lg px-3 py-1 border border-orange-400 text-orange-400 text-center">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    <div x-show="open" x-transition:enter="menu-enter" x-transition:enter-start="menu-entering"
        x-transition:enter-end="menu-entered" x-transition:leave="menu-leave" x-transition:leave-start="menu-leaving"
        x-transition:leave-end="menu-leaved" class="fixed px-4 bg-white left-0 right-0 bottom-0 top-0">
        <div class="pt-4 flex gap-2 justify-between items-center">
            <h2 class="text-2xl text-orange-400 font-bold">Menu</h2>
            <button class="text-gray-600" x-on:click="open=false"><i data-feather="x-circle"></i></button>
        </div>
        <div class="mt-5">
            <div class="flex flex-col gap-2">
                <a href="" class="text-orange-400 text-lg">Beranda</a>
                <a href="" class="text-gray-600 text-lg">Cari</a>
                <a href="" class="text-gray-600 text-lg">Masuk</a>
                <a href="" class="rounded-lg px-3 py-1 border border-orange-400 text-orange-400 text-center">Daftar</a>
            </div>
        </div>
    </div>
</div>
