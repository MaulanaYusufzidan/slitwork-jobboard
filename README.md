<div align="center">

# Slitwork

**A Modern Job Board Platform for Job Seekers & Employers**

<img src="docs/screenshots/home-page.png" alt="Slitwork Preview" width="850">

<br>

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![Vue.js](https://img.shields.io/badge/Vue.js-2.x-4FC08D?style=flat-square&logo=vue.js&logoColor=white)](https://vuejs.org)
[![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com)
[![License](https://img.shields.io/badge/License-MIT-black?style=flat-square)](#license)

[Overview](#overview) ·
[Features](#features) ·
[Tech Stack](#tech-stack) ·
[Architecture](#architecture) ·
[Installation](#installation) ·
[User Roles](#user-roles) ·
[Contributing](#contributing)

</div>

---

## Overview

**Slitwork** is a web-based job board platform built with **Laravel** and **Vue.js**. It connects job seekers with employers through a clean, organized interface for discovering opportunities, publishing vacancies, managing applications, and maintaining company profiles.

The platform is built around a role-based access control system with three distinct roles:

| Role | Description |
|---|---|
| **User** | Job seeker — searches, applies for, and saves job vacancies |
| **Author** | Employer — manages company profile and job postings |
| **Admin** | Platform administrator — manages users, roles, and categories |

---

## Features

<table>
<tr>
<td width="50%" valign="top">

**Authentication**
- Register & login
- Change password
- Account deactivation
- Powered by Laravel Fortify

</td>
<td width="50%" valign="top">

**Job Search**
- Interactive, real-time search
- Category filtering
- Vue.js single-page experience
- Detailed job view panel

</td>
</tr>
<tr>
<td width="50%" valign="top">

**Employer Tools**
- Create and edit job postings
- Delete vacancies
- Set application deadlines
- Manage company profile

</td>
<td width="50%" valign="top">

**Applications**
- Apply directly to listings
- Track submitted applications
- Employer-side applicant management

</td>
</tr>
<tr>
<td width="50%" valign="top">

**Saved Jobs**
- Bookmark vacancies
- Revisit saved opportunities anytime

</td>
<td width="50%" valign="top">

**Administration**
- Manage users and roles
- Manage permissions
- Manage company categories

</td>
</tr>
</table>

---

## UI Preview

<table>
<tr>
<td align="center" width="33%">
<img src="docs/screenshots/home-page.png" width="100%"><br>
<sub><b>Home Page</b></sub>
</td>
<td align="center" width="33%">
<img src="docs/screenshots/job-search.png" width="100%"><br>
<sub><b>Job Finder (Vue.js SPA)</b></sub>
</td>
<td align="center" width="33%">
<img src="docs/screenshots/admin-dashboard.png" width="100%"><br>
<sub><b>Admin Dashboard</b></sub>
</td>
</tr>
</table>

---

## Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel 12.61+ |
| Backend | PHP 8.2+ |
| Authentication | Laravel Fortify |
| Frontend | Blade + Bootstrap |
| SPA | Vue.js 2 |
| Database | MySQL |
| Role & Permission | Spatie Laravel Permission v6 |
| Notifications | RealRashid Sweet Alert |

---

## Architecture

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

## User Roles

| Role | Permissions |
|---|---|
| `user` | Search, apply for, and save job vacancies |
| `author` | Manage company profile and job postings |
| `admin` | Manage users, roles, permissions, and categories |

Roles and permissions are managed with **Spatie Laravel Permission**:

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

Roles and permissions can be initialized through `database/seeders`.

---

## Installation

### Requirements

- PHP 8.2+
- Composer
- MySQL 8.0+
- Node.js & npm

### Steps

**1. Clone the repository**
```bash
git clone https://github.com/<username>/<repo>.git
cd <repo>
```

**2. Install dependencies**
```bash
composer install
npm install
```

**3. Configure environment**
```bash
cp .env.example .env
php artisan key:generate
```

**4. Configure the database**

Update your `.env` file:
```env
DB_DATABASE=slitwork
DB_USERNAME=root
DB_PASSWORD=
```
Create the database in MySQL before running the migration.

**5. Run migrations**
```bash
php artisan migrate
php artisan db:seed   # if seeders are available
```

**6. Build frontend assets**
```bash
npm run dev     # development
npm run prod    # production
```

**7. Start the server**
```bash
php artisan serve
```

Then open [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## Contributing

Contributions are welcome. For major changes, please open an issue first to discuss what you'd like to change before submitting a pull request.

---

## License

Slitwork is released under the **MIT License**.

<div align="center">

<br>

Built with Laravel & Vue.js

</div>
