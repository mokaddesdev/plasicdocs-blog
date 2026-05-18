  <!-- Comment Form -->
      <div class="comment-form">
        <h3 class="comment-form-title">আপনার মন্তব্য লিখুন</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
          <div>
            <label class="form-label">নাম <span style="color:var(--color-brand);">*</span></label>
            <input type="text" class="form-input" placeholder="আপনার নাম" />
          </div>
          <div>
            <label class="form-label">ইমেইল <span style="color:var(--color-brand);">*</span></label>
            <input type="email" class="form-input" placeholder="আপনার ইমেইল" />
          </div>
        </div>
        <div class="mb-5">
          <label class="form-label">মন্তব্য <span style="color:var(--color-brand);">*</span></label>
          <textarea class="form-input form-textarea" placeholder="আপনার মন্তব্য লিখুন..."></textarea>
        </div>
        <div class="flex items-center gap-4 flex-wrap">
          <button class="btn-brand gap-2">
            <i class="fa-solid fa-paper-plane text-sm"></i> মন্তব্য পাঠান
          </button>
          <label class="flex items-center gap-2 text-sm" style="color:var(--color-ink-500);cursor:pointer;">
            <input type="checkbox" class="rounded" style="accent-color:var(--color-brand);" />
            পরবর্তী মন্তব্যের নোটিফিকেশন চাই
          </label>
        </div>
      </div>