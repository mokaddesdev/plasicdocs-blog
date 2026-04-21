<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Python দিয়ে REST API তৈরি — PlasicDocs</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,600;12..96,700;12..96,800&family=Hind+Siliguri:wght@400;500;600;700&family=Noto+Sans+Bengali:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Prism.js for code highlighting -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
 @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!-- Reading Progress Bar -->
<div id="read-progress"></div>

<!-- HEADER -->
<header id="site-header" class="fixed top-0 left-0 right-0 z-50 bg-white/90">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <a href="{{url('/')}}" class="footer-brand-logo text-xl">PlasicDocs<span>+</span></a>
      <nav class="hidden lg:flex items-center gap-8">
        <a href="{{url('/')}}" class="nav-link text-sm">হোম</a>
        <a href="{{url('/blogs')}}" class="nav-link text-sm">সকল ব্লগ</a>
        <a href="{{url('/single-blog')}}" class="nav-link active text-sm">টেক বিস্তারিত</a>
        <a href="{{url('/')}}#categories" class="nav-link text-sm">ক্যাটাগরি</a>
      </nav>
      <div class="flex items-center gap-3">
        <a href="{{url('/')}}#newsletter" class="btn-brand text-sm py-2 px-4 hidden sm:inline-flex gap-2">
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
      <a href="{{url('/blogs')}}" class="nav-link text-sm">সকল ব্লগ</a>
      <a href="{{url('/single-blog')}}" class="nav-link active text-sm">টেক বিস্তারিত</a>
    </div>
  </div>
</header>


<!-- BREADCRUMB -->
<div style="background:white;border-bottom:1px solid var(--color-ink-200);margin-top:64px;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center gap-2 text-sm" style="color:var(--color-ink-500);">
    <a href="{{url('/')}}" style="color:var(--color-ink-500);transition:color .2s;" onmouseover="this.style.color='var(--color-brand)'" onmouseout="this.style.color='var(--color-ink-500)'">হোম</a>
    <i class="fa-solid fa-chevron-right text-xs"></i>
    <a href="{{url('/blogs')}}" style="color:var(--color-ink-500);transition:color .2s;" onmouseover="this.style.color='var(--color-brand)'" onmouseout="this.style.color='var(--color-ink-500)'">ব্লগ</a>
    <i class="fa-solid fa-chevron-right text-xs"></i>
    <span style="color:var(--color-brand);">Python দিয়ে REST API</span>
  </div>
</div>


