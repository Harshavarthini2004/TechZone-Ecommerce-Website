# TechZone Ecommerce Website

## Project Overview

TechZone Ecommerce Website is a web-based ecommerce application developed using HTML, CSS, PHP, and MySQL. The project allows users to create an account, log in securely, place orders for electronic products, and view their order history.

## Features

* User Registration System
* User Login Authentication
* Session Management
* Place Product Orders
* Order History Tracking
* Logout Functionality
* Responsive User Interface
* MySQL Database Integration

## Technologies Used

### Frontend

* HTML5
* CSS3
* JavaScript

### Backend

* PHP

### Database

* MySQL

## Modules

### 1. User Registration

Users can create a new account by providing:

* First Name
* Last Name
* Email
* Username
* Password

### 2. User Login

Registered users can log in using their username and password.

### 3. Order Management

Users can:

* Enter customer details
* Select products
* Place orders

### 4. Order History

Users can view all previously placed orders.

### 5. Session Management

Only logged-in users can access the order page and order history page.

## Database Tables

### signup

| Field |
| ----- |
| id    |
| fname |
| lname |
| email |
| name  |
| pword |

### orders

| Field      |
| ---------- |
| id         |
| username   |
| mobile     |
| gender     |
| address    |
| product    |
| order_date |

## Project Screenshots

Add screenshots inside the screenshots folder and update them here.

### Login Page

![Login](screenshots/login.png)

### Signup Page

![Signup](screenshots/signup.png)

### Order Page

![Order](screenshots/order.png)

### Order History

![Order History](screenshots/order_history.png)

## Installation Steps

1. Install XAMPP.
2. Start Apache and MySQL.
3. Import database.sql into phpMyAdmin.
4. Copy project folder into htdocs.
5. Open browser and run:
   http://localhost/TechZone-Ecommerce-Website

