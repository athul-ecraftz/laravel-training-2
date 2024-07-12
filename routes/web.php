<?php

use App\Http\Controllers\FrontentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontentController::class, 'index'])->name('home'); //list of users
Route::get('/about-us', [FrontentController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontentController::class, 'contact'])->name('contact');

Route::get('/create-user', [FrontentController::class, 'create'])->name('createUser'); //create form
Route::get('/edit-user/{uid}', [FrontentController::class, 'edit'])->name('editUser'); //create form
Route::post('/save-user', [FrontentController::class, 'saveUser'])->name('saveUser'); // save user to database
Route::post('/update-user', [FrontentController::class, 'updateUser'])->name('updateUser'); // update user to database
Route::get('/delete-user/{uid}', [FrontentController::class, 'deleteUser'])->name('deleteUser'); // update user to database
Route::get('/new-route/{uid}', [FrontentController::class, 'newroute'])->name('newroute'); // update user to database

