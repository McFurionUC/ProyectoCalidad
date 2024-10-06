<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', [App\Http\Controllers\Admin\HomeController::class, '__invoke'])->name('@@.__invoke');


