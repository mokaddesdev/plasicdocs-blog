/* ============================================================
   PlasicDocs — Unified Custom JavaScript
   ============================================================ */

$(document).ready(function () {

  /* ──────────────────────────────────────────
     SHARED: Mobile Menu Toggle
  ────────────────────────────────────────── */
  $('#menu-toggle').click(function () {
    $('#mobile-menu').toggleClass('open');
  });

  /* ──────────────────────────────────────────
     SHARED: Sticky Header + Back-to-Top
  ────────────────────────────────────────── */
  $(window).scroll(function () {
    var st = $(this).scrollTop();

    // Sticky header shadow
    if (st > 60) $('#site-header').addClass('scrolled');
    else          $('#site-header').removeClass('scrolled');

    // Back-to-top visibility
    if (st > 300) {
      $('#back-to-top').css({ opacity: 1 }).removeClass('translate-y-4');
    } else {
      $('#back-to-top').css({ opacity: 0 }).addClass('translate-y-4');
    }

    // Reading progress bar (single.html only)
    if ($('#read-progress').length) {
      var total = $(document).height() - $(window).height();
      var pct   = (st / total) * 100;
      $('#read-progress').css('width', pct + '%');
    }
  });

  $('#back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 500);
  });

  /* ──────────────────────────────────────────
     INDEX: Hero Slider  (requires Slick)
  ────────────────────────────────────────── */
  if ($('.hero-slider').length) {
    $('.hero-slider').slick({
      dots:          true,
      arrows:        true,
      infinite:      true,
      autoplay:      true,
      autoplaySpeed: 5000,
      speed:         800,
      fade:          true,
      cssEase:       'ease-in-out',
      pauseOnHover:  false,
    });
  }

  /* ──────────────────────────────────────────
     INDEX: GSAP Animations
  ────────────────────────────────────────── */
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // Blog cards — index.html
    gsap.utils.toArray('.blog-card').forEach(function (card, i) {
      gsap.from(card, {
        scrollTrigger: { trigger: card, start: 'top 90%' },
        y: 40, opacity: 0, duration: 0.6, delay: i * 0.08, ease: 'power3.out'
      });
    });

    // Stat cards — index.html
    gsap.utils.toArray('.stat-card').forEach(function (el, i) {
      gsap.from(el, {
        scrollTrigger: { trigger: el, start: 'top 88%' },
        scale: 0.92, opacity: 0, duration: 0.5, delay: i * 0.1, ease: 'back.out(1.4)'
      });
    });

    // Blog list cards — blogs.html
    gsap.utils.toArray('.blog-list-card').forEach(function (el, i) {
      gsap.from(el, {
        scrollTrigger: { trigger: el, start: 'top 92%' },
        y: 30, opacity: 0, duration: 0.5, delay: i * 0.06, ease: 'power3.out'
      });
    });

    // Sidebar cards — blogs.html + single.html
    gsap.utils.toArray('.sidebar-card').forEach(function (el, i) {
      gsap.from(el, {
        scrollTrigger: { trigger: el, start: 'top 92%' },
        x: 20, opacity: 0, duration: 0.5, delay: i * 0.07, ease: 'power2.out'
      });
    });

    // Article container — single.html
    if ($('.article-container').length) {
      gsap.from('.article-container > *', {
        scrollTrigger: { trigger: '.article-container', start: 'top 90%' },
        y: 20, opacity: 0, duration: 0.6, stagger: 0.05, ease: 'power3.out'
      });
    }

    // Comments — single.html
    gsap.utils.toArray('.comment').forEach(function (el, i) {
      gsap.from(el, {
        scrollTrigger: { trigger: el, start: 'top 96%' },
        y: 20, opacity: 0, duration: 0.4, delay: i * 0.05, ease: 'power2.out'
      });
    });
  }

  /* ──────────────────────────────────────────
     INDEX: CountUp  (requires countUp.umd.js)
  ────────────────────────────────────────── */
  if (typeof countUp !== 'undefined' && document.getElementById('count-articles')) {
    var counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          new countUp.CountUp('count-articles', 240, { suffix: '+'  }).start();
          new countUp.CountUp('count-authors',   12, { suffix: '+'  }).start();
          new countUp.CountUp('count-readers',   50, { suffix: 'K+' }).start();
          new countUp.CountUp('count-cats',      18, { suffix: ''   }).start();
          counterObserver.disconnect();
        }
      });
    }, { threshold: 0.3 });

    var statsEl = document.querySelector('#count-articles');
    if (statsEl) counterObserver.observe(statsEl.closest('section'));
  }

  /* ──────────────────────────────────────────
     INDEX: Newsletter Submit
  ────────────────────────────────────────── */
  $('.newsletter-section .btn-brand').click(function () {
    var email = $('.newsletter-input').val().trim();
    if (!email || !email.includes('@')) {
      $(this).text('ইমেইল দিন!').css('background', '#ef4444');
      setTimeout(function () {
        $('.newsletter-section .btn-brand')
          .html('<i class="fa-solid fa-paper-plane text-sm mr-2"></i>সাবস্ক্রাইব করুন')
          .css('background', 'var(--brand)');
      }, 2000);
    } else {
      $(this).html('<i class="fa-solid fa-check mr-1"></i> সফল!').css('background', '#16a34a');
      $('.newsletter-input').val('');
      setTimeout(function () {
        $('.newsletter-section .btn-brand')
          .html('<i class="fa-solid fa-paper-plane text-sm mr-2"></i>সাবস্ক্রাইব করুন')
          .css('background', 'var(--brand)');
      }, 3000);
    }
  });

  /* ──────────────────────────────────────────
     BLOGS: Filter Tabs
  ────────────────────────────────────────── */
  $('.filter-tab').click(function () {
    $('.filter-tab').removeClass('active');
    $(this).addClass('active');
  });

  /* ──────────────────────────────────────────
     SINGLE: Comment Likes
  ────────────────────────────────────────── */
  $('.comment-action').click(function () {
    if ($(this).find('.fa-thumbs-up').length) {
      $(this).toggleClass('liked');
    }
  });

  /* ──────────────────────────────────────────
     SINGLE: Copy Code Button
  ────────────────────────────────────────── */
  window.copyCode = function (btn) {
    var code = $(btn).closest('.code-block').find('code').text();
    navigator.clipboard.writeText(code).then(function () {
      $(btn).html('<i class="fa-solid fa-check"></i> কপি হয়েছে!').css('color', '#16a34a');
      setTimeout(function () {
        $(btn).html('<i class="fa-regular fa-copy"></i> কপি করুন').css('color', '');
      }, 2000);
    });
  };

  /* ──────────────────────────────────────────
     SINGLE: Copy Link Button
  ────────────────────────────────────────── */
  $('#copy-link-btn').click(function () {
    navigator.clipboard.writeText(window.location.href).then(function () {
      $('#copy-link-btn').html('<i class="fa-solid fa-check"></i> কপি হয়েছে!');
      setTimeout(function () {
        $('#copy-link-btn').html('<i class="fa-solid fa-link"></i> লিংক কপি');
      }, 2000);
    });
  });

  /* ──────────────────────────────────────────
     SINGLE: Comment Form Submit
  ────────────────────────────────────────── */
  $('.comment-form .btn-brand').click(function () {
    var name  = $('.comment-form input[type=text]').val().trim();
    var email = $('.comment-form input[type=email]').val().trim();
    var msg   = $('.comment-form textarea').val().trim();

    if (!name || !email || !msg) {
      $(this).text('সব ঘর পূরণ করুন!').css('background', '#ef4444');
      setTimeout(function () {
        $('.comment-form .btn-brand')
          .html('<i class="fa-solid fa-paper-plane text-sm mr-2"></i> মন্তব্য পাঠান')
          .css('background', 'var(--brand)');
      }, 2000);
    } else {
      $(this).html('<i class="fa-solid fa-check mr-2"></i> পাঠানো হয়েছে!').css('background', '#16a34a');
      $('.comment-form input, .comment-form textarea').val('');
      setTimeout(function () {
        $('.comment-form .btn-brand')
          .html('<i class="fa-solid fa-paper-plane text-sm mr-2"></i> মন্তব্য পাঠান')
          .css('background', 'var(--brand)');
      }, 3000);
    }
  });

}); // end document.ready

