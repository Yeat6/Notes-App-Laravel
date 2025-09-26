# 🗒️ Laravel Notes App – Week 2

This project is the result of **Week 2** from the **8-Week Laravel Learning Roadmap**.  
The main focus of this week is learning **MVC architecture** and building a **CRUD application** using Eloquent ORM.

---

## 🎯 Goals

-   Understand **Model, View, Controller (MVC)** in Laravel.
-   Learn database migrations.
-   Practice **CRUD operations** (Create, Read, Update, Delete) with Eloquent ORM.
-   Validate requests in controllers.

---

## 📂 Features

-   Create new notes with title & content.
-   View a list of all notes.
-   Edit existing notes.
-   Delete notes.
-   Form validation for title and content.

---

## ⚙️ Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/username/laravel-notes-app.git
    cd laravel-notes-app
    ```

2. Install dependencies:
   composer install

3. Copy the .env file:
   cp .env.example .env

4. Setup database in .env, for example:
   DB_DATABASE=notes_app
   DB_USERNAME=root
   DB_PASSWORD=

5. Run migrations:
   php artisan migrate

6. Generate app key:
   php artisan key:generate

7. Run the server:
   php artisan serve

## 🛠 Tech Stack

-   Laravel 11
-   Blade Template Engine
-   Eloquent ORM
-   MySQL / MariaDB

---

## 📌 Relevance to Final Project

CRUD in this project will later be applied to:

-   Products (Admin can manage products).
-   Orders (User can view and manage their orders).
