<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>সকল ব্লগ — PlasicDocs</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,600;12..96,700;12..96,800&family=Hind+Siliguri:wght@400;500;600;700&family=Noto+Sans+Bengali:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

   @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

<!-- HEADER -->
<header id="site-header" class="fixed top-0 left-0 right-0 z-50 bg-white/90">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <a href="{{url('/')}}" class="footer-brand-logo text-xl">PlasicDocs<span>+</span></a>
      <nav class="hidden lg:flex items-center gap-8">
        <a href="{{url('/')}}" class="nav-link text-sm">হোম</a>
        <a href="{{url('/blogs')}}" class="nav-link active text-sm">সকল ব্লগ</a>
        <a href="{{url('/single-blog')}}" class="nav-link text-sm">টেক বিস্তারিত</a>
        <a href="{{url('/')}}#categories" class="nav-link text-sm">ক্যাটাগরি</a>
        <a href="{{url('/')}}#newsletter" class="nav-link text-sm">নিউজলেটার</a>
      </nav>
      <div class="flex items-center gap-3">
        <a href="{{url('/')}}#newsletter" class="btn-brand text-sm py-2 px-5 hidden sm:inline-flex gap-2">
          <i class="fa-solid fa-rss text-xs"></i> সাবস্ক্রাইব
        </a>
        <button id="menu-toggle" class="lg:hidden p-2 rounded-lg" style="color:var(--color-ink-700);">
          <i class="fa-solid fa-bars text-lg"></i>
        </button>
      </div>
    </div>
  </div>
  <div id="mobile-menu">
    <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-3">
      <a href="{{url('/')}}" class="nav-link text-sm">হোম</a>
      <a href="{{url('/blogs')}}" class="nav-link active text-sm">সকল ব্লগ</a>
      <a href="{{url('/single-blog')}}" class="nav-link text-sm">টেক বিস্তারিত</a>
    </div>
  </div>
</header>


<!-- PAGE HERO -->
<section class="page-hero" style="padding-top:100px;padding-bottom:56px;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="flex items-center gap-2 mb-3">
      <span class="breadcrumb-item"><a href="{{url('/')}}">হোম</a></span>
      <span class="breadcrumb-sep">/</span>
      <span class="breadcrumb-item" style="color:var(--color-brand);">সকল ব্লগ</span>
    </div>
    <h1 class="text-3xl sm:text-4xl font-extrabold text-white mb-3" style="font-family:'Bricolage Grotesque',sans-serif;">সকল ব্লগ পোস্ট</h1>
    <p style="color:rgba(255,255,255,.55);font-size:.95rem;max-width:500px;">প্রযুক্তি, AI, প্রোগ্রামিং, সাইবার নিরাপত্তা ও আরও অনেক বিষয়ে বিশেষজ্ঞ কন্টেন্ট।</p>
  </div>
</section>


