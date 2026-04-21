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


<!-- ═══════════════════════════════
     HERO SLIDER
═══════════════════════════════ -->
<section class="hero-section" style="margin-top:64px;">
  <div class="hero-slider">

    <!-- Slide 1 -->
    <div class="hero-slide">
      <div class="hero-slide-bg" style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?w=1400&q=80');"></div>
      <div class="hero-slide-overlay"></div>
      <div class="hero-slide-content">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
          <div>
            <span class="hero-badge"><i class="fa-solid fa-bolt text-xs"></i> ট্রেন্ডিং</span>
            <h1 class="hero-title">কৃত্রিম বুদ্ধিমত্তা কি সত্যিই মানুষের চাকরি নিয়ে নেবে?</h1>
            <div class="hero-meta">
              <img src="https://avatars.githubusercontent.com/u/27496908?v=4" alt="Nayemur Rahman" />
              <div>
                <div style="font-weight:600;color:white;font-size:.85rem;">Md. Nayemur Rahman</div>
                <div>৭ এপ্রিল ২০২৬ · ৮ মিনিট পড়া</div>
              </div>
              <span style="background:rgba(255,255,255,.12);border-radius:99px;padding:4px 12px;font-size:.75rem;">AI & ভবিষ্যৎ</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="hero-slide">
      <div class="hero-slide-bg" style="background-image:url('https://images.unsplash.com/photo-1677442136019-21780ecad995?w=1400&q=80');"></div>
      <div class="hero-slide-overlay"></div>
      <div class="hero-slide-content">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
          <div>
            <span class="hero-badge"><span class="live-dot"></span> লাইভ</span>
            <h1 class="hero-title">GPT-5 এর নতুন ফিচার: মাল্টিমোডাল AI এর যুগে স্বাগতম</h1>
            <div class="hero-meta">
              <img src="https://i.pravatar.cc/80?img=22" alt="Rabbi Hossain" />
              <div>
                <div style="font-weight:600;color:white;font-size:.85rem;">Rabbi Hossain</div>
                <div>৬ এপ্রিল ২০২৬ · ১২ মিনিট পড়া</div>
              </div>
              <span style="background:rgba(255,255,255,.12);border-radius:99px;padding:4px 12px;font-size:.75rem;">মেশিন লার্নিং</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="hero-slide">
      <div class="hero-slide-bg" style="background-image:url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=1400&q=80');"></div>
      <div class="hero-slide-overlay"></div>
      <div class="hero-slide-content">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
          <div>
            <span class="hero-badge"><i class="fa-solid fa-fire text-xs"></i> হট</span>
            <h1 class="hero-title">Rust প্রোগ্রামিং ভাষা কেন সকল ডেভেলপারের শেখা উচিত?</h1>
            <div class="hero-meta">
              <img src="https://i.pravatar.cc/80?img=33" alt="Maruf Hossain" />
              <div>
                <div style="font-weight:600;color:white;font-size:.85rem;">Maruf Hossain</div>
                <div>৫ এপ্রিল ২০২৬ · ১০ মিনিট পড়া</div>
              </div>
              <span style="background:rgba(255,255,255,.12);border-radius:99px;padding:4px 12px;font-size:.75rem;">প্রোগ্রামিং</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.hero-slider -->

  <!-- Trending tags -->
  <div style="background:white;border-bottom:1px solid var(--color-ink-200);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-wrap items-center gap-3">
      <span style="font-size:.78rem;font-weight:700;color:var(--color-ink-500);letter-spacing:.06em;text-transform:uppercase;">ট্রেন্ডিং:</span>
      <a href="#" class="trend-pill"><span class="num">#1</span> ChatGPT</a>
      <a href="#" class="trend-pill"><span class="num">#2</span> Web3</a>
      <a href="#" class="trend-pill"><span class="num">#3</span> Python</a>
      <a href="#" class="trend-pill"><span class="num">#4</span> সাইবার নিরাপত্তা</a>
      <a href="#" class="trend-pill"><span class="num">#5</span> ক্লাউড কম্পিউটিং</a>
      <a href="#" class="trend-pill"><span class="num">#6</span> React.js</a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════
     STATS
