<div>
    <div class="flex justify-between gap-3">
        <div>
            <h2 class="text-gray-600 text-xl font-semibold">Bahan yang ada di dapurmu?</h2>
            <p class="text-gray-600">Lihat dapurmu, cari tahu apa yang bisa kamu masak hari ini.</p>
        </div>
        <a href="" class="text-gray-600"><i data-feather="arrow-right"></i></a>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 my-5">
        @foreach ($ingredients as $ingredient)
            <div class="relative overflow-hidden">
                <img src="{{ $ingredient->picture }}" alt="{{ $ingredient->name }}" class="rounded w-full">
                <div
                    class="flex items-end p-3 absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-t from-gray-800 to-transparent">
                    <span class="text-white">{{ $ingredient->name }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
