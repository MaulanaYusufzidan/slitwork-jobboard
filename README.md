# 💼 Slitwork

<p align="center">
  <img src="https://i.ibb.co/FJytDVn/Screenshot-61.png" alt="Slitwork Preview" width="900">
</p>

<p align="center">
  <strong>A Modern Job Board Platform for Job Seekers & Employers</strong>
</p>

<p align="center">
  <a href="#-features">Features</a> •
  <a href="#-tech-stack">Tech Stack</a> •
  <a href="#-installation">Installation</a> •
  <a href="#-user-roles">Roles</a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/Vue.js-2.x-4FC08D?style=for-the-badge&logo=vue.js&logoColor=white">
  <img src="https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
</p>

---

## ✨ About

**Slitwork** is a web-based **job board platform** built with **Laravel and Vue.js**.

The platform connects **job seekers** with **employers**, providing a simple and organized way to discover job opportunities, publish vacancies, manage applications, and maintain company profiles.

Slitwork uses a **role-based access control system** to provide different permissions for:

* 👤 **User** — Job Seeker
* 🏢 **Author** — Employer
* 🛡️ **Admin** — Platform Administrator

---

## 🚀 Features

<table>
<tr>
<td width="50%">

### 🔐 Authentication

* Register & Login
* Change Password
* Account Deactivation
* Laravel Fortify

</td>
<td width="50%">

### 🔎 Job Search

* Interactive search
* Category filtering
* Vue.js SPA
* Job detail panel

</td>
</tr>

<tr>
<td width="50%">

### 🏢 Employer

* Create job postings
* Edit vacancies
* Delete vacancies
* Set application deadlines
* Manage company profile

</td>
<td width="50%">

### 📄 Applications

* Apply for jobs
* View saved jobs
* Employer applicant management
* Application tracking

</td>
</tr>

<tr>
<td width="50%">

### ❤️ Saved Jobs

* Bookmark vacancies
* View saved jobs
* Easily return to interesting opportunities

</td>
<td width="50%">

### 🛡️ Admin

* Manage users
* Manage roles
* Manage permissions
* Manage company categories

</td>
</tr>
</table>

---

## 🎨 UI Preview

### 🏠 Home Page

<p align="center">
  <img src="https://i.ibb.co/FJytDVn/Screenshot-61.png" alt="Home Page" width="850">
</p>

### 🔎 Vue.js Job Finder

<p align="center">
  <img src="https://i.ibb.co/sJwZw8x/Screenshot-66.png" alt="Job Finder SPA" width="850">
</p>

### 📋 Job Description

<p align="center">
  <img src="https://i.ibb.co/gMTxxj2/Screenshot-69.png" alt="Job Description" width="850">
</p>

### 🏢 Employer Dashboard

<p align="center">
  <img src="https://i.ibb.co/C6JKQ1h/Screenshot-78.png" alt="Author Dashboard" width="850">
</p>

### 🛡️ Admin Dashboard

<p align="center">
  <img src="https://i.ibb.co/mD4961P/Screenshot-79.png" alt="Admin Dashboard" width="850">
</p>

---

## 🧩 Tech Stack

<p align="center">

<img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel&logoColor=white">
<img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php&logoColor=white">
<img src="https://img.shields.io/badge/Vue.js-2.x-4FC08D?style=flat-square&logo=vue.js&logoColor=white">
<img src="https://img.shields.io/badge/Bootstrap-5.x-7952B3?style=flat-square&logo=bootstrap&logoColor=white">
<img src="https://img.shields.io/badge/MySQL-8.0+-4479A1?style=flat-square&logo=mysql&logoColor=white">
<img src="https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=flat-square&logo=javascript&logoColor=black">

</p>

