# IT322 Laravel Project

Laravel project for Integrative Programming and Emerging Technologies class.

## Setup Instructions

1. Clone the repository
2. Install dependencies: `composer install`
3. Copy `.env.example` to `.env`
4. Generate key: `php artisan key:generate`
5. Configure database in `.env`
6. Run migrations: `php artisan migrate`
7. Start server: `php artisan serve`

## Thunder Client Setup

Thunder Client extension is configured for API testing.

Test endpoint: `GET http://127.0.0.1:8000/api/test`
