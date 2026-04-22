<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,600;12..96,700;12..96,800&family=Hind+Siliguri:wght@300;400;500;600;700&family=Noto+Sans+Bengali:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Slick Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="has-noise">
<!-- ═══════════════════════════════
     HEADER
═══════════════════════════════ -->
<header id="site-header" class="fixed top-0 left-0 right-0 z-50 bg-white/90">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">

      <!-- Logo -->
      <a href="{{url('/')}}" class="text-xl font-bold">PlasicDocs</a>

      <!-- Desktop Nav -->
      <nav class="hidden lg:flex items-center gap-8">
        <a href="{{url('/')}}" class="nav-link active text-sm">হোম</a>
        <a href="{{url('/blogs')}}" class="nav-link text-sm">সকল ব্লগ</a>
        <a href="{{url('/single-blog')}}" class="nav-link text-sm">টেক বিস্তারিত</a>
        <a href="#categories" class="nav-link text-sm">ক্যাটাগরি</a>
        <a href="#newsletter" class="nav-link text-sm">নিউজলেটার</a>
      </nav>

      <!-- Right Actions -->
      <div class="flex items-center gap-3">
        <button class="hidden sm:flex items-center gap-2 text-sm px-4 py-2 rounded-full border transition-colors" style="background:var(--color-ink-100);color:var(--color-ink-500);border-color:var(--color-ink-200);">
          <i class="fa-solid fa-magnifying-glass text-xs"></i>
          <span style="font-size:.82rem;">খুঁজুন...</span>
          <kbd style="font-size:.65rem;background:white;border:1px solid var(--color-ink-200);border-radius:5px;padding:1px 5px;color:var(--color-ink-500);">⌘K</kbd>
        </button>
        <a href="{{url('/blogs')}}" class="btn-brand text-sm py-2 px-5 hidden sm:inline-flex items-center gap-2">
          <i class="fa-solid fa-rss text-xs"></i> সাবস্ক্রাইব
        </a>
        <button id="menu-toggle" class="lg:hidden p-2 rounded-lg" style="color:var(--color-ink-700);">
          <i class="fa-solid fa-bars text-lg"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu">
    <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-3">
      <a href="{{url('/')}}" class="nav-link text-sm">হোম</a>
      <a href="{{url('/blogs')}}" class="nav-link text-sm">সকল ব্লগ</a>
      <a href="{{url('/single-blog')}}" class="nav-link text-sm">টেক বিস্তারিত</a>
      <a href="#categories" class="nav-link text-sm">ক্যাটাগরি</a>
      <a href="#newsletter" class="nav-link text-sm">নিউজলেটার</a>
    </div>
  </div>
</header>