## POUR LES NULLS

## Installation

Follow these steps to set up the project on your local machine:

##  Clone the repository
```bash
git clone https://github.com/your-username/your-repository.git
cd your-repository

composer install

cp .env.example .env

Edit the .env file and configure your database settings:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=

php artisan key:generate


php artisan migrate


php artisan serve
