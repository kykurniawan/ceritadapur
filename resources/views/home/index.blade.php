@extends('layouts.main')

@section('page-content')
    <section class="pt-10 pb-5">
        <div class="max-w-5xl mx-auto px-4">
            <div class="mb-10 text-center">
                <h1 class="text-orange-400 text-4xl sm:text-5xl font-bold font-nunito">Cerita Dapur</h1>
                <h2 class="text-lg text-gray-600">Cari resep untuk hari ini atau bagikan resep masakanmu sendiri</h2>
            </div>
            <div class="max-w-lg mx-auto">
                <x-home.search />
            </div>
            <div class="mt-5 flex justify-center">
                <button type="button" class="secondary-button"><i data-feather="edit" class="inline-block align-top"></i>
                    Tulis Resep Kamu</button>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="max-w-5xl mx-auto px-4">
            <livewire:home.latest-recipes />
        </div>
    </section>
    <section class="py-5">
        <div class="max-w-5xl mx-auto px-4">
            <livewire:home.ingredients />
        </div>
    </section>
@endsection
