# 💼 Job Listings

Welcome to the **Job Listings**, a simple Laravel page where users can create and browse job listings. This project was built as part of a Laravel course to practice core concepts such as routing, controllers, views, authentication, and form handling.

---

## 🚀 Features

- 🔐 User Authentication (Register / Login / Logout)
- 📝 Create, Edit, and Delete Job Listings
- 📃 View Job Details
- 🔎 Paginated Job Listings
- 🧑‍💼 Role-based Authorization (only the owner can edit/delete their job)
- 💅 Tailwind CSS for responsive and modern UI
- 📧 Mail notification structure (optional/testing)

---

## 🛠️ Tech Stack

- **Laravel** 10+
- **Tailwind CSS**
- **Blade Components**
- **MySQL** (or any Laravel-compatible DB)
- **Vite** (asset bundler)
- **PHP 8+**

---

## 📂 Main Pages

| Route            | Description                      |
|------------------|----------------------------------|
| `/`              | Home page                        |
| `/jobs`          | List all job postings            |
| `/jobs/create`   | Form to create a new job         |
| `/jobs/{id}`     | View a specific job              |
| `/jobs/{id}/edit`| Edit an existing job (auth only) |
| `/contact`       | Static contact page              |
| `/register`      | User registration                |
| `/login`         | User login                       |

---

## 🔐 Authentication & Authorization

- Guests can **view** job listings.
- Only **registered users** can create or manage jobs.
- Only the **creator** of a job can **edit** or **delete** it.
- Laravel's middleware and policies handle access control.

---

## ⚙️ Setup Instructions

```bash
# 1. Clone the repository
git clone https://github.com/your-username/job-catalog.git
cd job-catalog

# 2. Install dependencies
composer install
npm install && npm run dev

# 3. Create environment file
cp .env.example .env

# 4. Set up your database credentials in .env

# 5. Run migrations
php artisan migrate

# 6. Start the server
php artisan serve
```

---

## 👨‍💻 Author

This project was developed by Claudia Alfieri for educational purposes.

---

## 📝 Contribution 🤝

Contributions are welcome through pull requests.
