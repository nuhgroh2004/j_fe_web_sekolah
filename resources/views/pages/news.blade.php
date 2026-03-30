@extends('layouts.app')

@section('title', 'News & Events')
@section('meta_description', 'Stay up to date with the latest news, events, and achievements at Nusantara Academy.')

@section('content')
    {{-- Page Header --}}
    <section class="pt-32 pb-16 bg-primary-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-serif text-4xl sm:text-5xl font-bold text-white mb-4">News &amp; Events</h1>
            <p class="text-white/60 text-lg">Latest updates from our school community</p>
        </div>
    </section>

    @include('sections.news')
@endsection
