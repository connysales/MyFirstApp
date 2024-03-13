<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|----------     ----------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/homepage', function () {
    return view('homepage');
})->name("homepage");

// Route::get('/about', function () {
//     return view('about');
// })->name("about");

// Route::get('/services', function () {
//     return view('services');
// })->name("services");

// Route::get('/contact', function () {
//     return view('contact');
// })->name("contact");


// Route::name('dashboard.')->group(function () {
//     Route::get('/admin', function () {
//        return view("account");
//     })->name('admin');
//     Route::get('/user', function () {
//        return view("account");
//     })->name('user');
// });

// Route::name('services.')->group(function () {
//     Route::get('/service 1', function () {
//        return view("service 1");
//     })->name('service 1');
//     Route::get('/service 2', function () {
//        return view("service 2");
//     })->name('service 2');
//     Route::get('/service 3', function () {
//        return view("service 3");
//     })->name('service 3');
// });

// Route::get('/login', function () {
//     return view('login');
// })->name("login");