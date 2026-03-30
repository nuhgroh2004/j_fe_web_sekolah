@extends('layouts.app')

@section('title', 'Academics')
@section('meta_description', 'Explore academic programs and study majors offered at Nusantara Academy — from STEM to Arts & Athletics.')

@section('content')
    {{-- Page Header --}}
    <section class="pt-32 pb-16 bg-primary-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-serif text-4xl sm:text-5xl font-bold text-white mb-4">Academics</h1>
            <p class="text-white/60 text-lg">Our programs and study areas</p>
        </div>
    </section>

    @include('sections.programs')
    @include('sections.features')
@endsection