<!-- MAIN CONTENT -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="flex flex-col lg:flex-row gap-10">

    <!-- ── ARTICLE ── -->
    <article class="article-container flex-1 min-w-0">

      <!-- Article Header -->
      <header class="mb-8">
        <div class="flex flex-wrap gap-2 mb-4">
          <span class="article-cat-badge"><i class="fa-solid fa-code text-xs"></i> প্রোগ্রামিং</span>
          <span class="article-cat-badge" style="background:rgba(59,130,246,.08);color:#3b82f6;border-color:rgba(59,130,246,.2);">Python</span>
          <span class="article-cat-badge" style="background:rgba(34,197,94,.08);color:#16a34a;border-color:rgba(34,197,94,.2);">REST API</span>
        </div>
        <h1 class="article-title mb-5">Python ও FastAPI দিয়ে প্রফেশনাল REST API তৈরি: A থেকে Z সম্পূর্ণ গাইড</h1>

        <div class="article-meta">
          <div class="flex items-center gap-3">
            <img src="https://avatars.githubusercontent.com/u/27496908?v=4" alt="Nayemur" class="w-10 h-10 rounded-xl object-cover" style="border:2px solid var(--color-ink-200);" />
            <div>
              <div class="font-semibold text-sm" style="color:var(--color-ink-900);">Md. Nayemur Rahman</div>
              <div class="text-xs" style="color:var(--color-ink-500);">AI & Python বিশেষজ্ঞ</div>
            </div>
          </div>
          <div class="article-meta-item"><i class="fa-regular fa-calendar"></i> ৭ এপ্রিল ২০২৬</div>
          <div class="article-meta-item"><i class="fa-solid fa-clock"></i> ১৫ মিনিট পড়া</div>
          <div class="article-meta-item"><i class="fa-regular fa-eye"></i> ১৪,৮২০ ভিউ</div>
          <div class="article-meta-item"><i class="fa-regular fa-comment"></i> ৭ মন্তব্য</div>
        </div>

        <div class="mt-6 rounded-2xl overflow-hidden" style="aspect-ratio:16/8;box-shadow:0 12px 40px rgba(0,0,0,.1);">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=1400&q=80" alt="Python API" class="w-full h-full object-cover" />
        </div>
      </header>

      <!-- Author Card -->
      <div class="author-card">
        <img src="https://avatars.githubusercontent.com/u/27496908?v=4" alt="Nayemur Rahman" />
        <div>
          <div class="font-bold" style="color:var(--color-ink-900);font-family:'Bricolage Grotesque',sans-serif;">Md. Nayemur Rahman</div>
          <div class="role">Senior AI Engineer at PlasicDocs · Python & FastAPI Enthusiast</div>
          <div style="font-size:.78rem;color:var(--color-ink-500);margin-top:2px;">৩৪টি আর্টিকেল · ১২,০০০+ পাঠক</div>
        </div>
        <button class="author-follow">+ ফলো করুন</button>
      </div>

      <!-- Article Body -->
      <div class="article-body" id="article-content">

        <p>
          আধুনিক ওয়েব ডেভেলপমেন্টে <strong>REST API</strong> একটি অপরিহার্য অংশ। Python-এর <code>FastAPI</code> ফ্রেমওয়ার্ক ব্যবহার করে অত্যন্ত দ্রুত, টাইপ-সেফ এবং স্বয়ংক্রিয়ভাবে ডকুমেন্টেড API তৈরি করা যায়।
        </p>

        <div class="info-box tip">
          <span class="info-box-icon">💡</span>
          <div class="info-box-body"><strong>পূর্বশর্ত:</strong> Python 3.9+ ইনস্টল থাকতে হবে এবং pip ও virtual environment সম্পর্কে প্রাথমিক ধারণা থাকতে হবে।</div>
        </div>

        <h2 id="why-fastapi">কেন FastAPI ব্যবহার করবেন?</h2>
        <p>FastAPI হলো Python-এর একটি আধুনিক, হাই-পারফরম্যান্স ওয়েব ফ্রেমওয়ার্ক। এটি <code>Starlette</code> এবং <code>Pydantic</code>-এর উপর ভিত্তি করে তৈরি।</p>

        <table>
          <thead>
            <tr><th>ফ্রেমওয়ার্ক</th><th>পারফরম্যান্স</th><th>টাইপ হিন্ট</th><th>ডকুমেন্টেশন</th></tr>
          </thead>
          <tbody>
            <tr><td>FastAPI</td><td>⭐⭐⭐⭐⭐</td><td>✅ সম্পূর্ণ</td><td>✅ স্বয়ংক্রিয়</td></tr>
            <tr><td>Django REST</td><td>⭐⭐⭐</td><td>⚠️ আংশিক</td><td>⚠️ ম্যানুয়াল</td></tr>
            <tr><td>Flask</td><td>⭐⭐⭐</td><td>❌ নেই</td><td>❌ ম্যানুয়াল</td></tr>
          </tbody>
        </table>

        <h2 id="installation">ইনস্টলেশন ও সেটআপ</h2>
        <p>প্রথমে একটি virtual environment তৈরি করুন এবং FastAPI ইনস্টল করুন:</p>

        <div class="code-block">
          <div class="code-header">
            <div class="code-dots">
              <div class="code-dot" style="background:#ff5f57;"></div>
              <div class="code-dot" style="background:#febc2e;"></div>
              <div class="code-dot" style="background:#28c840;"></div>
            </div>
            <div class="code-lang-badge"><i class="fa-brands fa-python" style="color:#60a5fa;"></i> bash / terminal</div>
            <button class="copy-btn" onclick="copyCode(this)"><i class="fa-regular fa-copy"></i> কপি করুন</button>
          </div>
          <pre><code class="language-bash"># Virtual environment তৈরি করুন
python -m venv venv

# Activate করুন (Windows)
venv\Scripts\activate

# Activate করুন (Linux/Mac)
source venv/bin/activate

