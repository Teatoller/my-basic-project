# Basic Laravel App

## How to test

1. create a folder on your machine `mkdir myproject`
2. `cd myproject`
3. on terminal run `git clone https://github.com/Teatoller/my-basic-project.git`
4. cd `my-basic-project`
5. open **my-basic-project** in your chosen editor. For **vscode** enter `code .` on terminal and press enter.
6. `git checkout develop`
7. on ternimal run `touch database\database.sqlite` to create an sqlite database and through the .env file connect to your local sqlite database. Use the .env.example file as a guide.
8. on terminal run `sudo apt-get install php-sqlite3`
9. Run `composer install`
10. Run `php artisan serve` the app in the development mode to open [ http://127.0.0.1:8000/](http://127.0.0.1:8000/) to view it in the browser.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
