# 🎯 Pixel_Positions

**Pixel_Positions** is a modern, full-stack job board platform built with **Laravel 12**, **Tailwind CSS**, and **Vite**.  
It allows employers to register and post job listings with advanced features such as tags, company logos, job types, and email notifications powered by Laravel Queues.

Designed with a clean, responsive UI and a scalable structure — suitable for real-world applications and production environments.

---

## 🚀 Live Preview

> 🖥️ Localhost: `http://127.0.0.1:8000`

---

## 🛠 Tech Stack

- **Laravel** 12.20  
- **Tailwind CSS** 4.1  
- **Vite** 7  
- **PHP** 8.2+  
- **MySQL** 8+  
- **Mailtrap** (SMTP testing)  
- **Laravel Queues** with custom queue tables  
  (`queued_jobs`, `queued_failed_jobs`, `queued_job_batches`)

---

## ✨ Key Features

- 👤 **User Authentication**
  - Secure registration and login system (no starter kits)
- 💼 **Job Management**
  - Create, read, and filter job listings
  - Assign tags (many-to-many relationship)
  - Add salary, job type (Full-time / Part-time), location, and external link
  - Upload company logos (`storage:link`)
  - Toggle featured jobs
- 📬 **Email Notifications**
  - Queued email sent to admin on each job creation (via Mailtrap)
- 🏷️ **Tag Filtering**
  - Jobs filterable by tags on homepage
- 🔐 **Authorization Policies**
  - Only job owners can manage their listings
- 💅 **Responsive UI**
  - Built with Tailwind CSS and Blade components

---

## 🧪 Dummy Data & Seeders:

To populate the database with test data:

run bash:
php artisan migrate:fresh --seed

Includes:

20 jobs (10 featured, 10 not featured)

3 tags (linked via pivot table)

Factory-generated records

---

## 📁 Project Structure:

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

##⚙️ Installation & Setup:


### Clone the repository
git clone <repo-url>
cd Pixel_Positions

### Install backend dependencies
composer install

### Install frontend dependencies
npm install

### Setup environment
cp .env.example .env
php artisan key:generate

### Configure database & mail credentials in .env
### MAIL_FROM_ADDRESS=example@example.com

### Run migrations & seeders
php artisan migrate --seed

### Link storage for logos
php artisan storage:link

### Start development servers
npm run dev     
php artisan serve 
php artisan queue:work 

---

## 📧 Email Configuration
Ensure the following in your .env:

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS=you@example.com
MAIL_FROM_NAME="Pixel Positions"

---

## 👨‍💻 Author:
Mohamed Elabyad
Laravel & PHP Web Developer
📩 Email: m.elabyad.work@gmail.com (mailto:m.elabyad.work@gmail.com)

## 📜 License:
Released under the MIT License.