# FastAPI ও Uvicorn ইনস্টল করুন
pip install fastapi uvicorn[standard] sqlalchemy</code></pre>
        </div>

        <h2 id="first-api">প্রথম API তৈরি</h2>
        <p>এখন একটি সহজ CRUD API তৈরি করা যাক। <code>main.py</code> ফাইলে নিচের কোড লিখুন:</p>

        <div class="code-block">
          <div class="code-header">
            <div class="code-dots">
              <div class="code-dot" style="background:#ff5f57;"></div>
              <div class="code-dot" style="background:#febc2e;"></div>
              <div class="code-dot" style="background:#28c840;"></div>
            </div>
            <div class="code-lang-badge"><i class="fa-brands fa-python" style="color:#60a5fa;"></i> main.py — Python</div>
            <button class="copy-btn" onclick="copyCode(this)"><i class="fa-regular fa-copy"></i> কপি করুন</button>
          </div>
          <pre><code class="language-python">from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
from typing import Optional, List

app = FastAPI(
    title="PlasicDocs API",
    description="PlasicDocs এর জন্য ব্লগ REST API",
    version="1.0.0"
)

class BlogPost(BaseModel):
    id: Optional[int] = None
    title: str
    content: str
    author: str
    category: str
    published: bool = False

fake_db: List[BlogPost] = []
counter = 0

@app.get("/", tags=["Root"])
async def root():
    return {"message": "PlasicDocs API চলছে!", "version": "1.0.0"}

@app.get("/posts", response_model=List[BlogPost], tags=["Posts"])
async def get_all_posts(skip: int = 0, limit: int = 10):
    return fake_db[skip : skip + limit]

@app.post("/posts", status_code=201, tags=["Posts"])
async def create_post(post: BlogPost):
    global counter
    counter += 1
    post.id = counter
    fake_db.append(post)
    return post

@app.get("/posts/{post_id}", tags=["Posts"])
async def get_post(post_id: int):
    post = next((p for p in fake_db if p.id == post_id), None)
    if not post:
        raise HTTPException(status_code=404, detail="পোস্ট পাওয়া যায়নি")
    return post</code></pre>
        </div>

        <h2 id="run-server">সার্ভার চালু করুন</h2>

        <div class="code-block">
          <div class="code-header">
            <div class="code-dots">
              <div class="code-dot" style="background:#ff5f57;"></div>
              <div class="code-dot" style="background:#febc2e;"></div>
              <div class="code-dot" style="background:#28c840;"></div>
            </div>
            <div class="code-lang-badge"><i class="fa-solid fa-terminal" style="color:#94a3b8;"></i> terminal</div>
            <button class="copy-btn" onclick="copyCode(this)"><i class="fa-regular fa-copy"></i> কপি করুন</button>
          </div>
          <pre><code class="language-bash">uvicorn main:app --reload --port 8000

# এখন browser এ যান:
# http://127.0.0.1:8000        → API root
# http://127.0.0.1:8000/docs   → Swagger UI (স্বয়ংক্রিয়)</code></pre>
        </div>

        <div class="info-box warning">
          <span class="info-box-icon">⚠️</span>
          <div class="info-box-body"><strong>Production:</strong> <code>--reload</code> flag শুধু development-এ ব্যবহার করুন। Production-এ Gunicorn বা Docker ব্যবহার করুন।</div>
        </div>

        <h2 id="auth">Authentication (JWT)</h2>
        <p>নিরাপদ API-এর জন্য JWT token authentication যোগ করুন:</p>

        <div class="code-block">
          <div class="code-header">
            <div class="code-dots">
              <div class="code-dot" style="background:#ff5f57;"></div>
              <div class="code-dot" style="background:#febc2e;"></div>
              <div class="code-dot" style="background:#28c840;"></div>
            </div>
            <div class="code-lang-badge"><i class="fa-brands fa-python" style="color:#60a5fa;"></i> auth.py — JWT</div>
            <button class="copy-btn" onclick="copyCode(this)"><i class="fa-regular fa-copy"></i> কপি করুন</button>
          </div>
          <pre><code class="language-python">from datetime import datetime, timedelta
from jose import JWTError, jwt
from passlib.context import CryptContext
from fastapi.security import OAuth2PasswordBearer

SECRET_KEY = "your-secret-key-here"  # .env থেকে নিন
ALGORITHM = "HS256"
ACCESS_TOKEN_EXPIRE = 30  # minutes

pwd_context = CryptContext(schemes=["bcrypt"], deprecated="auto")
oauth2_scheme = OAuth2PasswordBearer(tokenUrl="token")

def create_access_token(data: dict):
    to_encode = data.copy()
    expire = datetime.utcnow() + timedelta(minutes=ACCESS_TOKEN_EXPIRE)
    to_encode.update({"exp": expire})
    return jwt.encode(to_encode, SECRET_KEY, algorithm=ALGORITHM)

