# OOP Laravel Project

A web application built with **Laravel** for our Object-Oriented Programming (OOP) course.

---

## Prerequisites

Make sure the following are installed on your machine before setting up the project:

- **PHP** (8.2 or higher)
- **Composer**
- **Node.js & NPM**
- **Database** (SQLite for quick testing, or MySQL via XAMPP / Laragon / local MySQL)

---

## Quick Start (Fastest Way to Try It)

If you just want to clone and run the project immediately without setting up MySQL:

1. **Clone the repository and enter the folder**
   ```bash
   git clone https://github.com/Ayreej17/OOP_Project_laravel.git
   cd OOP_Project_laravel
   ```

2. **Install dependencies and build assets**
   ```bash
   composer install
   npm install
   npm run build
   ```

3. **Create your environment file and app key**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run migrations (creates an SQLite database automatically)**
   ```bash
   php artisan migrate --seed
   ```
   *(When prompted to create `database/database.sqlite`, type `yes` and press Enter. Omit `--seed` if no seeders are included.)*

5. **Link storage and launch the app**
   ```bash
   php artisan storage:link
   php artisan serve
   ```
   Open **`http://127.0.0.1:8000`** in your browser.

---

## Full Setup (Using MySQL / XAMPP)

If you prefer running the project with MySQL:

1. **Follow Steps 1–3** from the Quick Start guide above.
2. **Update `.env`** with your local MySQL credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=oop_project
   DB_USERNAME=root
   DB_PASSWORD=
   ```
3. **Create an empty database** named `oop_project` in phpMyAdmin or your MySQL client.
4. **Run migrations, link storage, and start the server:**
   ```bash
   php artisan migrate --seed
   php artisan storage:link
   php artisan serve
   ```
   Open **`http://127.0.0.1:8000`** in your browser.

---

## Common Troubleshooting

- **`Vite manifest not found`:** Run `npm install && npm run build` (or run `npm run dev` in a separate terminal while developing).
- **`No application encryption key has been specified`:** Run `php artisan key:generate`.
- **`SQLSTATE[HY000] [1049] Unknown database`:** Ensure your MySQL service is running and the database name in `.env` matches an existing database.
- **Broken images or file uploads:** Run `php artisan storage:link` to connect `public/storage` to `storage/app/public`.