@extends('frontend.layouts.app')

@section('title', 'Home - PlasicDocs');

@section('content')

@include('frontend.pages.home.sections.hero')

@include('frontend.pages.home.sections.stats')

@include('frontend.pages.home.sections.blogs')

@include('frontend.pages.home.sections.categories')

@include('frontend.pages.home.sections.authors')

@include('frontend.pages.home.sections.newsletter')

@endsection

@section('footer-tag')
    @include('frontend.pages.home.sections.footer-tag')
@endsection