| Layer             | Technology                   |
| ----------------- | ---------------------------- |
| Framework         | Laravel 12.61+               |
| Backend           | PHP 8.2+                     |
| Authentication    | Laravel Fortify              |
| Frontend          | Blade + Bootstrap            |
| SPA               | Vue.js 2                     |
| Database          | MySQL                        |
| Role & Permission | Spatie Laravel Permission v6 |
| Notifications     | RealRashid Sweet Alert       |

---

## 🏗️ Application Architecture

```text
                    ┌─────────────────────┐
                    │      Slitwork       │
                    │    Job Board App    │
                    └──────────┬──────────┘
                               │
              ┌────────────────┼────────────────┐
              │                │                │
              ▼                ▼                ▼
        ┌──────────┐     ┌──────────┐     ┌──────────┐
        │   User   │     │  Author  │     │  Admin   │
        │Job Seeker│     │ Employer │     │          │
        └────┬─────┘     └────┬─────┘     └────┬─────┘
             │                │                │
             ▼                ▼                ▼
        ┌──────────┐     ┌──────────┐     ┌──────────┐
        │ Search   │     │ Manage   │     │ Manage   │
        │ Apply    │     │ Jobs     │     │ Users    │
        │ Bookmark │     │ Company  │     │ Roles    │
        └──────────┘     └──────────┘     └──────────┘
                               │
                               ▼
                        ┌────────────┐
                        │   MySQL    │
                        │  Database  │
                        └────────────┘
```

---

## 👥 User Roles

| Role        | Permissions                                      |
| ----------- | ------------------------------------------------ |
| 👤 `user`   | Search, apply for, and save job vacancies        |
| 🏢 `author` | Manage company profile and job postings          |
| 🛡️ `admin` | Manage users, roles, permissions, and categories |

---

## ⚙️ Requirements

Make sure the following are installed:

* **PHP 8.2+**
* **Composer**
* **MySQL 8.0+**
* **Node.js**
* **NPM**

---

## 📦 Installation

### 1. Clone Repository

```bash
git clone https://github.com/<username>/<repo>.git

cd <repo>
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Environment Configuration

```bash
cp .env.example .env

php artisan key:generate
```

### 4. Configure Database

Update your `.env` file:

```env
DB_DATABASE=slitwork
DB_USERNAME=root
DB_PASSWORD=
```

Create the database in MySQL before running the migration.

### 5. Run Migration

```bash
php artisan migrate
```

If seeders are available:

```bash
php artisan db:seed
```

### 6. Build Frontend

Development:

```bash
npm run dev
```

Production:

```bash
npm run prod
```

### 7. Start Laravel Server

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

---

## 🔑 Role & Permission

Slitwork uses:

**Spatie Laravel Permission**

for managing roles and permissions.

Example:

```text
User
 ├── View Jobs
 ├── Apply Jobs
 └── Save Jobs

Author
 ├── Manage Company
 ├── Create Jobs
 ├── Edit Jobs
 ├── Delete Jobs
 └── View Applicants

Admin
 ├── Manage Users
 ├── Manage Roles
 ├── Manage Permissions
 └── Manage Categories
```

Roles and permissions can be initialized through:

```text
database/seeders
```

---

## 🔄 Upgrade Notes

Slitwork was originally developed using **Laravel 8 with PHP 7.3** and was later upgraded to **Laravel 12.61+** to improve compatibility with **PHP 8.2** and address security issues in older Laravel versions.

The upgrade includes security-related fixes for issues such as:

* Signed URL path confusion
* CRLF injection during email validation

For more information about the dependency upgrade, see:

```text
UPGRADE_NOTES.md
```

---

## 🤝 Contributing

Contributions are welcome!

If you have an idea for a major change, please open an issue first so the changes can be discussed before submitting a pull request.

Pull requests are always welcome.

---

## 📄 License

Slitwork is released under the **MIT License**.

---

<p align="center">
  <strong>Built with ❤️ using Laravel & Vue.js</strong>
</p>

<p align="center">
  ⭐ If you like this project, consider giving it a star!
</p>