def verify_token(token: str):
    try:
        payload = jwt.decode(token, SECRET_KEY, algorithms=[ALGORITHM])
        return payload.get("sub")
    except JWTError:
        return None</code></pre>
        </div>

        <h2 id="testing">API Testing</h2>

        <div class="code-block">
          <div class="code-header">
            <div class="code-dots">
              <div class="code-dot" style="background:#ff5f57;"></div>
              <div class="code-dot" style="background:#febc2e;"></div>
              <div class="code-dot" style="background:#28c840;"></div>
            </div>
            <div class="code-lang-badge"><i class="fa-brands fa-python" style="color:#60a5fa;"></i> test_main.py — Pytest</div>
            <button class="copy-btn" onclick="copyCode(this)"><i class="fa-regular fa-copy"></i> কপি করুন</button>
          </div>
          <pre><code class="language-python">from fastapi.testclient import TestClient
from main import app
import pytest

client = TestClient(app)

def test_root():
    response = client.get("/")
    assert response.status_code == 200
    assert "PlasicDocs API" in response.json()["message"]

def test_create_post():
    post_data = {
        "title": "Test Post",
        "content": "This is a test",
        "author": "Nayemur",
        "category": "Test"
    }
    response = client.post("/posts", json=post_data)
    assert response.status_code == 201
    assert response.json()["title"] == "Test Post"
    assert response.json()["id"] is not None</code></pre>
        </div>

        <p>এই গাইড অনুসরণ করলে আপনি একটি সম্পূর্ণ, প্রফেশনাল-মানের REST API তৈরি করতে পারবেন। পরবর্তী পর্বে আমরা <strong>Docker</strong> দিয়ে এটি deploy করা নিয়ে আলোচনা করব।</p>

      </div><!-- /article-body -->

      <!-- Share Section -->
      <div class="share-section">
        <h3 style="font-family:'Bricolage Grotesque',sans-serif;font-size:1.1rem;font-weight:700;color:var(--color-ink-900);margin-bottom:14px;">এই আর্টিকেলটি শেয়ার করুন</h3>
        <div class="flex flex-wrap justify-center gap-3">
          <button class="share-btn facebook"><i class="fab fa-facebook-f"></i> Facebook</button>
          <button class="share-btn twitter"><i class="fab fa-twitter"></i> Twitter</button>
          <button class="share-btn linkedin"><i class="fab fa-linkedin-in"></i> LinkedIn</button>
          <button class="share-btn copy-link" id="copy-link-btn"><i class="fa-solid fa-link"></i> লিংক কপি</button>
        </div>
        <div class="flex flex-wrap justify-center gap-2 mt-4">
          <a href="#" class="tag-pill">#Python</a>
          <a href="#" class="tag-pill">#FastAPI</a>
          <a href="#" class="tag-pill">#REST API</a>
          <a href="#" class="tag-pill">#BackendDev</a>
          <a href="#" class="tag-pill">#Programming</a>
        </div>
      </div>

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

    </article><!-- /article -->


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

  </div>
</main>


<!-- FOOTER -->
<footer class="site-footer pt-14 pb-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-10">
      <div>
        <div class="footer-brand-logo mb-4">PlasicDocs<span>+</span></div>
        <p class="text-sm leading-relaxed mb-4" style="color:rgba(255,255,255,.5);max-width:220px;">বাংলায় সর্বোচ্চ মানের প্রযুক্তি ব্লগ।</p>
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
          <div class="flex items-center gap-3 text-sm" style="color:rgba(255,255,255,.55);">
            <i class="fa-solid fa-envelope" style="color:var(--color-brand);"></i> hello@plasicdocs.com
          </div>
          <div class="flex items-center gap-3 text-sm" style="color:rgba(255,255,255,.55);">
            <i class="fa-solid fa-location-dot" style="color:var(--color-brand);"></i> ঢাকা, বাংলাদেশ
          </div>
        </div>
        <div class="mt-4 p-3 rounded-xl text-xs" style="background:rgba(255,255,255,.05);color:rgba(255,255,255,.4);">
          <i class="fa-solid fa-code mr-1" style="color:var(--color-brand);"></i>
          Dev: <span style="color:rgba(255,255,255,.6);font-weight:600;">Md. Nayemur Rahman</span>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-python.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-bash.min.js"></script>
</body>
</html>
