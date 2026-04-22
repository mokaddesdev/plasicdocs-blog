@extends('layouts.app')

@section('content')

<!-- BREADCRUMB -->
  @include('frontend.single-blog.breadcrumb')


<!-- MAIN CONTENT -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="flex flex-col lg:flex-row gap-10">

    <!-- ── ARTICLE ── -->
    <article class="article-container flex-1 min-w-0">

      <!-- Article Header -->
      @include('frontend.single-blog.article-header')
      <!-- Author Card -->
      @include('frontend.single-blog.author-info-card')
      <!-- Article Body -->
       @include('frontend.single-blog.article-body')

      <!-- Share Section -->
       @include('frontend.single-blog.share-post')
      <!-- COMMENTS -->
       @include('frontend.single-blog.show-comment')

      <!-- Comment Form -->
       @include('frontend.single-blog.comment-form')

    </article><!-- /article -->
    @include('frontend.single-blog.sidebar')
  </div>
</main>

@endsection