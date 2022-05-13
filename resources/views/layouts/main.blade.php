@extends('layouts.base')

@section('body')
    <div class="flex min-h-screen flex-col bg-orange-50/40">
        <x-globals.navbar />
        <main class="flex-1-0-auto">
            @yield('page-content')
        </main>
        <x-globals.footer />
    </div>
@endsection
