### Project Setup
###### (Not including the dev environment)
1. Run `sudo git clone https://github.com/halilyucel/task-app.git`
2. Create a MySQL database for the project
3. From the projects root run `cp .env.example .env`
4. Configure your `.env`
5. Run `sudo composer update` from the projects root folder
6. From the projects root folder run `php artisan key:generate`
7. From the projects root folder run `php artisan migrate`
8. From the projects root folder run `composer dump-autoload`

#### View the Project in Browser
1. From the projects root folder run `php artisan serve`
2. Open your web browser and go to `http://localhost`
