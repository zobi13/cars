<?php

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;


Route::get('/', function () {
    $age = 15;
    $name = "Joe Doe";
    return view('welcome', compact('age', 'name'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cars', [CarsController::class, 'index']);
Route::get('/cars/{car}', [CarsController::class, 'show'])->name('car');