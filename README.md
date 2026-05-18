# PlasicDocs Blog

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?style=for-the-badge&logo=php)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-4.0-38BDF8?style=for-the-badge&logo=tailwindcss)
![Vite](https://img.shields.io/badge/Vite-Build_Tool-646CFF?style=for-the-badge&logo=vite)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql)

</div>

---

# 📖 About PlasicDocs Blog

PlasicDocs Blog is a modern technology blogging platform built with Laravel Blade and Tailwind CSS.  
The platform is designed for publishing high-quality technology articles, tutorials, cybersecurity news, AI content, cloud computing resources, and programming blogs in a clean and responsive user interface.

This project focuses on:

- Clean modern UI/UX
- Fast performance
- Mobile responsiveness
- SEO-friendly structure
- Easy customization
- Simple blog management system
- Category-based article browsing
- Newsletter subscription system

The platform is suitable for:

- Technology blogs
- Personal blogs
- Magazine websites
- Tutorial platforms
- News portals
- Educational websites

---

# ✨ Main Features

## 🔥 Homepage

- Hero section
- Trending technologies
- Search functionality
- Featured blog posts
- Category showcase
- Newsletter subscription area

---

## 📰 Blog System

- Dynamic blog listing
- Single blog details page
- Featured image support
- Author information
- Blog categories
- Related posts section

---

## 📂 Categories

- AI & Machine Learning
- Programming Tutorials
- Cybersecurity
- Cloud Computing
- Web3 & Blockchain
- Mobile Development
- Robotics
- DevOps

---

## 👨‍💻 Author Section

- Author profile cards
- Author specialization
- Team showcase
- Expert contributor system

---

## 🔍 Search System

- Search UI
- Keyboard shortcut support (⌘K)
- Blog filtering

---

## 📧 Newsletter

- Email subscription form
- Subscriber section
- Marketing-ready structure

---

## 🎨 UI/UX Features

- Fully Responsive Design
- Tailwind CSS Styling
- Modern Card Layout
- Smooth Hover Effects
- Dark Modern Design Style
- Clean Typography

---

# 🛠️ Tech Stack

| Technology | Version |
|------------|----------|
| PHP | 8.2+ |
| Laravel | 12 |
| Blade | Latest |
| Tailwind CSS | 4 |
| Vite | Latest |
| MySQL | 8+ |
| Node.js | 18+ |

---

# 📁 Project Structure

```bash
plasicdocs-blog/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
├── storage/
├── tests/
├── .env
├── artisan
├── composer.json
├── package.json
└── vite.config.js
```

---

# ⚙️ Requirements

Before installing this project, make sure your system has the following installed:

## Required Software

- PHP >= 8.2
- Composer
- Node.js >= 18
- NPM
- MySQL
- Git

---

# 🚀 Full Installation Guide

# Step 1 — Clone The Repository

```bash
git clone https://github.com/your-username/plasicdocs-blog.git
```

---

# Step 2 — Enter Project Directory

```bash
cd plasicdocs-blog
```

---

# Step 3 — Install PHP Dependencies

```bash
composer install
```

---

# Step 4 — Install Node Modules

```bash
npm install
```

---

# Step 5 — Create Environment File

```bash
cp .env.example .env
```

---

# Step 6 — Generate Application Key

```bash
php artisan key:generate
```

---

# Step 7 — Create Database

Create a new MySQL database.

Example database name:

```text
plasicdocs_blog
```

You can create the database using:

- phpMyAdmin
- MySQL CLI
- TablePlus
- DBeaver

---

# Step 8 — Configure Environment Variables

Open the `.env` file and update the database configuration.

```env
APP_NAME="PlasicDocs Blog"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=plasicdocs_blog
DB_USERNAME=root
DB_PASSWORD=

CACHE_STORE=file
QUEUE_CONNECTION=database
SESSION_DRIVER=database
```

---

# Step 9 — Run Database Migration

```bash
php artisan migrate
```

---

# Step 10 — Run Database Seeder (Optional)

```bash
php artisan db:seed
```

---

# 🎨 Tailwind CSS Setup

This project uses Tailwind CSS with Vite.

---

# Install Tailwind CSS

```bash
npm install -D tailwindcss @tailwindcss/vite
```

---

# Configure Vite

Update your `vite.config.js`

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
        tailwindcss(),
    ],
});
```

---

# Configure CSS File

Update `resources/css/app.css`

```css
@import "tailwindcss";
```

---

# Add Vite In Blade Layout

Inside your Blade layout file:

```php
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

---

# ▶️ Running The Project

# Run Laravel Development Server

```bash
php artisan serve
```

Server URL:

```text
http://127.0.0.1:8000
```

---

# Run Vite Development Server

```bash
npm run dev
```

---

# 🏗️ Production Build

To build assets for production:

```bash
npm run build
```

---

# 🧹 Useful Artisan Commands

## Clear All Cache

```bash
php artisan optimize:clear
```

---

## Clear Route Cache

```bash
php artisan route:clear
```

---

## Clear Config Cache

```bash
php artisan config:clear
```

---

## Clear View Cache

```bash
php artisan view:clear
```

---

## Create Storage Link

```bash
php artisan storage:link
```

---

## Queue Worker

```bash
php artisan queue:work
```

---

# 📸 Homepage Sections

The homepage includes:

- Hero Section
- Trending Technologies
- Latest Blog Posts
- Featured Categories
- Team Members
- Newsletter Subscription
- Footer Information

---

# 🧠 Example Trending Topics

- ChatGPT
- Web3
- Python
- Cybersecurity
- Cloud Computing
- React.js

---

# 👥 Team Members

- Md. Nayemur — AI Specialist
- Rabbi Hossain — ML Engineer
- Maruf Hossain — Rust Developer
- Naznin Bristy — UI/UX Designer
- Sultana Rabea — Data Scientist
- Nasir Hossain — Cloud Architect

---

# 📱 Responsive Design

This project supports:

- Desktop
- Laptop
- Tablet
- Mobile Devices

---

# 🔐 Security Recommendations

For production deployment:

- Set `APP_DEBUG=false`
- Use HTTPS
- Configure proper file permissions
- Use strong database passwords
- Configure server firewall
- Use Laravel cache optimization

---

# 🚀 Deployment Guide

## Shared Hosting

Run:

```bash
php artisan optimize
```

Build frontend assets:

```bash
npm run build
```

Upload:

- `public/build`
- Full Laravel project

---

## VPS Deployment

Recommended stack:

- Ubuntu 24.04
- Nginx
- PHP-FPM
- MySQL
- Supervisor
- Redis

---

# 🧪 Future Improvements

Possible future features:

- Admin Dashboard
- Authentication System
- Role Management
- Comment System
- Blog Likes
- Reading Time
- Dark Mode
- API Integration
- Multi-language Support
- AI Content Assistant

---

# 🤝 Contributing

Contributions are welcome.

Steps:

1. Fork the repository
2. Create new branch
3. Commit changes
4. Push branch
5. Create pull request

---

# 📄 License

This project is licensed under the MIT License.

---

# 👨‍💻 Developer

Developed by:

## Md. Nayemur Rahman

Technology Enthusiast & Laravel Developer

---

# 📧 Contact Information

## Email

hello@plasicdocs.com

---

## Location

Dhaka, Bangladesh

---

# ❤️ Support

If you like this project, please give it a star on GitHub ⭐

---

# 🌐 PlasicDocs

> PlasicDocs — Premium Bangla Technology Blogging Platform

Share knowledge. Build the future.

---