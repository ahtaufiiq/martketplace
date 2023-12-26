# Product Management System

This is a simple Product Management System with basic CRUD functionality and status-based filtering.

## Table of Contents

1. [Database Schema](#database-schema)
1. [Setup](#setup)
    - [Composer and NPM Installation](#composer-and-npm-installation)
    - [Environment Configuration](#environment-configuration)
    - [Generate Application Key](#generate-application-key)
    - [Database Migration and Seeding](#database-migration-and-seeding)
    - [Running the Application](#running-the-application)
1. [User Types](#user-types)
1. [Routing Information](#routing-information)
1. [Usage](#usage)
    - [Login Credentials](#login-credentials)
    - [Show Product](#show-product)
    - [Search Product](#search-product)
    - [Delete Product](#delete-product)
    - [Add Product](#add-product)
    - [Edit Product](#edit-product)
1. [Validation](#validation)

## Database Schema

### Product

| id_produk | nama_produk | harga | kategori_id | status_id |
| --------- | ----------- | ----- | ----------- | --------- |
| INTEGER   | VARCHAR     | FLOAT | INTEGER     | INTEGER   |

### Category

| id_kategori | nama_kategori |
| ----------- | ------------- |
| INTEGER     | VARCHAR       |

### Status

| id_status | nama_status |
| --------- | ----------- |
| INTEGER   | VARCHAR     |

## Setup

### Composer and NPM Installation

```bash
composer install
npm install
```

### Environment Configuration

```bash
cp .env.example .env
```

Update the `.env` file with your PostgreSQL database configuration.

### Generate Application Key

```bash
php artisan key:generate
```

### Database Migration and Seeding

```bash
php artisan migrate
php artisan db:seed
```

### Running the Application

Run the following command to start the Laravel development server:

```bash
php artisan serve
```

Make sure to run the npm command separately, in another terminal:

```bash
npm run dev
```

## User Types

### Users

-   Users can only view or search for products.

### Admin Users

-   Admin users have the following privileges:
    -   Add new products.
    -   Edit existing products.
    -   Delete existing products.

## Routing Information

| Method | Route        | User Type  | Action                          |
| ------ | ------------ | ---------- | ------------------------------- |
| GET    | /            | User/Admin | Display the home page.          |
| POST   | /produk/cari | User/Admin | Search for products by name.    |
| DELETE | /produk/{id} | Admin      | Delete a product.               |
| POST   | /produk      | Admin      | Add a new product.              |
| PUT    | /produk/{id} | Admin      | Edit an existing product.       |
| GET    | /login       | User/Admin | Display the login page.         |
| POST   | /login       | User/Admin | Process the login.              |
| POST   | /logout      | User/Admin | Log out the authenticated user. |

## Usage

### Login Credentials

To log in as a regular user, use the following credentials:

-   Email: andi@example.com
-   Password: qwerty123

To log in as an admin, use the following credentials:

-   Email: admin@example.com
-   Password: qwerty123

![Login](/demo/login.png)

### Show Product

-   Show only products with the status "bisa dijual."

#### Users

-   Users will see a display of products available for sale.

    ![User Display](/demo/show-product-for-user.png)

#### Admin Users

-   Admin users, upon logging in, will have access to an enhanced home page displaying additional admin functionalities.

    ![Admin User Display](/demo/show-product-for-admin.png)

### Search Product

-   Users can search for products by product name.

    ![Search Product](/demo/search-product.png)

### Delete Product

-   Implement a feature to delete existing products.
-   Provide confirmations before delete product.

    ![Delete Product](/demo/delete-product.png)

### Add Product

-   Implement a feature to add new products.

    ![Add Product](/demo/add-product.png)

### Edit Product

-   Implement a feature to edit existing products.

    ![Edit Product](/demo/edit-product.png)

## Validation

-   Implement form validation for adding and editing products.

    -   Name must be filled.
    -   Price must be a integer.

    ![Validation](/demo/validation.png)
