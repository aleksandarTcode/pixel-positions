# Pixel Positions
Pixel Positions is a simple job listing platform built with **Laravel 11**.  
It allows users to register as employers, post job listings, search for jobs, and filter by tags.  
This project demonstrates Laravel features such as authentication, resource controllers, form validation, and database factories/seeders.

---

## Features

- Employer registration and login
- Create, store, and feature job listings
- Job listings include title, salary, location, schedule, URL, and optional tags
- Search jobs by title or filter by tags
- Responsive frontend layout using TailwindCSS and Vite
- Authentication middleware for protected routes
- Database factories and seeders for easy testing

---

## Requirements

- PHP 8.2+
- Composer
- Laravel 11
- Node.js (for frontend assets, Vite)
- SQLite (or MySQL/PostgreSQL)

---

## Installation

1. **Clone the repository**

```
git clone https://github.com/aleksandarTcode/pixel-positions
cd pixel-position
```

2. **Install PHP dependencies**

```
composer install
```

3. **Install Node dependencies**

```
npm install
```

4. **Set up environment variables**

```
cp .env.example .env
php artisan key:generate
```

5. **Configure the SQLite Database**

```
php artisan migrate
php artisan db:seed
```
This will create a test user (test@example.com) and 20 sample jobs with tags.

6. **Build frontend assets**

```
npm run dev
```

## Running the Application

**Start the Laravel development server**

```
php artisan serve
```
Visit http://localhost:8000

If using Vite for hot module reloading:

```
npm run dev
```
Then visit the local Vite URL (e.g., http://localhost:5174/).

## Routes

**Public Routes**

*Method---URI---Controller / Action*

* GET	/	JobController@index
* GET	/search	SearchController (invokable)
* GET	/tags/{tag:name}	TagController
* GET	/login	SessionController@create
* POST	/login	SessionController@store
* GET	/register	RegisteredUserController@create
* POST	/register	RegisteredUserController@store


**Authenticated Routes**

*Method---URI---Controller / Action*

* GET	/jobs/create	JobController@create
* POST	/jobs	JobController@store
* DELETE	/logout	SessionController@destroy

## Controllers

**JobController**

* Handles listing, creation, and storage of jobs

* Uses eager loading for employer and tags

* Supports marking jobs as featured and tagging

* Group jobs by featured/non-featured

**RegisteredUserController**

* Handles user registration

* Creates employer associated with user and stores logo

* Automatically logs in new users

**SessionController**

* Handles login, authentication, and logout

**SearchController**

* Invokable controller

* Searches jobs by title

* Returns results with employer and tags eager loaded

**TagController**

* Invokable controller

* Filters jobs by a given tag

## Factories & Seeders

* UserFactory – Creates test users

* EmployerFactory – Creates employers linked to users

* JobFactory – Creates jobs linked to employers

* TagFactory – Creates tags

**Seeders automatically create:**
* A test user (test@example.com)

* 20 jobs with tags, some featured and some full-time/part-time
```
php artisan db:seed
```

## Notes

* Featured jobs are grouped separately in listings

* Tags are attached to jobs via a comma-separated string

* Protected routes use auth middleware

* Guests can register and log in but cannot post jobs

## Licence
**This project is open-source and licensed under the MIT License.**


