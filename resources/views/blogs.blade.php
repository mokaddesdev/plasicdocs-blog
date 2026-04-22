@extends('layouts.app')

@section('content')

@include('frontend.blogs.hero-breadcrumb')

<!-- MAIN CONTENT -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <div class="flex flex-col lg:flex-row gap-8">

    <!-- ── POSTS COLUMN ── -->
    <div class="flex-1 min-w-0">

      @include('frontend.blogs.filter-bar')

      @include('frontend.blogs.featured-post')

      @include('frontend.blogs.posts-grid')

    </div>

    {{-- SIDEBAR --}}
    @include('frontend.blogs.sidebar')

  </div>
</main>

@endsection