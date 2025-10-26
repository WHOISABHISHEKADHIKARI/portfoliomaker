# 🎯 Portfolio Maker — Personal Portfolio Admin Dashboard

A fast, modern, and SEO‑friendly PHP + MySQL app to manage your personal portfolio content with a polished AdminLTE dashboard. Create and update Users, Projects, Education, Work Experience, Volunteering, and System Info — all in one place.

## 🚀 Features
- Clean admin dashboard (AdminLTE) with cards and quick links
- Manage content: Users, Projects, Education, Work, Volunteering, System Info
- Responsive UI with improved visual polish via `dist/css/admin-clean.css`
- Basic auth (MD5 passwords) and session management
- Static UI previews for Login, Register, Dashboard, and Forgot Password

## 📸 Screenshots
> 🎨 Preview gallery coming soon (add images under `./Asset` when ready)
- Admin Login — modern form UI (`admin/preview.html`)
- Admin Dashboard — card grid and quick actions (`admin/dashboard_preview.html`)
- Forgot Password — simple reset request UI (`admin/forgot_password_preview.html`)

## 🔧 How to Use
1. Set up the database and seed a test admin.
2. Configure `initialize.php` with correct `base_url` and DB credentials.
3. Run locally via PHP built‑in server or XAMPP/Apache.
4. Log in at `admin/login.php` using the seeded credentials.

## ✅ Database Setup
1. Create the database: `db_freelance`.
2. Import schema: `database/db_freelance.sql`.
3. Seed a test admin (choose one):
   - Import SQL: `database/seed_test_user.sql`.
   - Or visit `admin/seed_test_user.php` in your local server.

Seeded admin credentials: `username: testadmin`, `password: password123`.

## 🧠 Tech Stack
- PHP 7.4+ and MySQL/MariaDB
- AdminLTE, jQuery, DataTables, Select2, SweetAlert2
- Custom CSS overrides: `dist/css/admin-clean.css`

## 🖥️ Run Locally
- Option A — PHP built‑in server:
  ```bash
  cd portfoliomaker
  php -S localhost:8001 -t .
  ```
  Set `base_url` to `http://localhost:8001/` in `initialize.php`.
- Option B — XAMPP/Apache:
  - Place `portfoliomaker/` in the Apache docroot.
  - Default `base_url` is `http://localhost/freelance/` (already set).

## ⚙️ Configuration
Edit `initialize.php`:
- `DB_SERVER`, `DB_USERNAME`, `DB_PASSWORD`, `DB_NAME` — point to your DB.
- `base_url` — your local server URL (e.g., `http://localhost/freelance/` or `http://localhost:8001/`).

`base_app` is set automatically and typically needs no changes.

## 🔐 Admin Access
- Login: `admin/login.php`
- Dashboard: `admin/index.php?page=home`
- Logout: `classes/Login.php?f=logout`

### 🧪 Static UI Previews (design only)
- `admin/preview.html` — Admin login preview
- `admin/register_preview.html` — Admin signup preview
- `admin/dashboard_preview.html` — Cleaned dashboard preview
- `admin/forgot_password_preview.html` — Forgot password preview

## 📂 Project Structure
- `admin/` — Admin views and modules
- `classes/` — Core PHP classes (`DBConnection`, `Login`, `SystemSettings`, `Users`, etc.)
- `database/` — SQL schema and optional seed files
- `dist/` — Assets and admin CSS overrides
- `inc/` — Header, nav, and session auth helpers

## 🛠 Deployment
- Apache/Nginx + PHP‑FPM: point the vhost to `portfoliomaker/` and update `base_url`.
- Docker (optional): add a simple PHP + Apache image and mount the app.

## 🔎 SEO Notes (optional)
- For the public site, set proper meta tags and Open Graph images.
- Keep content updated via admin for fresh SEO signals.

## ❓ FAQ
- Login fails? Confirm DB import, seed user, and `initialize.php` settings.
- Broken styles or missing assets? Ensure `base_url` matches the server URL.
- "php not recognized"? Install PHP or use XAMPP.

## 🧑‍💻 Developer
Built by **Abhishek Adhikari**
- GitHub: https://github.com/WHOISABHISHEKADHIKARI
- Website: https://www.adhikariavishek.com.np/

## 🌐 About Hashtag Web Solution
Hashtag Web Solution is a professional web development, SEO, and digital marketing agency based in Nepal. We build scalable websites, custom web tools, and AI‑driven digital products.
- Website: https://hashtagweb.com.np
- Email: info@hashtagweb.com.np
- Phone: +977‑9823405140

### ❤️ Support Our Mission
If this helps, give a ⭐ and connect on socials.

## ⚠️ Notes
- Passwords currently use `MD5`; for production, migrate to `password_hash()`.
- Static preview pages do not perform real authentication.