<div>
    <h2 class="text-gray-600 text-xl font-semibold">Resep Terbaru</h2>
    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum, dolor sit amet
        consectetur adipisicing elit</p>
    <div class="grid grid-cols-4 gap-3 mt-5">
        @foreach ($latestRecipes as $latestRecipe)
            <div>
                <img src="{{ $latestRecipe->picture }}" alt="{{ $latestRecipe->name }}" class="rounded">
            </div>
        @endforeach
    </div>
</div>
