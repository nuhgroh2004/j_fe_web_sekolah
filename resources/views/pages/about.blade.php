@extends('layouts.app')

@section('title', 'About Us')
@section('meta_description', 'Learn about Nusantara Academy — our history, mission, values, and commitment to educational excellence.')

@section('content')
    {{-- Page Header --}}
    <section class="pt-32 pb-16 bg-primary-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-serif text-4xl sm:text-5xl font-bold text-white mb-4">About Us</h1>
            <p class="text-white/60 text-lg">Discover our story, mission, and values</p>
        </div>
    </section>

    @include('sections.about')
    @include('sections.features')
    @include('sections.principal')
    @include('sections.statistics')
@endsection
