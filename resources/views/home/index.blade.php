@extends('layouts.main')

@section('page-content')
    <section class="pt-10 pb-5">
        <div class="max-w-5xl mx-auto px-4">
            <div class="mb-10 text-center">
                <h1 class="text-orange-400 text-4xl sm:text-5xl font-bold">Cerita Dapur</h1>
            </div>
            <div class="max-w-lg mx-auto">
                <x-home.search />
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="max-w-5xl mx-auto px-4">
            <livewire:home.latest-recipes />
        </div>
    </section>
@endsection
