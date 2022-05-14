@extends('layouts.main')

@section('page-content')
    <section class="pt-10 pb-5">
        <div class="max-w-5xl mx-auto px-4">
            <div class="mb-5 text-left sm:text-center">
                <h1 class="text-orange-400 text-4xl sm:text-5xl font-bold font-nunito">Yuk buat dapurmu...</h1>
                <h2 class="text-lg text-gray-600">Buat akun dan bagikan resep terbaikmu.</h2>
            </div>
            <div class="max-w-lg mx-auto">
                <livewire:auth.forms.signup />
            </div>
        </div>
    </section>
@endsection
