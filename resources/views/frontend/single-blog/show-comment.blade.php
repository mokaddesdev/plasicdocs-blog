 <!-- COMMENTS -->
      <section class="comments-section">
        <h2 class="comments-title">মন্তব্য <span>৭</span></h2>

        <!-- Comment 1 -->
        <div class="comment">
          <img src="https://i.pravatar.cc/80?img=22" class="comment-avatar" alt="Rabbi" />
          <div class="comment-body">
            <div class="comment-header">
              <span class="comment-name">Rabbi Hossain</span>
              <span class="comment-role">লেখক টিম</span>
              <span class="comment-date">৭ এপ্রিল ২০২৬, সকাল ১০:৩০</span>
            </div>
            <p class="comment-text">অসাধারণ আর্টিকেল ভাই! FastAPI-এর JWT authentication অংশটা বিশেষভাবে সহায়ক। <code>SECRET_KEY</code> এর জন্য নিচের কমান্ডটি ব্যবহার করতে পারেন:</p>
            <div class="comment-code">
<span class="cm-cm"># একটি নিরাপদ random secret key তৈরি করুন</span>
<span class="cm-kw">python</span> -c <span class="cm-str">"import secrets; print(secrets.token_hex(32))"</span>
<span class="cm-cm"># Output: e3b4a2f1c9d8e7f6a5b4c3d2e1f0a9b8...</span>
            </div>
            <div class="comment-actions">
              <span class="comment-action liked"><i class="fa-solid fa-thumbs-up"></i> ১৮ লাইক</span>
              <span class="comment-action"><i class="fa-regular fa-comment"></i> রিপ্লাই দিন</span>
            </div>
          </div>
        </div>

        <!-- Reply Thread -->
        <div class="reply-thread">
          <div class="comment">
            <img src="https://avatars.githubusercontent.com/u/27496908?v=4" class="comment-avatar" alt="Nayemur" />
            <div class="comment-body">
              <div class="comment-header">
                <span class="comment-name">Md. Nayemur Rahman</span>
                <span class="comment-author-badge">✍️ লেখক</span>
                <span class="comment-date">৭ এপ্রিল ২০২৬, সকাল ১১:০০</span>
              </div>
              <p class="comment-text">ধন্যবাদ Rabbi ভাই! <code>secrets.token_hex(32)</code> দিয়ে তৈরি key সত্যিই বেশি নিরাপদ। পরবর্তী পর্বে <code>.env</code> ফাইল ব্যবস্থাপনা নিয়ে বিস্তারিত লিখব।</p>
              <div class="comment-actions">
                <span class="comment-action"><i class="fa-solid fa-thumbs-up"></i> ৯ লাইক</span>
                <span class="comment-action"><i class="fa-regular fa-comment"></i> রিপ্লাই</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Comment 2 -->
        <div class="comment">
          <img src="https://i.pravatar.cc/80?img=55" class="comment-avatar" alt="Sultana" />
          <div class="comment-body">
            <div class="comment-header">
              <span class="comment-name">Sultana Rabea</span>
              <span class="comment-role">ডেটা সায়েন্টিস্ট</span>
              <span class="comment-date">৭ এপ্রিল ২০২৬, সন্ধ্যা ৬:০০</span>
            </div>
            <p class="comment-text">Data science প্রজেক্টের জন্য ML model serving-এ FastAPI অসাধারণ কাজ করে। <code>pickle</code> বা <code>joblib</code> দিয়ে trained model লোড করে API হিসেবে serve করতে পারি। এই বিষয়ে কি ভবিষ্যতে লিখবেন?</p>
            <div class="comment-actions">
              <span class="comment-action liked"><i class="fa-solid fa-thumbs-up"></i> ২২ লাইক</span>
              <span class="comment-action"><i class="fa-regular fa-comment"></i> রিপ্লাই দিন</span>
            </div>
          </div>
        </div>

      </section>