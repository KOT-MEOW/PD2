<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\View\View;

Route::get('/', [HomeController::class, 'index']);

