# Bloodline_Co

**Bloodline_Co** is an e-commerce platform built using Laravel 8, designed to provide a seamless shopping experience. The application integrates the Stripe payment gateway to handle secure and efficient transactions.

## 🚀 Features

- **Product Catalog**: Browse a variety of products with detailed descriptions and pricing.
- **Shopping Cart**: Add products to the cart and manage quantities before checkout.
- **Secure Payments**: Process payments securely using Stripe integration.
- **Order Management**: Users can view their order history and track statuses.

## 🛠 Technologies Used

### Backend

- **Laravel 8**: PHP framework for building robust web applications.
- **Stripe API**: Payment gateway integration for processing payments.

### Frontend

- **Blade Templates**: Laravel's templating engine for dynamic content rendering.
- **Bootstrap 4**: Responsive design framework for a mobile-first approach.

## 📦 Installation & Setup

### Prerequisites

- [PHP 7.3 or higher](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)
- [Node.js & NPM](https://nodejs.org/)
- [MySQL](https://www.mysql.com/)

### Steps

1. **Clone the Repository**:
   ```sh
   git clone https://github.com/zep1994/Bloodline_Co.git
   cd Bloodline_Co
   ```

2. **Install Dependencies**:
   - Using Composer:
     ```sh
     composer install
     ```
   - Using NPM:
     ```sh
     npm install
     ```

3. **Environment Setup**:
   - Copy the example environment file and modify it:
     ```sh
     cp .env.example .env
     ```
   - Generate an application key:
     ```sh
     php artisan key:generate
     ```
   - Set up your database credentials and Stripe API keys in the `.env` file:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password

     STRIPE_KEY=your_stripe_public_key
     STRIPE_SECRET=your_stripe_secret_key
     ```

4. **Database Migration**:
   - Run migrations to set up the database schema:
     ```sh
     php artisan migrate
     ```

5. **Serve the Application**:
   - Start the development server:
     ```sh
     php artisan serve
     ```
   - Visit `http://127.0.0.1:8000` in your browser.

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch:
   ```sh
   git checkout -b feature-branch
   ```
3. Commit your changes:
   ```sh
   git commit -m "Description of changes"
   ```
4. Push to the branch:
   ```sh
   git push origin feature-branch
   ```
5. Open a Pull Request detailing your changes.

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## 📞 Contact

For questions or support, please contact the project maintainer.
