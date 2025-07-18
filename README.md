# Pixel_Positions

**Pixel_Positions** is a modern job board platform and my **first Laravel project**, built from scratch with no starter kits.  
Employers can register, post jobs with tags, logos, and external URLs. Upon posting, an email is sent using Laravel queues.  
Designed with a clean, responsive interface using **Tailwind CSS v4+**, **Vite v7**, and **Laravel v12.20.0**.

---

## 🚀 Live Preview

Runs locally on:

http://127.0.0.1:8000


---

## 🛠 Tech Stack & Versions

- **Laravel** v12.20.0 :contentReference[oaicite:1]{index=1}  
- **Tailwind CSS** v4.1.11 :contentReference[oaicite:2]{index=2}  
- **Vite** v7.x (latest `create-vite@7.0.3`) :contentReference[oaicite:3]{index=3}  
- **PHP** v8.2+  
- **MySQL** v8+  
- **Mailtrap** (for SMTP testing)  
- **Laravel Queues** with custom queue tables (`queued_jobs`, `queued_failed_jobs`, `queued_job_batches`)

---

## 🔥 Features

- ✅ User registration & login (custom, no starter kits)  
- ✅ Company logo upload (stored via `storage:link`)  
- ✅ Job posting includes:
  - Title (links to external URL)
  - Company/Employee name, Logo
  - Salary, Location
  - Full-time / Part-time toggles
  - Tags (many-to-many)
  - Featured toggle  
- ✅ Homepage sections:
  - Featured Jobs
  - Recent Jobs
  - Tags with filtering
- ✅ Email notification on job creation (queued with Laravel queues & Mailtrap)  
- ✅ Clean and responsive UI with Tailwind CSS  
- ✅ Authorization policies ensure only owners can post

---

## 🧪 Dummy Data (Factories & Seeders)

Run:

```bash
php artisan migrate:fresh --seed

20 jobs:

10 featured & full-time

10 non-featured & part-time

3 tags

Tags are linked to all jobs via pivot table (job_tag)

---

📋 Project Structure

Pixel_Positions/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   ├── Mail/
│   └── Policies/
├── database/
│   ├── factories/
│   └── seeders/
├── public/              ← logos stored via storage link
├── resources/views/     ← Blade templates and forms
├── routes/web.php       ← Main application routes
├── tailwind.config.js
├── vite.config.js
└── .env.example         ← Example environment variables

---

⚙️ Installation:

# Clone the project
git clone <repo-url>
cd Pixel_Positions

# Install dependencies
composer install
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Set database + Mailtrap credentials in .env:
# MAIL_FROM_ADDRESS=example@example.com

# Run migrations and seed
php artisan migrate --seed

# Link public storage
php artisan storage:link

# Start frontend build and dev server
npm run dev

# Start backend server & queue worker
php artisan serve
php artisan queue:work

---

📧 Email Configuration
Ensure these variables are in .env:

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525  # or 587
MAIL_USERNAME=<your_username>
MAIL_PASSWORD=<your_password>
MAIL_FROM_ADDRESS=example@example.com
MAIL_FROM_NAME="Pixel Positions"

---

👨‍💻 About the Developer
This project was developed by Mohamed Elabyad as his first Laravel application, showcasing:

Laravel fundamentals (DB, queues, email, auth)

Tailwind CSS v4 and Vite integration

Code structure & clean UI

---

📩 Contact: m.elabyad.work@gmail.com

---

📜 License
Released under the MIT License.

