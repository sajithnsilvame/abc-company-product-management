
# About ABC company System

## Table of Contents

- [Features](##features)
- [Getting Started](#getting-started)
  - [Tools Used](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
  - [Inserting Categories](#inserting-categories)
  - [Inserting Products](#inserting-products)
  - [Viewing and Editing Products](#viewing-and-editing-products)
  - [Seeding Fake Data](#seeding-fake-data)
- [API Support](#api-support)
- [Frontend](#frontend)


## Features

1. **Insert Categories**: Authenticated users can add new product categories with unique category names.

2. **Insert Products**: Users can insert new products and associate them with relevant categories using a dropdown list.

3. **View and Manage Products**: The system allows users to view all products with options to edit and delete products as needed.

4. **Edit Products**: Users can update product details, including category associations.

5. **Seeding Fake Data**: The application provides seeders to populate the database with fake products and categories for testing purposes.

6. **API Support**: Categories can also be added via an API endpoint, making it convenient for integration with external tools like Postman.

7. **Simple Frontend**: The frontend is built using a simple Blade template in Laravel for ease of use.

## Getting Started

### Tools & Technolies have Used

- PHP >= 7.4
- Composer
- Laravel
- MySQL 
- Ubuntu (OS)

### Installation
1. Clone this repository to your local machine:
```
git clone https://github.com/sajithnsilvame/abc-company-product-management.git
```
2. Navigate to the project directory:
```
cd abc-shop-product-management
```
3. Install the project dependencies:
```
composer install
```
4. Create a copy of the .env.example file as .env and configure your database connection:
```
cp .env.example .env
```
Update the .env file with your database credentials.

5. Generate an application key:
```
php artisan key:generate
```
6. Run database migrations to create the necessary tables:
```
php artisan migrate
```
7. Start the development server:
```
php artisan serve
```

8. Access the application in your web browser at http://localhost:8000.

## Usage
### Inserting Categories
1. Log in to the system using your credentials.

2. Navigate to the "Add Category" section.

3. Use the provided form to insert new categories. Ensure that the category name is unique.

### Inserting Products
1. Log in to the system using your credentials.

2. Navigate to the "Add Products" section.

3. Use the provided form to insert new products. Select the relevant category for each product from the dropdown list.

### Viewing and Editing Products
1. Log in to the system using your credentials. Then you redirect to the http://localhost:8000/dashboard


2. Here, you can view a list of all products. You have the option to edit or delete individual products as needed.

### Seeding Fake Data
1. Here, I have used **Laravel Seeders**To populate the database with fake data for testing.This will create sample categories and products in database.

## API Support
Categories can also be added to the system via an API endpoint. You can use tools like Postman to make POST requests to the API endpoint for adding categories.


#### API Endpoint for Adding Categories:

```http
  POST http://localhost:8000/api/category-create
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **Required**.|

## Frontend
The frontend of this application uses a simple HTML with Bootstrap for development purposes. 
