<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', config('app.frontend_url'));

require __DIR__.'/auth.php';
