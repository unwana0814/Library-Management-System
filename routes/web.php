<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingPageController::class, 'index'])->name('home');

// Admin
// Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function() 
// {
    Route::get('/dashboard/{id}', [AdminController::class, 'showDashboard'])->name('dashboard');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'loginUser']);
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
// });

// Route::group(['prefix'=>'author', 'middleware' => ['auth']], function()
// {
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'registerAuthor'])->name('author.register');
    Route::get('/{user_id}', [AuthorController::class, 'index']);
    Route::post('/{user_id}', [AuthorController::class, 'store']);
    Route::get('/book/{user_id}', [AuthorController::class, 'createBook']);


// });

// Route::resource('book', BookController::class);
// Route::get('/admin/user', [AdminController::class, 'showUser']);
// Route::post('/admin/user/{id}', [AdminController::class, 'deleteUser'])->name('admin.delete');
// // Route::post('custom', [AuthController::class, 'customRegistrationAdmin'])->name('register.custom'); 

// // Author
// Route::post('custom-registration', [AuthController::class, 'customRegistrationAuthor'])->name('register.author'); 
// Route::get('/author/{user_id}', [AuthorController::class, 'index'])->name('author.index');
// Route::post('/author/{user_id}', [AuthorController::class, 'store'])->name('author.store');
// Route::get('/author/book/{user_id}', [AuthorController::class, 'createBook'])->name('author.book_create');


// // Users
// Route::post('registration', [AuthController::class, 'customRegistrationUser'])->name('register.custom'); 
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/download', [UserController::class, 'download'])->name('user.download');


// // Login
// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 

// // Register
// Route::get('registration', [AuthController::class, 'registration'])->name('register-user');

// // signOut
// Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


