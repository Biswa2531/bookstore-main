BookStore Management System

A web-based BookStore Management System developed using PHP, MySQL, HTML, CSS, and JavaScript. This application provides an online platform for users to browse, search, purchase books, and manage orders, while administrators can manage products, users, orders, and customer messages through a dedicated dashboard.

📖 Project Overview

The BookStore Management System is designed to simplify the process of buying and selling books online. It provides separate interfaces for customers and administrators, enabling efficient book management, order processing, and customer interaction.

🚀 Features
👤 User Features
User Registration and Login
Browse Available Books
Search Books by Title
Add Books to Cart
Remove Books from Cart
Checkout and Place Orders
View Order History
Contact Admin via Message System
User Profile Management
🔑 Admin Features
Secure Admin Login
Dashboard Overview
Add New Books
Update Book Details
Delete Books
Manage Customer Orders
Track Pending and Completed Payments
Manage Registered Users
View Customer Messages
Monitor Overall Store Activity
🛠️ Technologies Used
Technology	Purpose
HTML5	Structure
CSS3	Styling
JavaScript	Client-side Interactivity
PHP	Server-side Development
MySQL	Database Management
XAMPP/WAMP	Local Server Environment
bookstore-main/
<img width="549" height="636" alt="image" src="https://github.com/user-attachments/assets/b890ddc3-052a-435e-a896-b6bde59e831e" />
⚙️ Installation Guide
Prerequisites
PHP 7.x or above
MySQL
XAMPP/WAMP Server
Web Browser
Steps
1. Clone the Repository
git clone https://github.com/your-username/bookstore-management-system.git
2. Move Project Folder

Copy the project folder into:

xampp/htdocs/
3. Create Database

Open phpMyAdmin and create a database:

CREATE DATABASE bookstore;
4. Import Database

Import the provided SQL file (if available).

5. Configure Database Connection

Update config.php:

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'bookstore'
);
6. Start Server

Start:

Apache
MySQL

from XAMPP Control Panel.

7. Run Application

Open browser:

http://localhost/bookstore-main/
📸 Screens
User Module
Home Page
Shop Page
Cart Page
Checkout Page
Orders Page
Contact Page
Admin Module
Dashboard
Product Management
Order Management
User Management
Message Management
🔒 Security Features
Login Authentication
Session Management
Role-Based Access Control
Form Validation
Protected Admin Pages
🎯 Learning Outcomes

This project demonstrates:

PHP CRUD Operations
MySQL Database Integration
Session Handling
User Authentication
E-Commerce Workflow
Shopping Cart Implementation
Order Management System
Full Stack Web Development Concepts
🔮 Future Enhancements
Online Payment Gateway Integration
Book Reviews and Ratings
Wishlist Functionality
Email Notifications
PDF Invoice Generation
Advanced Search Filters
Mobile Responsive Design
Recommendation System
👨‍💻 Author

Biswajit Rout

MCA Student

📄 License

This project is developed for educational and learning purposes.

⭐ If you found this project useful, don't forget to star the repository!
