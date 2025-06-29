# 📝 PHP MySQL Blog CRUD Application

A simple Blog Post Manager built using **PHP**, **MySQL**, **HTML**, **CSS**, and **JavaScript**. This project demonstrates core web development and backend concepts, including CRUD operations, form handling, and database connectivity.

---

## 📌 Features

- ➕ Add new blog posts
- 📝 Edit existing posts
- ❌ Delete blog posts
- 📋 View all posts in reverse chronological order
- ✅ Basic form validation using JavaScript
- 💾 MySQL database integration with PHP (`mysqli`)

---

## 🛠️ Tech Stack

| Layer         | Tech Used                  |
|---------------|----------------------------|
| Frontend      | HTML5, CSS3, JavaScript    |
| Backend       | PHP (Procedural)           |
| Database      | MySQL                      |
| Server        | Apache (via XAMPP)         |
| Version Control | Git, GitHub              |

---

## 📂 Folder Structure
02-php-mysql-crud/
├── index.php # Homepage - list all posts
├── add.php # Form to add a new post
├── insert.php # PHP logic to insert post
├── edit.php # Edit form for a post
├── update.php # Logic to update post
├── delete.php # Logic to delete post
├── db.php # MySQL DB connection
├── style.css # Basic styling



---

## ⚙️ How to Run Locally


---

### ✅ Next Step:
1. Add this `README.md` to your GitHub repo root
2. Commit and push:
```bash
git add README.md
git commit -m "Added full README"
git push

---

### 1. Prerequisites:
- XAMPP or any local Apache + MySQL stack
- PHP 7+ installed

---

### 2. Setup Steps:
```bash
1. Download or clone the repo into: C:/xampp/htdocs/
2. Start Apache and MySQL from XAMPP Control Panel
3. Visit: http://localhost/phpmyadmin
4. Create a new database named: blogdb

---

### 3. Create `posts` Table

```sql
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

---

### Run in Brouser
http://localhost/02-php-mysql-crud/