<!-- MAIN CONTENT -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <div class="flex flex-col lg:flex-row gap-8">

    <!-- ── POSTS COLUMN ── -->
    <div class="flex-1 min-w-0">

      <!-- Filter Bar -->
      <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8">
        <div class="flex flex-wrap gap-2">
          <button class="filter-tab active">সব <span class="ml-1 text-xs opacity-70">(224)</span></button>
          <button class="filter-tab">AI</button>
          <button class="filter-tab">প্রোগ্রামিং</button>
          <button class="filter-tab">সাইবার নিরাপত্তা</button>
          <button class="filter-tab">ক্লাউড</button>
        </div>
        <div class="flex items-center gap-2">
          <span class="text-sm" style="color:var(--color-ink-500);">সাজান:</span>
          <select class="text-sm border rounded-lg px-3 py-2 outline-none" style="border-color:var(--color-ink-200);background:white;color:var(--color-ink-700);font-family:'Noto Sans Bengali',sans-serif;">
            <option>সর্বশেষ</option>
            <option>সর্বাধিক পঠিত</option>
            <option>সর্বাধিক মন্তব্য</option>
          </select>
        </div>
      </div>

      <!-- Featured Post (horizontal) -->
      <article class="blog-list-card horizontal mb-6">
        <div class="card-thumb" style="height:220px;">
          <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=700&q=80" alt="AI" />
          <span class="card-cat">ফিচার্ড</span>
        </div>
        <div class="card-body">
          <div class="inline-flex items-center gap-2 mb-2 text-xs font-semibold" style="color:var(--color-brand);">
            <i class="fa-solid fa-star text-xs"></i> সম্পাদক পছন্দ
          </div>
          <a href="{{url('/single-blog')}}"><h2 class="card-title text-xl">GPT-5 এর নতুন ফিচার: মাল্টিমোডাল AI এর যুগে বাংলাদেশের প্রস্তুতি কতটুকু?</h2></a>
          <p class="card-excerpt" style="-webkit-line-clamp:3;">কৃত্রিম বুদ্ধিমত্তার জগতে নতুন যুগের সূচনা হয়েছে মাল্টিমোডাল সিস্টেমের মাধ্যমে। এই প্রযুক্তি কীভাবে বাংলাদেশের শিক্ষা, স্বাস্থ্য ও শিল্পখাতে প্রভাব ফেলবে তার বিস্তারিত বিশ্লেষণ।</p>
          <div class="card-stats">
            <span class="card-stat"><i class="fa-regular fa-eye"></i> ১২,৪৫০</span>
            <span class="card-stat"><i class="fa-regular fa-comment"></i> ৮৪</span>
            <span class="card-stat"><i class="fa-solid fa-clock"></i> ১২ মিনিট</span>
          </div>
          <div class="card-footer">
            <div class="author-mini">
              <img src="https://i.pravatar.cc/80?img=22" alt="Rabbi" />
              <div>
                <div class="name">Rabbi Hossain</div>
                <div class="date">৬ এপ্রিল ২০২৬</div>
              </div>
            </div>
            <a href="{{url('/single-blog')}}" class="read-btn">বিস্তারিত পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
          </div>
        </div>
      </article>

      <!-- Posts Grid 2-col -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">

        <article class="blog-list-card">
          <div class="card-thumb" style="aspect-ratio:16/9;">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80" alt="Tech" />
            <span class="card-cat">রোবোটিক্স</span>
          </div>
          <div class="card-body">
            <a href="{{url('/single-blog')}}"><h3 class="card-title">বাংলাদেশে রোবোটিক্স ইন্ডাস্ট্রির ভবিষ্যৎ</h3></a>
            <p class="card-excerpt">শিল্পখাতে অটোমেশনের ক্রমবর্ধমান ব্যবহার এবং দেশীয় প্রকৌশলীদের সম্ভাবনা।</p>
            <div class="card-stats">
              <span class="card-stat"><i class="fa-regular fa-eye"></i> ৮,২০০</span>
              <span class="card-stat"><i class="fa-regular fa-comment"></i> ৪২</span>
            </div>
            <div class="card-footer">
              <div class="author-mini">
                <img src="https://i.pravatar.cc/80?img=44" alt="Abdullah" />
                <div>
                  <div class="name">Abdullah Al Masoud</div>
                  <div class="date">৪ এপ্রিল ২০২৬</div>
                </div>
              </div>
              <a href="{{url('/single-blog')}}" class="read-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </article>

        <article class="blog-list-card">
          <div class="card-thumb" style="aspect-ratio:16/9;">
            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&q=80" alt="Security" />
            <span class="card-cat">নিরাপত্তা</span>
          </div>
          <div class="card-body">
            <a href="{{url('/single-blog')}}"><h3 class="card-title">সাইবার হুমকি থেকে বাঁচার সেরা পদ্ধতি ২০২৬</h3></a>
            <p class="card-excerpt">হ্যাকারদের নতুন কৌশল মোকাবেলায় আপনার প্রতিরক্ষা ব্যবস্থা কতটা শক্তিশালী?</p>
            <div class="card-stats">
              <span class="card-stat"><i class="fa-regular fa-eye"></i> ৬,৭৮০</span>
              <span class="card-stat"><i class="fa-regular fa-comment"></i> ৩১</span>
            </div>
            <div class="card-footer">
              <div class="author-mini">
                <img src="https://i.pravatar.cc/80?img=55" alt="Shahriar" />
                <div>
                  <div class="name">Md. Shahriar</div>
                  <div class="date">৩ এপ্রিল ২০২৬</div>
                </div>
              </div>
              <a href="{{url('/single-blog')}}" class="read-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </article>

        <article class="blog-list-card">
          <div class="card-thumb" style="aspect-ratio:16/9;">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&q=80" alt="Cloud" />
            <span class="card-cat">ক্লাউড</span>
          </div>
          <div class="card-body">
            <a href="{{url('/single-blog')}}"><h3 class="card-title">AWS vs Azure vs Google Cloud: তুলনামূলক বিশ্লেষণ</h3></a>
            <p class="card-excerpt">তিনটি প্রধান ক্লাউড প্ল্যাটফর্মের পারফরম্যান্স, মূল্য এবং সুবিধার বিস্তারিত তুলনা।</p>
            <div class="card-stats">
              <span class="card-stat"><i class="fa-regular fa-eye"></i> ৫,৪৩০</span>
              <span class="card-stat"><i class="fa-regular fa-comment"></i> ২৮</span>
            </div>
            <div class="card-footer">
              <div class="author-mini">
                <img src="https://i.pravatar.cc/80?img=66" alt="Sumon" />
                <div>
                  <div class="name">Mir Sumon</div>
                  <div class="date">২ এপ্রিল ২০২৬</div>
                </div>
              </div>
              <a href="{{url('/single-blog')}}" class="read-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </article>

        <article class="blog-list-card">
          <div class="card-thumb" style="aspect-ratio:16/9;">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&q=80" alt="Programming" />
            <span class="card-cat">প্রোগ্রামিং</span>
          </div>
          <div class="card-body">
            <a href="{{url('/single-blog')}}"><h3 class="card-title">Rust প্রোগ্রামিং: শূন্য থেকে বিশেষজ্ঞ পর্যন্ত গাইড</h3></a>
            <p class="card-excerpt">মেমরি-নিরাপদ এবং উচ্চ-পারফরম্যান্স সিস্টেম প্রোগ্রামিং শেখার সম্পূর্ণ রোডম্যাপ।</p>
            <div class="card-stats">
              <span class="card-stat"><i class="fa-regular fa-eye"></i> ৯,৮৪০</span>
              <span class="card-stat"><i class="fa-regular fa-comment"></i> ৫৬</span>
            </div>
            <div class="card-footer">
              <div class="author-mini">
                <img src="https://i.pravatar.cc/80?img=33" alt="Maruf" />
                <div>
                  <div class="name">Maruf Hossain</div>
                  <div class="date">৩০ মার্চ ২০২৬</div>
                </div>
              </div>
              <a href="{{url('/single-blog')}}" class="read-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </article>

        <article class="blog-list-card">
          <div class="card-thumb" style="aspect-ratio:16/9;">
            <img src="https://images.unsplash.com/photo-1639762681057-408e52192e55?w=600&q=80" alt="Web3" />
            <span class="card-cat">Web3</span>
          </div>
          <div class="card-body">
            <a href="{{url('/single-blog')}}"><h3 class="card-title">ব্লকচেইন ও DeFi: বাংলাদেশে সম্ভাবনার দ্বার</h3></a>
            <p class="card-excerpt">বিকেন্দ্রীভূত অর্থনীতির ভবিষ্যৎ এবং বাংলাদেশের ডিজিটাল ফিনটেক খাতে এর প্রভাব।</p>
            <div class="card-stats">
              <span class="card-stat"><i class="fa-regular fa-eye"></i> ৪,১২০</span>
              <span class="card-stat"><i class="fa-regular fa-comment"></i> ১৯</span>
            </div>
            <div class="card-footer">
              <div class="author-mini">
                <img src="https://i.pravatar.cc/80?img=77" alt="Murtaza" />
                <div>
                  <div class="name">Murtaza Musain</div>
                  <div class="date">২৯ মার্চ ২০২৬</div>
                </div>
              </div>
              <a href="{{url('/single-blog')}}" class="read-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </article>

        <article class="blog-list-card">
          <div class="card-thumb" style="aspect-ratio:16/9;">
            <img src="https://images.unsplash.com/photo-1504639725590-34d0984388bd?w=600&q=80" alt="Open Source" />
            <span class="card-cat">ওপেন সোর্স</span>
          </div>
          <div class="card-body">
            <a href="{{url('/single-blog')}}"><h3 class="card-title">ওপেন সোর্স কমিউনিটিতে বাংলাদেশের অবদান</h3></a>
            <p class="card-excerpt">বিশ্বের বড় বড় ওপেন সোর্স প্রজেক্টে বাংলাদেশি ডেভেলপারদের অসামান্য অবদান।</p>
            <div class="card-stats">
              <span class="card-stat"><i class="fa-regular fa-eye"></i> ৩,২২০</span>
              <span class="card-stat"><i class="fa-regular fa-comment"></i> ১৫</span>
            </div>
            <div class="card-footer">
              <div class="author-mini">
                <img src="https://i.pravatar.cc/80?img=88" alt="Mokaddes" />
                <div>
                  <div class="name">Mokaddes Ali</div>
                  <div class="date">২৮ মার্চ ২০২৬</div>
                </div>
              </div>
              <a href="{{url('/single-blog')}}" class="read-btn">পড়ুন <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </article>

      </div><!-- /grid -->

      <!-- Pagination -->
      <div class="flex items-center justify-center gap-2 mt-10">
        <button class="page-btn"><i class="fa-solid fa-chevron-left text-xs"></i></button>
        <button class="page-btn active">১</button>
        <button class="page-btn">২</button>
        <button class="page-btn">৩</button>
        <span style="color:var(--color-ink-500);padding:0 4px;">...</span>
        <button class="page-btn">১২</button>
        <button class="page-btn"><i class="fa-solid fa-chevron-right text-xs"></i></button>
      </div>
    </div><!-- /posts column -->


    <!-- ── SIDEBAR ── -->
    <aside class="w-full lg:w-80 flex-shrink-0">

      <!-- Search -->
      <div class="sidebar-card">
        <div class="sidebar-title">খুঁজুন</div>
        <div class="search-wrap">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="search" class="search-input" placeholder="আর্টিকেল খুঁজুন..." />
        </div>
      </div>

      <!-- Categories -->
      <div class="sidebar-card">
        <div class="sidebar-title">ক্যাটাগরি</div>
        <a href="{{url('/blogs')}}" class="sidebar-cat-item">
          <span class="sidebar-cat-name"><span>🤖</span> আর্টিফিশিয়াল ইন্টেলিজেন্স</span>
          <span class="sidebar-cat-count">৪২</span>
        </a>
        <a href="{{url('/blogs')}}" class="sidebar-cat-item">
          <span class="sidebar-cat-name"><span>💻</span> প্রোগ্রামিং</span>
          <span class="sidebar-cat-count">৬৮</span>
        </a>
        <a href="{{url('/blogs')}}" class="sidebar-cat-item">
          <span class="sidebar-cat-name"><span>🔒</span> সাইবার নিরাপত্তা</span>
          <span class="sidebar-cat-count">৩১</span>
        </a>
        <a href="{{url('/blogs')}}" class="sidebar-cat-item">
          <span class="sidebar-cat-name"><span>☁️</span> ক্লাউড কম্পিউটিং</span>
          <span class="sidebar-cat-count">২৫</span>
        </a>
        <a href="{{url('/blogs')}}" class="sidebar-cat-item">
          <span class="sidebar-cat-name"><span>📱</span> মোবাইল ডেভেলপমেন্ট</span>
          <span class="sidebar-cat-count">৩৮</span>
        </a>
        <a href="{{url('/blogs')}}" class="sidebar-cat-item">
          <span class="sidebar-cat-name"><span>🌐</span> Web3 & ব্লকচেইন</span>
          <span class="sidebar-cat-count">২০</span>
        </a>
      </div>

      <!-- Popular Posts -->
      <div class="sidebar-card">
        <div class="sidebar-title">জনপ্রিয় পোস্ট</div>
        <div class="sidebar-post">
          <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=200&q=80" class="sidebar-post-thumb" alt="" />
          <div>
            <a href="{{url('/single-blog')}}" class="sidebar-post-title">GPT-5: মাল্টিমোডাল AI এর নতুন যুগ</a>
            <div class="sidebar-post-date"><i class="fa-regular fa-eye mr-1"></i>১২,৪৫০ ভিউ</div>
          </div>
        </div>
        <div class="sidebar-post">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=200&q=80" class="sidebar-post-thumb" alt="" />
          <div>
            <a href="{{url('/single-blog')}}" class="sidebar-post-title">Rust প্রোগ্রামিং ভাষা কেন শিখবেন?</a>
            <div class="sidebar-post-date"><i class="fa-regular fa-eye mr-1"></i>৯,৮৪০ ভিউ</div>
          </div>
        </div>
        <div class="sidebar-post">
          <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=200&q=80" class="sidebar-post-thumb" alt="" />
          <div>
            <a href="{{url('/single-blog')}}" class="sidebar-post-title">বাংলাদেশে রোবোটিক্সের সম্ভাবনা</a>
            <div class="sidebar-post-date"><i class="fa-regular fa-eye mr-1"></i>৮,২০০ ভিউ</div>
          </div>
        </div>
        <div class="sidebar-post">
          <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=200&q=80" class="sidebar-post-thumb" alt="" />
          <div>
            <a href="{{url('/single-blog')}}" class="sidebar-post-title">সাইবার হুমকি থেকে বাঁচার উপায়</a>
            <div class="sidebar-post-date"><i class="fa-regular fa-eye mr-1"></i>৬,৭৮০ ভিউ</div>
          </div>
        </div>
      </div>

      <!-- Tags -->
      <div class="sidebar-card">
        <div class="sidebar-title">ট্যাগসমূহ</div>
        <div class="flex flex-wrap -m-1">
          <a href="#" class="tag-pill">#AI</a>
          <a href="#" class="tag-pill">#Python</a>
          <a href="#" class="tag-pill">#React</a>
          <a href="#" class="tag-pill">#JavaScript</a>
          <a href="#" class="tag-pill">#Rust</a>
          <a href="#" class="tag-pill">#Cloud</a>
          <a href="#" class="tag-pill">#Web3</a>
          <a href="#" class="tag-pill">#Docker</a>
          <a href="#" class="tag-pill">#ML</a>
          <a href="#" class="tag-pill">#Linux</a>
          <a href="#" class="tag-pill">#Security</a>
          <a href="#" class="tag-pill">#API</a>
        </div>
      </div>

      <!-- Newsletter mini -->
      <div class="sidebar-card" style="background:linear-gradient(135deg,var(--color-ink-900),#1a0a00);border-color:rgba(249,115,22,.2);">
        <div class="text-center">
          <div class="text-3xl mb-3">📩</div>
          <h3 class="text-white font-bold text-base mb-2" style="font-family:'Bricolage Grotesque',sans-serif;">নিউজলেটার সাবস্ক্রাইব করুন</h3>
          <p class="text-xs mb-4" style="color:rgba(255,255,255,.5);">সাপ্তাহিক টেক আপডেট পান</p>
          <input type="email" class="newsletter-input mb-3 text-sm" placeholder="আপনার ইমেইল..." />
          <button class="btn-brand w-full justify-center text-sm py-2.5">সাবস্ক্রাইব</button>
        </div>
      </div>

      <!-- Authors -->
      <div class="sidebar-card">
        <div class="sidebar-title">লেখক পরিচিতি</div>
        <div class="flex flex-col gap-3">
          <div class="flex items-center gap-3">
            <img src="https://avatars.githubusercontent.com/u/27496908?v=4" class="w-10 h-10 rounded-xl object-cover" />
            <div class="flex-1 min-w-0">
              <div class="font-semibold text-sm" style="color:var(--color-ink-800);">Md. Nayemur Rahman</div>
              <div class="text-xs" style="color:var(--color-ink-500);">AI বিশেষজ্ঞ · ৩৪টি পোস্ট</div>
            </div>
            <a href="#" class="text-xs font-semibold" style="color:var(--color-brand);">ফলো</a>
          </div>
          <div class="flex items-center gap-3">
            <img src="https://i.pravatar.cc/80?img=44" class="w-10 h-10 rounded-xl object-cover" />
            <div class="flex-1 min-w-0">
              <div class="font-semibold text-sm" style="color:var(--color-ink-800);">Naznin Bristy</div>
              <div class="text-xs" style="color:var(--color-ink-500);">UI/UX ডিজাইনার · ২১টি পোস্ট</div>
            </div>
            <a href="#" class="text-xs font-semibold" style="color:var(--color-brand);">ফলো</a>
          </div>
          <div class="flex items-center gap-3">
            <img src="https://i.pravatar.cc/80?img=55" class="w-10 h-10 rounded-xl object-cover" />
            <div class="flex-1 min-w-0">
              <div class="font-semibold text-sm" style="color:var(--color-ink-800);">Sultana Rabea</div>
              <div class="text-xs" style="color:var(--color-ink-500);">ডেটা সায়েন্টিস্ট · ১৮টি পোস্ট</div>
            </div>
            <a href="#" class="text-xs font-semibold" style="color:var(--color-brand);">ফলো</a>
          </div>
        </div>
      </div>

    </aside>
  </div>
