<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|pour crypter le mot de passe
 */

Route::get('/', fn() => redirect()->to('dashboard'));

//AUTHENTICATION PAGES
Route::get('/login', 'AuthentificationController@login')->name('login');
Route::post('/login', 'AuthentificationController@authentication')->name('authentication');
Route::get('/passwordForget', 'AuthentificationController@passwordForget')->name('passwordForget');
Route::post('/passwordForget', 'AuthentificationController@passwordForget')->name('passwordForget');

Route::get(
    '/logout', function () {
        Auth::logout();
        return redirect()->to('login');
    }
)->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::post('/users', 'UserController@index')->name('users.add');
    Route::put('/users', 'UserController@index')->name('users.update');
    Route::delete('/users', 'UserController@index')->name('users.delete');

    Route::get('/tableaudebord', 'DashboardController@index')->name('dashboard');
    Route::get('/salaries', 'EmployeeController@index')->name('employees.index');
    Route::get('/transfert', 'TransfertController@index')->name('transferts.index');
    Route::get('/validations', 'ValidationController@index')->name('validations.index');
    Route::get('/countries', 'CountryController@index')->name('countries.index');
    Route::get('/wallets', 'WalletController@index')->name('wallets.index');
    Route::get('/logs', 'LogController@index')->name('logs');
    Route::get('/transactions-logs', 'TransactionlogController@index')->name('transactions_logs');
});

//ERRORS PAGES
Route::get('404', fn() => view('errors.404'));
Route::get('500', fn() => view('errors.500')->with(['url' => preg_replace('/^http(s)*:\/\/(www.)*/', '', URL::to('/'))]));