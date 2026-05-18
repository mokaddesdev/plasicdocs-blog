@extends('frontend.layouts.app')

@section('title', 'Blogs - PlasicDocs');

@section('content')

@include('frontend.pages.blogs.sections.hero-breadcrumb')

<!-- MAIN CONTENT -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <div class="flex flex-col lg:flex-row gap-8">

    <!-- ── POSTS COLUMN ── -->
    <div class="flex-1 min-w-0">

      @include('frontend.pages.blogs.sections.filter-bar')

      @include('frontend.pages.blogs.sections.featured-post')

      @include('frontend.pages.blogs.sections.posts-grid')

    </div>

    {{-- SIDEBAR --}}
    @include('frontend.pages.blogs.sections.sidebar')

  </div>
</main>

@endsection