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

use Facades\App\Alert;
use App\Course;

Route::resource('products', 'ProductController');

Route::get('welcome', function() {
    return view('welcome2');
});

/*Route::prefix('admin')->middleware('guest')->group(function() {

    Route::name('products.edit')
        ->get('products/{product}/edit', 'ProductController@edit');

    Route::name('products.update')
        ->put('products/{product}', 'ProductController@update');
});*/

Route::get('dashboard', function() {
    Alert::message('Bienvenido de nuevo!', 'success');

    session()->flash('alert', [
        'message' => 'Bienvenido de nuevo!',
        'type' => 'success'
    ]);
    return view('dashboard');
});

$courses = collect([
    new Course(['title' => 'OOP', 'premium' => true]),
    new Course(['title' => 'Primeros pasos con Laravel', 'premium' => false]),
    new Course(['title' => 'Git', 'premium' => true]),
    new Course(['title' => 'Laravel 5.4', 'premium' => false]),
    ]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('courses', function () use ($courses) {
    /*
     * $premium = $courses->filter(function ($course) {
        return $course->premium;
    });

    $free = $courses->reject(function ($course) {
        return $course->premium;
    });
    */

    /*
     * $premium = $courses->filter->premium;

    $free = $courses->reject->premium;
    */

   /*
    * $courses->map->archive();

    $premium = $courses->filter->isPremium();

    $free = $courses->reject->isPremium();
   */

   list($premium, $free) = $courses->partition->isPremium();

    dd($courses->toArray(), $premium->toArray(), $free->toArray());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('images', function() {
    return view('images');
});
