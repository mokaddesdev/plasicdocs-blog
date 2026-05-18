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
    @hasSection('footer-tag')
     <hr class="footer-divider my-10" />
        @yield('footer-tag')
@endif
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