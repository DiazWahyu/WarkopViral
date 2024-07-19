![login page](https://github.com/user-attachments/assets/81fa581a-0c76-4ede-8fec-1df51bd0e70c)
<h1 align="center">

    Warkop Viral App
</h1>

<p>
    This project have 3 roles :
</p>

- Admin
- Manager
- Cashier

Here are some demos :
## Clone This Repository

- Run `git clone  https://github.com/DiazWahyu/WarkopViral` on your cmd or terminal
- Go to the folder application using `cd` command on your cmd or terminal
- Run `composer install` on your cmd or terminal
- Copy `.env.example` file to `.env` on the root folder
- Open your `.env` file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan serve`
- Go to http://localhost:8000/
