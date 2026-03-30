{{-- Homepage: assembles all section components --}}
@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', 'Nusantara Academy — Inspiring Excellence, Shaping Future Leaders through Quality Education, Character Building, and Innovation.')

@section('content')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.features')
    @include('sections.statistics')
    @include('sections.programs')
    @include('sections.principal')
    @include('sections.news')
    @include('sections.gallery')
    @include('sections.admission')
    @include('sections.contact')
@endsection
