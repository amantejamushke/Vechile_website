# ♻️ eWaste Management System

A digital platform built to streamline the collection, awareness, and management of electronic waste. The system supports multiple roles—Admin, Collector, and User—to ensure eco-friendly disposal through an intuitive web interface.

---

## 📌 Project Overview

This system allows users to schedule e-waste pickups, take awareness quizzes, and view educational content. Collectors manage pickup requests, and Admins oversee all activities, content, and users.

---

## 👤 User Roles & Features

### 🧑‍💼 Admin (`admin_dashboard.php`)
- View and manage registered users and collectors.
- Oversee pickup requests and performance statistics.
- Add awareness materials and quizzes.

### 🚛 Collector (`collector_dashboard.php`)
- View assigned pickups and their details.
- Mark pickups as completed (`pickup_confirm.php`).
- Update personal info (`collector_details.php`).

### 👤 User (`user_dashboard.php`)
- Schedule e-waste pickup requests.
- Track past pickups and status.
- Access eco-awareness articles (`awareness.php`) and take quizzes (`quiz.php`).

---

## 🧠 Core Functionality

- **Authentication System**
  - Register/Login with role-based redirection (`login.php`, `register.php`).
  - Secure logout (`logout.php`).

- **Pickup Management**
  - Users schedule pickups.
  - Collectors confirm and update status.

- **Awareness & Education**
  - Informative eco-articles.
  - Interactive quiz to test environmental awareness.

- **Dashboards**
  - Role-based dashboards showing personalized actions and metrics.

---

## 🗃️ Project Structure

```
htdocs/
└── ewaste/
├── admin_dashboard.php
├── awareness.php
├── collector_dashboard.php
├── collector_details.php
├── db_connect.php
├── header.php
├── index.php
├── login.php
├── logout.php
├── pickup_confirm.php
├── quiz.php, quiz.js
├── register.php
├── tailwind.css
├── user_dashboard.php
├── includes/
├── eco.png (banner image)
```

---

## 🛠️ Tech Stack

| Layer      | Technology        |
|------------|-------------------|
| Frontend   | HTML5, CSS3, JavaScript |
| Backend    | PHP               |
| Styling    | Tailwind CSS      |
| Database   | MySQL             |
| Server     | XAMPP (Apache + MySQL) |

---


