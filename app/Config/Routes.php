<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TodosController::getTodos'); 

$routes->post('/create-todo', 'TodosController::createTodo');

$routes->get('/done-todo/(:num)', 'TodosController::doneTodo/$1');
$routes->get('/edit-todo/(:num)', 'TodosController::editTodo/$1');
$routes->get('/hapus-todo/(:num)', 'TodosController::deleteTodo/$1'); 
$routes->post('/update-todo/(:num)', 'TodosController::updateTodo/$1'); 
$routes->get('/restore-todo/(:num)', 'TodosController::restoreTodo/$1');