═══════════════════════════════ -->
<section class="py-14" style="background:var(--color-ink-50);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="stat-card">
        <div class="stat-number" id="count-articles">0</div>
        <div class="stat-label">প্রকাশিত আর্টিকেল</div>
      </div>
      <div class="stat-card">
        <div class="stat-number" id="count-authors">0</div>
        <div class="stat-label">বিশেষজ্ঞ লেখক</div>
      </div>
      <div class="stat-card">
        <div class="stat-number" id="count-readers">0</div>
        <div class="stat-label">মাসিক পাঠক</div>
      </div>
      <div class="stat-card">
        <div class="stat-number" id="count-cats">0</div>
        <div class="stat-label">ক্যাটাগরি</div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════
     BLOG SECTION
═══════════════════════════════ -->
<section id="blog-section" class="py-16" style="background:white;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
      <div>
        <div class="section-label">সর্বশেষ পোস্ট</div>
        <h2 class="section-title">নতুন প্রযুক্তির খবর</h2>
        <p style="color:var(--color-ink-500);font-size:.9rem;margin-top:6px;max-width:480px;">বাংলায় সর্বোত্তম টেকনোলজি কন্টেন্ট, বিশেষজ্ঞদের দ্বারা লিখিত।</p>
      </div>
      <a href="{{url('/blogs')}}" class="btn-brand text-sm inline-flex items-center gap-2 self-start sm:self-auto">
        সব ব্লগ দেখুন <i class="fa-solid fa-arrow-right text-xs"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

      <!-- Card 1 -->
      <article class="blog-card fade-up">
        <div class="blog-card-thumb">
          <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=600&q=80" alt="AI Robotics" loading="lazy" />
          <span class="blog-card-cat">রোবোটিক্স</span>
        </div>
        <div class="blog-card-body">
          <a href="{{url('/single-blog')}}"><h3 class="blog-card-title">বাংলাদেশে রোবোটিক্স ইন্ডাস্ট্রি: সম্ভাবনা ও চ্যালেঞ্জ</h3></a>
          <p class="blog-card-excerpt">দেশে রোবোটিক্স প্রযুক্তি ব্যবহারের ক্ষেত্রে নতুন দিগন্ত উন্মোচিত হচ্ছে, তবে অনেক বাধাও রয়েছে।</p>
          <div class="blog-card-footer">
            <div class="author-info">
              <img src="https://i.pravatar.cc/80?img=44" alt="Abdullah" />
              <div>
                <div class="author-name">Abdullah Al Masoud</div>
                <div class="author-date">৪ এপ্রিল ২০২৬</div>
              </div>
            </div>
            <a href="{{url('/single-blog')}}" class="read-more-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="blog-card fade-up delay-1">
        <div class="blog-card-thumb">
          <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&q=80" alt="Cybersecurity" loading="lazy" />
          <span class="blog-card-cat">সাইবার নিরাপত্তা</span>
        </div>
        <div class="blog-card-body">
          <a href="{{url('/single-blog')}}"><h3 class="blog-card-title">২০২৬ সালের সেরা ৫টি সাইবার হুমকি থেকে বাঁচার উপায়</h3></a>
          <p class="blog-card-excerpt">হ্যাকারদের নতুন কৌশল মোকাবেলায় আপনার ডিজিটাল নিরাপত্তা নিশ্চিত করুন এই গাইডের মাধ্যমে।</p>
          <div class="blog-card-footer">
            <div class="author-info">
              <img src="https://i.pravatar.cc/80?img=55" alt="Shahriar" />
              <div>
                <div class="author-name">Md. Shahriar</div>
                <div class="author-date">৩ এপ্রিল ২০২৬</div>
              </div>
            </div>
            <a href="{{url('/single-blog')}}" class="read-more-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="blog-card fade-up delay-2">
        <div class="blog-card-thumb">
          <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&q=80" alt="Cloud" loading="lazy" />
          <span class="blog-card-cat">ক্লাউড</span>
        </div>
        <div class="blog-card-body">
          <a href="{{url('/single-blog')}}"><h3 class="blog-card-title">AWS বনাম Azure বনাম Google Cloud: কোনটি আপনার জন্য সেরা?</h3></a>
          <p class="blog-card-excerpt">তিনটি প্রধান ক্লাউড প্ল্যাটফর্মের বিস্তারিত তুলনামূলক বিশ্লেষণ করা হয়েছে এই আর্টিকেলে।</p>
          <div class="blog-card-footer">
            <div class="author-info">
              <img src="https://i.pravatar.cc/80?img=66" alt="Mir Sumon" />
              <div>
                <div class="author-name">Mir Sumon</div>
                <div class="author-date">২ এপ্রিল ২০২৬</div>
              </div>
            </div>
            <a href="{{url('/single-blog')}}" class="read-more-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
          </div>
        </div>
      </article>

      <!-- Card 4 -->
      <article class="blog-card fade-up delay-3">
        <div class="blog-card-thumb">
          <img src="https://images.unsplash.com/photo-1639762681057-408e52192e55?w=600&q=80" alt="Web3" loading="lazy" />
          <span class="blog-card-cat">Web3</span>
        </div>
        <div class="blog-card-body">
          <a href="{{url('/single-blog')}}"><h3 class="blog-card-title">ব্লকচেইন ও DeFi: বাংলাদেশের জন্য সুযোগ না ঝুঁকি?</h3></a>
          <p class="blog-card-excerpt">বিকেন্দ্রীভূত অর্থব্যবস্থা আমাদের দেশে কতটা বাস্তবসম্মত এবং এর ভবিষ্যৎ কী?</p>
          <div class="blog-card-footer">
            <div class="author-info">
              <img src="https://i.pravatar.cc/80?img=77" alt="Murtaza" />
              <div>
                <div class="author-name">Murtaza Musain</div>
                <div class="author-date">১ এপ্রিল ২০২৬</div>
              </div>
            </div>
            <a href="{{url('/single-blog')}}" class="read-more-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════
     CATEGORIES
