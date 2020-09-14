<?php

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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/get_started', function () {
    return view('pages.get_started');
});
Route::get('/home_services', function () {
    return view('pages.services.home');
});
Route::get('/residential_services', function () {
    return view('pages.services.residential');
});

Route::get('home_services/companies/{slug}','CompanyController@getCompaniesByCategory' );
// Route::get('home_services/companies/{id}/services','CompanyController@companyServices' );

// Auth::routes();


Route::group(['prefix' => 'company'], function () {

    Route::middleware(['assign.guard:company,company/login'])->group(function () {
    Route::get('home', 'CompanyController@index');        
    Route::get('services', 'CompanyController@companyServices');        
    Route::get('services/{id}', 'ServiceController@show');        
    Route::put('services/{id}', 'ServiceController@update');        
    Route::get('services/{id}/contact', 'ServiceController@showContactForm');        
    Route::get('services/{id}/discount', 'ServiceController@showDiscountForm');        
    Route::put('services/{id}/contact', 'ServiceController@updateContact');        
    Route::put('update/{company}', 'CompanyController@update');      
    Route::post('services', 'ServiceController@store');  
    });

    Route::get('login', 'CompanyController@login');
    Route::post('login', 'CompanyController@companyLogin');
    Route::get('register', 'CompanyController@register');
    Route::post('register', 'CompanyController@store');
});


