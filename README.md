<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Simple Job Posting Listing Website

![Home Page](/images/home-page.png)

## Description
This is a simple job posting listing website built using Laravel. It allows employers to post job vacancies, and job seekers can browse and apply for those jobs. The website incorporates features such as scope filtering, authentication/authorization, and user-friendly interfaces.

## Technologies Used
- Laravel (laravel 9): A powerful PHP framework for web application development.
- TailWind CSS: A utility-first CSS framework for building responsive and stylish user interfaces.
- Blade Templates: Laravel's templating engine for creating dynamic views.
- Eloquent Models: Laravel's ORM for interacting with the database.

## Screenshots
1. Home Page
   ![Home Page](/images/home-page.png)

2. Register and Login Pages
   ![Register Page](/images/register-page.png)
   ![Login Page](/images/login-page.png)

3. Manage Listing Page
   ![Manage Listing Page](/images/manage-listing-page.png)

4. Create Listing Page
   ![Create Listing Page](/images/create-listing-page.png)

## Features
- User Registration and Authentication: Users can create an account and log in to the website.
- Scope Filtering: Job listings can be filtered based on different criteria such as job title, location, or category.
- Create and Manage Job Listings: Employers can create job listings and manage them through an intuitive interface.
- Apply for Jobs: Job seekers can apply for jobs directly through the website.

## Installation and Usage
1. Clone the repository.
2. Install the dependencies by running `composer install` and `npm install`.
3. Configure the database settings in the `.env` file.
4. Run the migrations and seed the database with sample data using `php artisan migrate --seed`.
5. Start the development server with `php artisan serve`.
6. Visit `http://localhost:8000` in your web browser to access the website.

## Credits
This project was developed by Ngonyoku. Feel free to contribute, report issues, or submit feature requests.
I followed the following tutorial on youtube by Traversey Media: https://www.youtube.com/watch?v=EU7PRmCpx-0&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-

## License
This project is licensed under the [MIT License](LICENSE).
