<?php

use App\Controllers\AuthController;
use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Controllers\UserController;   
use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/us', [PublicController::class, 'us']);
Router::get('/form', [PublicController::class, 'form']);
Router::post('/answer', [PublicController::class, 'answer']);

Router::get('/posts', [PostsController::class, 'index']);
Router::get('/posts/create', [PostsController::class, 'create']);
Router::post('/posts', [PostsController::class, 'store']);
Router::get('/posts/view', [PostsController::class, 'view']);
Router::get('/posts/edit', [PostsController::class, 'edit']);
Router::post('/posts/edit', [PostsController::class, 'update']);
Router::get('/posts/delete', [PostsController::class, 'destroy']);

Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/register', [AuthController::class, 'register']);
Router::get('/login', [AuthController::class, 'loginForm']);
Router::post('/login', [AuthController::class, 'login']);
Router::get('/logout', [AuthController::class, 'logout']);

Router::get('/users', [UserController::class, 'index']);
Router::post('/users/delete', [UserController::class, 'delete']);
Router::get('/users/edit', [UserController::class, 'editForm']);
Router::post('/users/update', [UserController::class, 'update']);
Router::get('/users/create', [UserController::class, 'createForm']);
Router::post('/users/create', [UserController::class, 'create']);


