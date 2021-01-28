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

//HALAMAN UTAMA
Route::get('/', function () {
    return view('auth/login'); });

Route::get('profile', function () {
    return view('profile'); })->name('profile');

Route::get('jadwal', function () {
    return view('Jadwal.create'); })->name('jadwal');
    
 Route::get('kuota', function () {
    return view('Jadwal.kuota'); })->name('kuota'); 
    
Route::get('result', function () {
    return view('Jadwal.hasil'); })->name('result');    

Route::get('JadwalCreate', function () {
    return view('Jadwal.autofill'); })->name('autofill');
    

//JADWAL
Route::get('CreateJadwal','JadwalController@create')->name('create.jadwal');

Route::get('CekNoRM',['uses'=>'JadwalController@cek'])->name('cekNoRM'); 

Route::resource('jadwal', 'JadwalController');

Route::resource('quota', 'KuotaController');

Route::get('/cek',['uses' => 'KuotaController@cek' ])->name('cek');

//Route::post('jadwal/store/{id}', 'JadwalController@store')->name('jadwal.store.id');

//Route::get('IndexJadwal','JadwalController@index')->name('index.jadwal');

//Route::get('Index','PasienController@index')->name('index');


//LOGIN
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home','JadwalController@index')->name('home');

Route::get('index','JadwalController@index')->name('index');

Route::get('profile', 'HomeController@show')->name('profile');

Route::resource('profileEdit', 'ProfileController');

Route::get('/changePassword','HomeController@showChangePasswordForm');

Route::post('/changePassword','HomeController@changePassword')->name('changePassword');



//PASIEN
Route::get('CreatePasien', 'PasienController@create')->name('create.pasien');

Route::resource('pasien', 'PasienController');

Route::get('dataPasien', 'PasienController@index')->name('dataPasien');

Route::get('ShowPasien', 'PasienController@index')->name('show.pasien');