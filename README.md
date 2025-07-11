# VhiWEB E-Procurement API

Test project for Software Engineer recruitment at VhiWEB.

## 🔧 Features

-   User Registration & Login (using Laravel Sanctum)
-   Vendor Registration
-   Product CRUD (Create, Read, Update, Delete) based on logged-in vendor

## 🛠️ Tech Stack

-   Laravel 10
-   Sanctum Authentication
-   MySQL

## 🚀 Setup Instructions

### 1. Clone Repository

```bash
git clone https://github.com/your-username/vhiweb-eprocurement-api.git
cd vhiweb-eprocurement-api
```

### 2. Install Dependencies

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

### 3. Run the Application

```bash
 php artisan serve
```

### 4. Api Document

Auth
POST /api/register

POST /api/login

Vendor
POST /api/vendors (Authenticated)

Products (Authenticated)
GET /api/products

POST /api/products

PUT /api/products/{id}

DELETE /api/products/{id}

Notes
Only users who have registered a vendor can manage products.

Authentication uses Laravel Sanctum (token-based).
