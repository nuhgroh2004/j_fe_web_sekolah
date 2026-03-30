@extends('layouts.app')

@section('title', 'Contact')
@section('meta_description', 'Get in touch with Nusantara Academy. Find our address, phone number, email, and location on the map.')

@section('content')
    {{-- Page Header --}}
    <section class="pt-32 pb-16 bg-primary-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-serif text-4xl sm:text-5xl font-bold text-white mb-4">Contact Us</h1>
            <p class="text-white/60 text-lg">We'd love to hear from you</p>
        </div>
    </section>

    @include('sections.contact')
    @include('sections.admission')
@endsection
