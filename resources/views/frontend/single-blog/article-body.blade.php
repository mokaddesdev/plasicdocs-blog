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

      </div>