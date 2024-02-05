<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;


Route::get('/view_list/{mun}', [CustomerController::class, 'view_list']);
Route::get('/', [CustomerController::class, 'view_list']);
Route::get('/view_list', [CustomerController::class, 'view_list']);
Route::get('/add_form', [CustomerController::class, 'add_form']);

Route::post('/insert_record', [CustomerController::class, 'insert_record']);
Route::post('/update_record', [CustomerController::class, 'update_record']);
Route::get('/delete_record/{id}', [CustomerController::class, 'delete_record']);
Route::get('/edit_form/{id}', [CustomerController::class, 'edit_form']);