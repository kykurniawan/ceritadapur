<div>
    <h2 class="text-gray-600 text-xl font-semibold">Resep terbaru</h2>
    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum, dolor sit amet
        consectetur adipisicing elit</p>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 my-5">
        @foreach ($latestRecipes as $latestRecipe)
            <div>
                <img src="{{ $latestRecipe->picture }}" alt="{{ $latestRecipe->name }}" class="rounded w-full">
            </div>
        @endforeach
    </div>
    <div class="flex justify-center">
        <a href="" class="primary-button">Lihat Lebih Banyak</a>
    </div>
</div>
