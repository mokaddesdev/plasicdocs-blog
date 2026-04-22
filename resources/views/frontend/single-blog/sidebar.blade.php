 <!-- ── SIDEBAR ── -->
    <aside class="w-full lg:w-72 flex-shrink-0">
      <div class="sidebar-sticky">

        <!-- TOC -->
        <div class="toc">
          <div class="toc-title"><i class="fa-solid fa-list" style="color:var(--color-brand);"></i> বিষয়বস্তু</div>
          <ul class="toc-list">
            <li><a href="#why-fastapi">কেন FastAPI?</a></li>
            <li><a href="#installation">ইনস্টলেশন ও সেটআপ</a></li>
            <li><a href="#first-api">প্রথম API তৈরি</a></li>
            <li class="sub"><a href="#run-server">সার্ভার চালু করুন</a></li>
            <li><a href="#auth">Authentication</a></li>
            <li><a href="#testing">API Testing</a></li>
          </ul>
        </div>

        <!-- Author Info -->
        <div class="sidebar-card">
          <div class="sidebar-title">লেখক সম্পর্কে</div>
          <div class="flex flex-col items-center text-center gap-3">
            <img src="https://avatars.githubusercontent.com/u/27496908?v=4" class="w-16 h-16 rounded-2xl object-cover" />
            <div>
              <div class="font-bold" style="color:var(--color-ink-900);font-family:'Bricolage Grotesque',sans-serif;">Md. Nayemur Rahman</div>
              <div class="text-xs mt-1" style="color:var(--color-ink-500);">Senior AI & Python Engineer</div>
              <div class="text-xs mt-1" style="color:var(--color-ink-500);">PlasicDocs · Developer</div>
            </div>
            <div class="flex gap-2">
              <a href="#" class="social-btn" style="width:32px;height:32px;border-radius:8px;background:rgba(15,23,42,.08);color:var(--color-ink-500);"><i class="fab fa-twitter text-xs"></i></a>
              <a href="#" class="social-btn" style="width:32px;height:32px;border-radius:8px;background:rgba(15,23,42,.08);color:var(--color-ink-500);"><i class="fab fa-github text-xs"></i></a>
              <a href="#" class="social-btn" style="width:32px;height:32px;border-radius:8px;background:rgba(15,23,42,.08);color:var(--color-ink-500);"><i class="fab fa-linkedin-in text-xs"></i></a>
            </div>
            <button class="btn-brand w-full justify-center text-sm py-2">+ ফলো করুন</button>
          </div>
        </div>

        <!-- Related Posts -->
        <div class="sidebar-card">
          <div class="sidebar-title">সম্পর্কিত পোস্ট</div>
          <div class="sidebar-post">
            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=200&q=80" alt="" />
            <div>
              <a href="#" class="sidebar-post-title">Django REST Framework দিয়ে API তৈরি</a>
              <div style="font-size:.7rem;color:var(--color-ink-500);">৩০ মার্চ ২০২৬</div>
            </div>
          </div>
          <div class="sidebar-post">
            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=200&q=80" alt="" />
            <div>
              <a href="#" class="sidebar-post-title">Docker দিয়ে Python অ্যাপ Deploy</a>
              <div style="font-size:.7rem;color:var(--color-ink-500);">২৫ মার্চ ২০২৬</div>
            </div>
          </div>
          <div class="sidebar-post">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=200&q=80" alt="" />
            <div>
              <a href="#" class="sidebar-post-title">PostgreSQL ও SQLAlchemy ব্যবহার</a>
              <div style="font-size:.7rem;color:var(--color-ink-500);">২০ মার্চ ২০২৬</div>
            </div>
          </div>
        </div>

        <!-- Tags -->
        <div class="sidebar-card">
          <div class="sidebar-title">ট্যাগসমূহ</div>
          <div class="flex flex-wrap -m-0.5">
            <a href="#" class="tag-pill">#Python</a>
            <a href="#" class="tag-pill">#FastAPI</a>
            <a href="#" class="tag-pill">#REST</a>
            <a href="#" class="tag-pill">#JWT</a>
            <a href="#" class="tag-pill">#Backend</a>
            <a href="#" class="tag-pill">#API</a>
            <a href="#" class="tag-pill">#Docker</a>
            <a href="#" class="tag-pill">#Testing</a>
          </div>
        </div>

        <!-- Newsletter mini -->
        <div class="sidebar-card" style="background:linear-gradient(135deg,var(--color-ink-900),#1a0800);border-color:rgba(249,115,22,.2);">
          <div class="text-center">
            <div class="text-2xl mb-2">📩</div>
            <h4 class="text-white font-bold text-sm mb-2" style="font-family:'Bricolage Grotesque',sans-serif;">নিউজলেটার</h4>
            <p class="text-xs mb-3" style="color:rgba(255,255,255,.5);">প্রতি সপ্তাহে টেক আপডেট</p>
            <input type="email" placeholder="ইমেইল দিন..." class="w-full rounded-lg px-3 py-2 text-xs mb-2 outline-none" style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);color:white;font-family:'Noto Sans Bengali',sans-serif;" />
            <button class="btn-brand w-full justify-center text-xs py-2">সাবস্ক্রাইব</button>
          </div>
        </div>

      </div>
    </aside>