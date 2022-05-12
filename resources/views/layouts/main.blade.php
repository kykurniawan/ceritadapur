@extends('layouts.base')

@section('body')
    <x-globals.navbar />
    <main>
        @yield('page-content')
    </main>
    <x-globals.footer />
@endsection
