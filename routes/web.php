<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;



Route::get('/students', [TransactionController::class, 'getStudents']);