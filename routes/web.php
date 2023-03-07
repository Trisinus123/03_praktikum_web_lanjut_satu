
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|a
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index']) -> name('home');

Route::prefix('product') -> group (function () {
    Route::get('/anggur', [ProductsController::class, 'anggur']);
    Route::get('/apel', [ProductsController::class, 'apel']);
    Route::get('/sayur', [ProductsController::class, 'sayur']);
    Route::get('/buah', [ProductsController::class, 'buah']);
}) -> name('product');

Route::get('/news/{topic?}', [NewsController::class, 'news']) -> name('news');

Route::prefix('program') -> group (function () {
    Route::get('/tanam-pohon', [ProgramController::class, 'tanam']);
    Route::get('/edukasi', [ProgramController::class, 'edukasi']);
}) -> name('program');

Route::get('/about-us', [AboutController::class, 'about']) -> name('about');

Route::resource('contact-us', ContactController::class) -> only([
    'index', 'store'
]);
