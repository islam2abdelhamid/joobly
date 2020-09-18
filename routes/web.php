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
Route::post('services/book', 'ServiceController@book');

Route::get('/residential_services', function () {
    return view('pages.services.residential');
});

Route::get('home_services/companies/{slug}','CompanyController@getCompaniesByCategory' );
Route::get('companies/{id}','CompanyController@show' );
Route::get('companies/{id}/services/{serviceId}','CompanyController@getService' );



Route::group(['prefix' => 'company'], function () {

    Route::middleware(['assign.guard:company,company/login'])->group(function () {
    Route::get('/', 'CompanyController@index');        
    Route::put('/', 'CompanyController@updateCompany');        
    Route::get('home', 'CompanyController@index');        
    Route::get('services', 'CompanyController@companyServices');        
    Route::get('orders', 'CompanyController@companyOrders');        
    Route::get('services/{id}', 'ServiceController@show');        
    Route::get('services/{id}/edit', 'ServiceController@edit');        
    Route::put('services/{id}', 'ServiceController@update');        
    Route::get('services/{id}/contact', 'ServiceController@showContactForm');        
    Route::get('services/{id}/team', 'ServiceController@editTeam');        
    Route::put('services/{id}/team', 'ServiceController@updateTeam');        
   
    Route::get('discounts',  function () {
        return view('pages.companies.company_discount');
    });    

    Route::get('profile',  function () {
        return view('pages.companies.profile');
    });  

    Route::put('discounts', 'CompanyController@updateDiscount');        
   
    Route::put('services/{id}/contact', 'ServiceController@updateContact');        
    Route::put('update/{company}', 'CompanyController@update');      
    Route::post('services', 'ServiceController@store');  

    Route::get('logout', 'CompanyController@logout');


    });

    Route::get('login', 'CompanyController@login');
    Route::post('login', 'CompanyController@companyLogin');
    Route::get('register', 'CompanyController@register');
    Route::post('register', 'CompanyController@store');
});


