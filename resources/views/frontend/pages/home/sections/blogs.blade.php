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