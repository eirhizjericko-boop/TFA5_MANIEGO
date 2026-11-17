# Counterboard POS

Counterboard POS is a small Laravel learning project for IT0049. It demonstrates the basic MVC flow with four pages:

- `/` - landing page
- `/about` - short explanation of the project flow
- `/customers` - customer account list
- `/users` - staff user account list

The customer and user pages use Eloquent models to retrieve records from the database. The Blade views display those records with `@foreach`. Migrations and a seeder create and populate both tables.

## Requirements

- PHP 8.2 or newer
- Composer
- SQLite, MySQL, or another Laravel-supported database

## Run in Visual Studio Code

1. Open this folder in Visual Studio Code.
2. Open the integrated terminal.
3. Install PHP packages:

   ```powershell
   composer install
   ```

4. Create the environment file and application key:

   ```powershell
   copy .env.example .env
   php artisan key:generate
   ```

5. Create the local SQLite database if it does not exist, then run the migrations and seeder:

   ```powershell
   New-Item database/database.sqlite -ItemType File
   php artisan migrate --seed
   ```

   If the SQLite file already exists, skip the `New-Item` command.

6. Start Laravel:

   ```powershell
   php artisan serve
   ```

7. Open `http://127.0.0.1:8000` in a browser.

## Project map

```text
app/Http/Controllers/
  CustomerController.php   customer query and customer page response
  PageController.php       landing and about page responses
  UserController.php       user query and user page response
database/migrations/       Laravel database structure files
database/seeders/          sample customer and user records
app/Models/                 Customer and User Eloquent models
public/css/pos.css          small custom stylesheet
resources/views/
  layouts/app.blade.php     shared navigation and page shell
  pages/                    landing and about views
  accounts/                 customer and user views
routes/web.php              four application routes
```

## GitHub commands

Run these commands in the project folder after creating an empty GitHub repository:

```powershell
git init
git add .
git commit -m "Build Laravel POS foundation"
git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/YOUR-REPOSITORY.git
git push -u origin main
```

Replace the remote URL with your own GitHub repository URL. Do not commit `.env`; it contains local configuration and is already excluded by Laravel's `.gitignore`.

## Verification commands

```powershell
php artisan route:list
php artisan migrate:status
php artisan test
```
