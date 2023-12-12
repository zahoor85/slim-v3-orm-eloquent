<?php

error_reporting(E_ALL);
ini_set("display_errors", "On");

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use App\Controllers\HomeController;
use App\Models\Task;


# Example-1
$app->get('/', 'App\Controllers\HomeController:index');
$app->post('/create', 'App\Controllers\HomeController:create');
$app->get('/get', 'App\Controllers\HomeController:getall');


# Example-2
 $app->get('/todos', function ($request, $response, $args) {
     $todos = Task::all();
     return $this->response->withJson($todos);
 });

 $app->get('/todo/[{id}]', function ($request, $response, $args) {
 $todo = Task::find($args['id']);
        return $this->response->withJson($todo);
 });