<?php

declare(strict_types=1);

use App\Router;
use Controller\AdController;

Router::get('/', fn() => (new AdController())->home());
Router::get('/student/info/{id}', fn(int $id) => (new AdController())->show($id));
Router::get('/course/{id}', fn(int $id) => (new AdController())->showCourse($id));
Router::get('/create/student', fn() => Loadview('create-ad'));
Router::post('/create/student', fn() => (new AdController())->createStudent());
