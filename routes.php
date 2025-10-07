<?php

use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', action: [PublicController::class, 'index']);
Router::get('/us', action: [PublicController::class, 'us']);
Router::get('/form', [PublicController::class, 'form']);
Router::post('/answer', [PublicController::class, 'answer']);

Router::get('/posts', [PostsController::class, 'index']);
Router::get('/posts/create', [PostsController::class, 'create']);
Router::post('/posts', [PostsController::class, 'store']);