</main>


<!-- FOOTER -->
<footer class="site-footer pt-14 pb-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-10">
      <div>
        <div class="footer-brand-logo mb-4">PlasicDocs<span>+</span></div>
        <p class="text-sm leading-relaxed mb-5" style="color:rgba(255,255,255,.5);max-width:220px;">বাংলায় সর্বোচ্চ মানের প্রযুক্তি ব্লগ।</p>
        <div class="flex gap-2">
          <a href="#" class="social-btn"><i class="fab fa-facebook-f text-sm"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-twitter text-sm"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-youtube text-sm"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-linkedin-in text-sm"></i></a>
        </div>
      </div>
      <div>
        <h4 class="footer-heading">দ্রুত লিংক</h4>
        <a href="{{url('/')}}" class="footer-link">হোম পেজ</a>
        <a href="{{url('/blogs')}}" class="footer-link">সকল ব্লগ</a>
        <a href="{{url('/single-blog')}}" class="footer-link">টেক আর্টিকেল</a>
        <a href="#" class="footer-link">লেখক হন</a>
      </div>
      <div>
        <h4 class="footer-heading">ক্যাটাগরি</h4>
        <a href="#" class="footer-link">আর্টিফিশিয়াল ইন্টেলিজেন্স</a>
        <a href="#" class="footer-link">প্রোগ্রামিং</a>
        <a href="#" class="footer-link">সাইবার নিরাপত্তা</a>
        <a href="#" class="footer-link">ক্লাউড কম্পিউটিং</a>
      </div>
      <div>
        <h4 class="footer-heading">যোগাযোগ</h4>
        <div class="flex flex-col gap-3">
          <div class="flex items-start gap-3 text-sm" style="color:rgba(255,255,255,.55);">
            <i class="fa-solid fa-envelope mt-0.5" style="color:var(--color-brand);min-width:14px;"></i>
            hello@plasicdocs.com
          </div>
          <div class="flex items-start gap-3 text-sm" style="color:rgba(255,255,255,.55);">
            <i class="fa-solid fa-location-dot mt-0.5" style="color:var(--color-brand);min-width:14px;"></i>
            ঢাকা, বাংলাদেশ
          </div>
        </div>
      </div>
    </div>
    <hr class="footer-divider mb-6" />
  </div>
</footer>

<div class="copyright-bar py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-3">
    <p class="text-xs" style="color:rgba(255,255,255,.3);">© ২০২৬ <span style="color:var(--color-brand);font-weight:600;">PlasicDocs</span>. সর্বস্বত্ব সংরক্ষিত।</p>
    <div class="flex gap-4">
      <a href="#" class="text-xs hover:underline" style="color:rgba(255,255,255,.3);">গোপনীয়তা</a>
      <a href="#" class="text-xs hover:underline" style="color:rgba(255,255,255,.3);">শর্তাবলী</a>
    </div>
  </div>
</div>

<!-- Back to Top -->
<button id="back-to-top" class="fixed bottom-6 right-6 w-11 h-11 rounded-xl flex items-center justify-center text-white shadow-lg z-50 transition-all opacity-0" style="background:var(--color-brand);">
  <i class="fa-solid fa-arrow-up text-sm"></i>
</button>

<!-- ═══ SCRIPTS ═══ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</body>
</html>
