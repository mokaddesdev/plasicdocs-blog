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