═══════════════════════════════ -->
<section id="categories" class="py-14" style="background:var(--color-ink-50);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-10">
      <div class="section-label mx-auto" style="justify-content:center;">ব্রাউজ করুন</div>
      <h2 class="section-title">ক্যাটাগরি অনুযায়ী</h2>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
      <a href="{{url('/blogs')}}" class="group flex flex-col items-center gap-3 p-5 bg-white rounded-2xl border transition-all hover:shadow-lg" style="border-color:var(--color-ink-200);">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl" style="background:linear-gradient(135deg,#fde68a,#fbbf24);">🤖</div>
        <span class="text-sm font-semibold text-center" style="color:var(--color-ink-800);">আর্টিফিশিয়াল ইন্টেলিজেন্স</span>
        <span class="text-xs" style="color:var(--color-ink-500);">৪২টি পোস্ট</span>
      </a>
      <a href="{{url('/blogs')}}" class="group flex flex-col items-center gap-3 p-5 bg-white rounded-2xl border transition-all hover:shadow-lg" style="border-color:var(--color-ink-200);">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl" style="background:linear-gradient(135deg,#bfdbfe,#60a5fa);">💻</div>
        <span class="text-sm font-semibold" style="color:var(--color-ink-800);">প্রোগ্রামিং</span>
        <span class="text-xs" style="color:var(--color-ink-500);">৬৮টি পোস্ট</span>
      </a>
      <a href="{{url('/blogs')}}" class="group flex flex-col items-center gap-3 p-5 bg-white rounded-2xl border transition-all hover:shadow-lg" style="border-color:var(--color-ink-200);">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl" style="background:linear-gradient(135deg,#bbf7d0,#4ade80);">🔒</div>
        <span class="text-sm font-semibold" style="color:var(--color-ink-800);">সাইবার নিরাপত্তা</span>
        <span class="text-xs" style="color:var(--color-ink-500);">৩১টি পোস্ট</span>
      </a>
      <a href="{{url('/blogs')}}" class="group flex flex-col items-center gap-3 p-5 bg-white rounded-2xl border transition-all hover:shadow-lg" style="border-color:var(--color-ink-200);">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl" style="background:linear-gradient(135deg,#e9d5ff,#c084fc);">☁️</div>
        <span class="text-sm font-semibold" style="color:var(--color-ink-800);">ক্লাউড কম্পিউটিং</span>
        <span class="text-xs" style="color:var(--color-ink-500);">২৫টি পোস্ট</span>
      </a>
      <a href="{{url('/blogs')}}" class="group flex flex-col items-center gap-3 p-5 bg-white rounded-2xl border transition-all hover:shadow-lg" style="border-color:var(--color-ink-200);">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl" style="background:linear-gradient(135deg,#fed7aa,#fb923c);">📱</div>
        <span class="text-sm font-semibold" style="color:var(--color-ink-800);">মোবাইল ডেভ</span>
        <span class="text-xs" style="color:var(--color-ink-500);">৩৮টি পোস্ট</span>
      </a>
      <a href="{{url('/blogs')}}" class="group flex flex-col items-center gap-3 p-5 bg-white rounded-2xl border transition-all hover:shadow-lg" style="border-color:var(--color-ink-200);">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl" style="background:linear-gradient(135deg,#fecaca,#f87171);">🌐</div>
        <span class="text-sm font-semibold" style="color:var(--color-ink-800);">Web3 & ব্লকচেইন</span>
        <span class="text-xs" style="color:var(--color-ink-500);">২০টি পোস্ট</span>
      </a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════
     FEATURED AUTHORS
═══════════════════════════════ -->
<section class="py-14" style="background:white;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-3 mb-10">
      <div>
        <div class="section-label">আমাদের টিম</div>
        <h2 class="section-title">বিশেষজ্ঞ লেখকরা</h2>
      </div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-5">
      <div class="flex flex-col items-center text-center gap-2 group">
        <div class="relative">
          <img src="https://avatars.githubusercontent.com/u/27496908?v=4" class="w-16 h-16 rounded-2xl object-cover border-2 transition-colors" style="border-color:var(--color-ink-200);" />
          <div class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full border-2 border-white flex items-center justify-center text-white text-xs" style="background:var(--color-brand);">✓</div>
        </div>
        <div class="font-semibold text-sm" style="color:var(--color-ink-800);">Md. Nayemur</div>
        <div class="text-xs" style="color:var(--color-ink-500);">AI বিশেষজ্ঞ</div>
      </div>
      <div class="flex flex-col items-center text-center gap-2 group">
        <div class="relative">
          <img src="https://i.pravatar.cc/100?img=22" class="w-16 h-16 rounded-2xl object-cover border-2 transition-colors" style="border-color:var(--color-ink-200);" />
          <div class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full border-2 border-white flex items-center justify-center text-white text-xs" style="background:var(--color-brand);">✓</div>
        </div>
        <div class="font-semibold text-sm" style="color:var(--color-ink-800);">Rabbi Hossain</div>
        <div class="text-xs" style="color:var(--color-ink-500);">ML ইঞ্জিনিয়ার</div>
      </div>
      <div class="flex flex-col items-center text-center gap-2 group">
        <div class="relative">
          <img src="https://i.pravatar.cc/100?img=33" class="w-16 h-16 rounded-2xl object-cover border-2 transition-colors" style="border-color:var(--color-ink-200);" />
          <div class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full border-2 border-white flex items-center justify-center text-white text-xs" style="background:var(--color-brand);">✓</div>
        </div>
        <div class="font-semibold text-sm" style="color:var(--color-ink-800);">Maruf Hossain</div>
        <div class="text-xs" style="color:var(--color-ink-500);">Rust ডেভেলপার</div>
      </div>
      <div class="flex flex-col items-center text-center gap-2 group">
        <div class="relative">
          <img src="https://i.pravatar.cc/100?img=44" class="w-16 h-16 rounded-2xl object-cover border-2 transition-colors" style="border-color:var(--color-ink-200);" />
          <div class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full border-2 border-white flex items-center justify-center text-white text-xs" style="background:var(--color-brand);">✓</div>
        </div>
        <div class="font-semibold text-sm" style="color:var(--color-ink-800);">Naznin Bristy</div>
        <div class="text-xs" style="color:var(--color-ink-500);">UI/UX ডিজাইনার</div>
      </div>
      <div class="flex flex-col items-center text-center gap-2 group">
        <div class="relative">
          <img src="https://i.pravatar.cc/100?img=55" class="w-16 h-16 rounded-2xl object-cover border-2 transition-colors" style="border-color:var(--color-ink-200);" />
          <div class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full border-2 border-white flex items-center justify-center text-white text-xs" style="background:var(--color-brand);">✓</div>
        </div>
        <div class="font-semibold text-sm" style="color:var(--color-ink-800);">Sultana Rabea</div>
        <div class="text-xs" style="color:var(--color-ink-500);">ডেটা সায়েন্টিস্ট</div>
      </div>
      <div class="flex flex-col items-center text-center gap-2 group">
        <div class="relative">
          <img src="https://i.pravatar.cc/100?img=66" class="w-16 h-16 rounded-2xl object-cover border-2 transition-colors" style="border-color:var(--color-ink-200);" />
          <div class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full border-2 border-white flex items-center justify-center text-white text-xs" style="background:var(--color-brand);">✓</div>
        </div>
        <div class="font-semibold text-sm" style="color:var(--color-ink-800);">Nasir Hossaien</div>
        <div class="text-xs" style="color:var(--color-ink-500);">ক্লাউড আর্কিটেক্ট</div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════
     NEWSLETTER
═══════════════════════════════ -->
<section id="newsletter" class="newsletter-section py-20">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center relative z-10">
    <div class="inline-flex items-center gap-2 mb-5 px-4 py-2 rounded-full text-sm font-semibold" style="background:rgba(249,115,22,.15);color:var(--color-brand);">
      <i class="fa-solid fa-envelope-open-text"></i> নিউজলেটার
    </div>
    <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-4 leading-tight" style="font-family:'Bricolage Grotesque',sans-serif;">
      সেরা টেক কন্টেন্ট পান<br/><span style="color:var(--color-brand);">সরাসরি আপনার ইনবক্সে</span>
    </h2>
    <p class="text-base mb-8" style="color:rgba(255,255,255,.65);line-height:1.7;">
      প্রতি সপ্তাহে AI, প্রোগ্রামিং, সাইবার নিরাপত্তা এবং আরও অনেক বিষয়ে কিউরেটেড কন্টেন্ট। স্প্যাম নেই, শুধু মূল্যবান জ্ঞান।
    </p>
    <div class="flex flex-col sm:flex-row gap-3 max-w-lg mx-auto">
      <input type="email" class="newsletter-input flex-1" placeholder="আপনার ইমেইল ঠিকানা দিন..." />
      <button class="btn-brand flex items-center justify-center gap-2">
        <i class="fa-solid fa-paper-plane text-sm"></i> সাবস্ক্রাইব করুন
      </button>
    </div>
    <p class="mt-4 text-xs" style="color:rgba(255,255,255,.35);">
      <i class="fa-solid fa-shield-halved mr-1"></i> আমরা কখনো আপনার তথ্য শেয়ার করি না। যেকোনো সময় আনসাবস্ক্রাইব করুন।
    </p>
    <div class="flex items-center justify-center gap-3 mt-6">
      <div class="flex -space-x-2">
        <img src="https://i.pravatar.cc/40?img=11" class="w-8 h-8 rounded-full border-2 border-white" />
        <img src="https://i.pravatar.cc/40?img=22" class="w-8 h-8 rounded-full border-2 border-white" />
        <img src="https://i.pravatar.cc/40?img=33" class="w-8 h-8 rounded-full border-2 border-white" />
        <img src="https://i.pravatar.cc/40?img=44" class="w-8 h-8 rounded-full border-2 border-white" />
        <div class="w-8 h-8 rounded-full border-2 border-white flex items-center justify-center text-xs font-bold" style="background:var(--color-brand);color:white;">+</div>
      </div>
      <span class="text-sm" style="color:rgba(255,255,255,.6);">১২,৫০০+ পাঠক ইতিমধ্যে সাবস্ক্রাইব করেছেন</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════
     FOOTER
═══════════════════════════════ -->
<footer class="site-footer pt-16 pb-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- Col 1: Brand -->
      <div>
        <div class="footer-brand-logo mb-4">PlasicDocs<span>+</span></div>
        <p class="text-sm leading-relaxed mb-5" style="color:rgba(255,255,255,.5);max-width:240px;">
          PlasicDocs — বাংলায় সর্বোচ্চ মানের প্রযুক্তি ব্লগ। জ্ঞান ভাগ করুন, এগিয়ে যান।
        </p>
        <div class="flex gap-2">
          <a href="#" class="social-btn"><i class="fab fa-facebook-f text-sm"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-twitter text-sm"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-youtube text-sm"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-linkedin-in text-sm"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-github text-sm"></i></a>
        </div>
      </div>

      <!-- Col 2: Quick Links -->
      <div>
        <h4 class="footer-heading">দ্রুত লিংক</h4>
        <a href="{{url('/')}}" class="footer-link">হোম পেজ</a>
        <a href="{{url('/blogs')}}" class="footer-link">সকল ব্লগ</a>
        <a href="{{url('/single-blog')}}" class="footer-link">টেক আর্টিকেল</a>
        <a href="#categories" class="footer-link">ক্যাটাগরি</a>
        <a href="#" class="footer-link">লেখক হন</a>
        <a href="#" class="footer-link">বিজ্ঞাপন</a>
      </div>

      <!-- Col 3: Categories -->
      <div>
        <h4 class="footer-heading">ক্যাটাগরি</h4>
        <a href="{{url('/blogs')}}" class="footer-link">আর্টিফিশিয়াল ইন্টেলিজেন্স</a>
        <a href="{{url('/blogs')}}" class="footer-link">প্রোগ্রামিং টিউটোরিয়াল</a>
        <a href="{{url('/blogs')}}" class="footer-link">সাইবার নিরাপত্তা</a>
        <a href="{{url('/blogs')}}" class="footer-link">ক্লাউড কম্পিউটিং</a>
        <a href="{{url('/blogs')}}" class="footer-link">Web3 & ব্লকচেইন</a>
        <a href="{{url('/blogs')}}" class="footer-link">মোবাইল ডেভেলপমেন্ট</a>
      </div>

      <!-- Col 4: Contact -->
      <div>
        <h4 class="footer-heading">যোগাযোগ</h4>
        <div class="flex flex-col gap-3">
          <div class="flex items-start gap-3 text-sm" style="color:rgba(255,255,255,.55);">
            <i class="fa-solid fa-location-dot mt-0.5" style="color:var(--color-brand);min-width:14px;"></i>
            <span>ঢাকা, বাংলাদেশ</span>
          </div>
          <div class="flex items-start gap-3 text-sm" style="color:rgba(255,255,255,.55);">
            <i class="fa-solid fa-envelope mt-0.5" style="color:var(--color-brand);min-width:14px;"></i>
            <span>hello@plasicdocs.com</span>
          </div>
          <div class="flex items-start gap-3 text-sm" style="color:rgba(255,255,255,.55);">
            <i class="fa-solid fa-phone mt-0.5" style="color:var(--color-brand);min-width:14px;"></i>
            <span>+880 1700-000000</span>
          </div>
        </div>
        <div class="mt-6 p-3 rounded-xl text-xs" style="background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);color:rgba(255,255,255,.4);">
          <i class="fa-solid fa-code mr-1" style="color:var(--color-brand);"></i>
          Developed by <span style="color:rgba(255,255,255,.7);font-weight:600;">Md. Nayemur Rahman</span>
        </div>
      </div>
    </div>

    <hr class="footer-divider my-10" />

    <!-- Tags -->
    <div class="flex flex-wrap gap-2 mb-8">
      <span class="text-xs font-semibold uppercase tracking-wider" style="color:rgba(255,255,255,.3);">ট্যাগ:</span>
      <a href="#" style="display:inline-flex;align-items:center;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.5);border-radius:99px;padding:5px 14px;font-size:.78rem;font-weight:600;transition:all .2s;">#AI</a>
      <a href="#" style="display:inline-flex;align-items:center;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.5);border-radius:99px;padding:5px 14px;font-size:.78rem;font-weight:600;">#Python</a>
      <a href="#" style="display:inline-flex;align-items:center;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.5);border-radius:99px;padding:5px 14px;font-size:.78rem;font-weight:600;">#React</a>
      <a href="#" style="display:inline-flex;align-items:center;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.5);border-radius:99px;padding:5px 14px;font-size:.78rem;font-weight:600;">#Cybersecurity</a>
      <a href="#" style="display:inline-flex;align-items:center;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.5);border-radius:99px;padding:5px 14px;font-size:.78rem;font-weight:600;">#Web3</a>
      <a href="#" style="display:inline-flex;align-items:center;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.5);border-radius:99px;padding:5px 14px;font-size:.78rem;font-weight:600;">#Cloud</a>
    </div>
  </div>
</footer>

<!-- COPYRIGHT -->
<div class="copyright-bar py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-3">
    <p class="text-xs" style="color:rgba(255,255,255,.3);">
      © ২০২৬ <span style="color:var(--color-brand);font-weight:600;">PlasicDocs</span>. সর্বস্বত্ব সংরক্ষিত।
    </p>
    <div class="flex gap-4">
      <a href="#" class="text-xs hover:underline" style="color:rgba(255,255,255,.3);">গোপনীয়তা নীতি</a>
      <a href="#" class="text-xs hover:underline" style="color:rgba(255,255,255,.3);">ব্যবহারের শর্ত</a>
      <a href="#" class="text-xs hover:underline" style="color:rgba(255,255,255,.3);">সাইটম্যাপ</a>
    </div>
  </div>
</div>

<!-- Back to Top -->
<button id="back-to-top" class="fixed bottom-6 right-6 w-11 h-11 rounded-xl flex items-center justify-center text-white shadow-lg z-50 transition-all opacity-0 translate-y-4" style="background:var(--color-brand);">
  <i class="fa-solid fa-arrow-up text-sm"></i>
</button>


<!-- ═══ SCRIPTS ═══ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.8.0/countUp.umd.js"></script>
</body>
</html>
