# Parfumeshop_Alexia


Certainly! Here's the modified **README** reflecting the changes you described, where everything is saved in CSV files instead of a database:

---

# Alexia Perfume Shop (CSV Version)

Welcome to the **Alexia Perfume Shop** project! This is a simple e-commerce web application where users can browse, purchase, and manage perfumes. This version of the app saves data (clients, products, contact forms, and shopping baskets) in CSV files instead of using a database. 

The application uses **PHP** for backend processing. It is designed to run locally with **XAMPP**.

## Table of Contents
1. [About the Project](#about-the-project)
2. [Features](#features)
3. [Installation Instructions](#installation-instructions)
4. [Usage](#usage)
5. [Admin Panel Features](#admin-panel-features)
6. [File Structure](#file-structure)
7. [Contact](#contact)

---

## About the Project

**Alexia Perfume Shop (CSV Version)** is a web-based perfume store where users can register, log in, browse perfumes, and make purchases. Instead of using a MySQL database, this version stores all data in CSV files.

Key functionalities include:
- Login and registration for clients.
- Admin panel to manage clients and products.
- Shopping basket to add and review products before purchasing.
- Contact form for feedback or inquiries.

All data related to clients, products, and shopping baskets is saved in CSV files, which are created and updated as necessary.

---

## Features

- **Login & Registration**:
  - Users can log in or register by clicking "Kyqu" and "regjistrohu", respectively.
  
- **Product Management (Admin)**:
  - Admin can add, update, and delete products. Product details are saved in a CSV file.
  
- **Client Management (Admin)**:
  - Admin can view, add, and delete clients. Client information is stored in a CSV file.
  
- **Shopping Basket**:
  - Clients can add products to their basket, and upon purchasing, a CSV file with their name will be created, containing all the products they want to buy.
  
- **Contact Form**:
  - A contact form is available for users to provide feedback or report issues. Messages are saved in a CSV file.

- **Main Page**:
  - The homepage (`index.php`) displays products, allows users to add them to their basket, and view the contact and about us pages.

---

## Installation Instructions

To run the application locally, follow these steps:

1. **Download and Install XAMPP**:
   - Download [XAMPP](https://www.apachefriends.org/index.html) and install it on your system.

2. **Set up the Project**:
   - Clone or download the project into the `htdocs` folder of your XAMPP installation (usually located at `C:/xampp/htdocs`).

3. **Start XAMPP Services**:
   - Open XAMPP Control Panel and start **Apache**.

4. **Start the Application**:
   - Once XAMPP is running, open your browser and go to `http://localhost/your_project_folder` to view the perfume shop.

---

## Usage

1. **Login**:
   - On the homepage, click the "Kyqu" button to log in or create a new account by clicking "regjistrohu" (Register).
   
2. **Shopping**:
   - Browse the perfume products, click "Add to Basket" to add items to your shopping cart.
   - Once ready to purchase, a CSV file with the client’s name will be created containing all the products they selected to buy.
   
3. **Admin Panel**:
   - To access the admin panel, log in with the credentials (`Alketa@gmail.com` / `123`).
   - From the admin panel, you can manage products and clients.

---

## Admin Panel Features

- **Client Management**:
  - **Add Client**: Admin can add clients by entering their personal details (name, surname, birthdate, email, etc.).
  - **Delete Client**: Admin can delete a client by referencing their unique client ID.
  
- **Product Management**:
  - **Add Product**: Admin can add new products by specifying the product code (unique), name, description, price, and quantity.
  - **Delete Product**: Admin can delete a product by its unique code (Kode).

- **View Products**:
  - Once added, products will appear on the main page (`index.php`).

---

## File Structure

The project uses CSV files to store all relevant data. Below is a breakdown of the files:

1. **clients.csv**: Contains all client details (ID, name, email, etc.).
2. **products.csv**: Stores details about perfumes (product code, name, description, price, quantity).
3. **contact.csv**: Stores messages submitted via the contact form.
4. **baskets/**: Contains individual CSV files for each user who makes a purchase. These files are named after the client (e.g., `JohnDoe.csv`) and contain details of the products they have purchased.

---

## Contact

For questions or issues with the project, feel free to reach out to the project administrator:

- **Email**: alketabala11@gmail.com

---

Thank you for using **Alexia Perfume Shop (CSV Version)**! Enjoy your shopping experience!
