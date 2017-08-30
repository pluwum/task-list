
## About Task List

This is a web application based on the laravel framework. The application offer the following features

- view the list of tasks, add, edit and delete items
- change state of task (use AJAX)
- role based access control: admin|regular
- admins in addition are be able to see all the users, edit and delete them.
- admins also have total control of all the tasks from all users (regular user can only
see and modify his/her tasks).

## Installation
1. ``git clone https://github.com/pluwum/task-list.git``
2. ``cd task-list``
3. ``composer install or php composer.phar install``
4. ``php artisan key:generate``
5. ``php artisan migrate``
6. ``php artisan db:seed``
7. ``php artisan serve``

You can then access the app at localhost:8000

