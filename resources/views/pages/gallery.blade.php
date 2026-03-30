@extends('layouts.app')

@section('title', 'Gallery')
@section('meta_description', 'Browse the photo gallery of Nusantara Academy — campus life, events, and student activities.')

@section('content')
    {{-- Page Header --}}
    <section class="pt-32 pb-16 bg-primary-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-serif text-4xl sm:text-5xl font-bold text-white mb-4">Photo Gallery</h1>
            <p class="text-white/60 text-lg">Moments captured at our school</p>
        </div>
    </section>

    @include('sections.gallery')
@endsection
