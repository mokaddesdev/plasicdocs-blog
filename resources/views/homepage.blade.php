@extends('layouts.app')

@section('content')

@include('frontend.home.hero')

@include('frontend.home.stats')

@include('frontend.home.blogs')

@include('frontend.home.categories')

@include('frontend.home.authors')

@include('frontend.home.newsletter')

@endsection

@section('footer-tag')
    @include('frontend.home.footer-tag')
@endsection
