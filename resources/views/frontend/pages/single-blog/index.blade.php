@extends('frontend.layouts.app')

@section('title', 'Blog Post - PlasicDocs');

@section('content')

<!-- BREADCRUMB -->
  @include('frontend.pages.single-blog.sections.breadcrumb')


<!-- MAIN CONTENT -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="flex flex-col lg:flex-row gap-10">

    <!-- ── ARTICLE ── -->
    <article class="article-container flex-1 min-w-0">

      <!-- Article Header -->
      @include('frontend.pages.single-blog.sections.article-header')
      <!-- Author Card -->
      @include('frontend.pages.single-blog.sections.author-info-card')
      <!-- Article Body -->
       @include('frontend.pages.single-blog.sections.article-body')

      <!-- Share Section -->
       @include('frontend.pages.single-blog.sections.share-post')
      <!-- COMMENTS -->
       @include('frontend.pages.single-blog.sections.show-comment')

      <!-- Comment Form -->
       @include('frontend.pages.single-blog.sections.comment-form')

    </article><!-- /article -->
    @include('frontend.pages.single-blog.sections.sidebar')
  </div>
</main>

@endsection