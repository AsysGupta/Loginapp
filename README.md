 Secure PHP Login System
 Project Overview

This project is a basic PHP authentication system integrated with a MySQL database.
It allows users to log in using credentials stored in the database and access a protected dashboard page after successful authentication.

The application demonstrates secure login implementation using modern PHP security practices.

🛠 Technologies Used

PHP

MySQL

Apache

HTML

CSS

Git

 Project Structure
loginapp/
│
├── config/
│   └── db.php          # Database connection file
│
├── css/
│   └── style.css       # Styling for login and dashboard
│
├── index.php           # Login page
├── dashboard.php       # Protected landing page
├── logout.php          # Logout functionality
└── README.md
⚙️ Database Setup

Run the following SQL commands:

CREATE DATABASE loginapp;

USE loginapp;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
🔌 Database Connection

File: config/db.php

<?php
$host = "localhost";
$user = "root";
$pass = "your_mysql_password";
$db   = "loginapp";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed.");
}
?>
🚀 How to Run

Place the project inside:

/var/www/html/

Open in browser:

http://localhost/loginapp

Login using stored credentials.

 Security Features

Password hashing using password_hash()

Password verification using password_verify()

Prepared statements to prevent SQL injection

Session-based authentication

Session ID regeneration after login

Sensitive configuration excluded using .gitignore

Future Improvements

User registration feature

CSRF protection

Login rate limiting

Docker deployment

Nginx configuration

CI/CD pipeline integration
