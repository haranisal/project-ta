<?php

use Illuminate\Support\Facades\Route;
/*


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
//  Route::get('/', function () {
//      return view('home.gurudas');
//  });
Route::get('/',[App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');


//login logout middleware
// Route::get('/login',[App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login',[App\Http\Controllers\AuthController::class, 'login']);
// Route::get('/logout','App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('/home', function () {return '/home/siswadas';})->middleware('auth');

//middleware menyesuaikan akses ke home
Route::middleware(['auth','role:admin'])->group(function () {
Route::get('/home/admindas', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('home.admindas')->middleware('Admin');

});
Route::get('/home/siswadas', [App\Http\Controllers\SiswaController::class, 'dashboard'])->name('home.siswadas')->middleware('Siswa');
Route::get('/home/gurudas', [App\Http\Controllers\guruController::class, 'dashboard'])->name('home.gurudas')->middleware('Guru');
//admin
Route::get('/home/admindas','App\Http\Controllers\AdminController@dashboard');
Route::get('/admin','App\Http\Controllers\AdminController@index')->name('Admin');
Route::get('/admin/create','App\Http\Controllers\AdminController@create');
Route::post('/admin/store','App\Http\Controllers\AdminController@store');
route::get('/admin/edit/{id}','App\Http\Controllers\admincontroller@edit');
route::post('/admin/update/{id}','App\Http\Controllers\admincontroller@update');
route::get('/admin/destroy/{id}','App\Http\Controllers\admincontroller@destroy');

//data siswa
Route::get('/datasiswa','App\Http\Controllers\datasiswaController@index')->name('datasiswa');
Route::post('/datasiswa/store','App\Http\Controllers\datasiswaController@store');
route::get('/datasiswa/edit/{id}','App\Http\Controllers\datasiswaController@edit');
route::post('/datasiswa/update/{id}','App\Http\Controllers\datasiswaController@update');
route::get('/datasiswa/destroy/{id}','App\Http\Controllers\datasiswaController@destroy');

//data guru
Route::get('/dataguru','App\Http\Controllers\datasguruController@index')->name('dataguru');
Route::post('/dataguru/store','App\Http\Controllers\datasguruController@store');
route::get('/dataguru/edit/{id}','App\Http\Controllers\datasguruController@edit');
route::post('/dataguru/update/{id}','App\Http\Controllers\datasguruController@update');
route::get('/dataguru/destroy/{id}','App\Http\Controllers\datasguruController@destroy');

//antrian ta
Route::get('/antrianta','App\Http\Controllers\antriantaController@index')->name('antrianta');
Route::post('/antrianta/store','App\Http\Controllers\antriantaController@store');
route::get('/antrianta/destroy/{id}','App\Http\Controllers\antriantaController@destroy');


//siswa
Route::get('/home/siswadas','App\Http\Controllers\SiswaController@dashboard');
Route::get('/siswa/create','App\Http\Controllers\SiswaController@create');


//tgsakhir
Route::get('/tgsakhir/create','App\Http\Controllers\tgsakhirController@create');
Route::post('/tgsakhir/store','App\Http\Controllers\tgsakhirController@store');


//guru
Route::get('/home/gurudas','App\Http\Controllers\guruController@dashboard');
Route::get('/guru/create','App\Http\Controllers\guruController@create');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
