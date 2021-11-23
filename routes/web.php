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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'MainController@about')->name('about');

Route::get('/career', 'MainController@career')->name('career');

Route::get('/contact', 'MainController@contact')->name('contact');

Route::get('/club', 'MainController@club')->name('club');

Route::get('/club-bassura', 'ClubController@clubbassura')->name('club-bassura');
Route::get('/club-bassura-schedule', 'ClubController@clubbssc')->name('club-bssc');

Route::get('/club-blok-m-square', 'ClubController@clubblokm')->name('club-blokm');
Route::get('/club-blok-m-square-schedule', 'ClubController@clubblokmsc')->name('club-blokmsc');

Route::get('/club-cempaka-putih', 'ClubController@clubcempaka')->name('club-cempaka');
Route::get('/club-cempaka-putih-schedule', 'ClubController@clubcpsc')->name('club-cpsc');

Route::get('/club-mangga-dua-square', 'ClubController@clubmds')->name('club-mds');
Route::get('/club-mangga-dua-square-schedule', 'ClubController@clubmdssc')->name('club-mdssc');

Route::get('/club-mega-bekasi', 'ClubController@clubmbh')->name('club-mbh');
Route::get('/club-mega-bekasi-schedule', 'ClubController@clubmbhsc')->name('club-mbhsc');

Route::get('/club-one-bellpark', 'ClubController@clubobp')->name('club-obp');
Route::get('/club-one-bellpark-schedule', 'ClubController@clubobpsc')->name('club-obpsc');

Route::get('/club-season-city', 'ClubController@clubsc')->name('club-sc');
Route::get('/club-season-city-schedule', 'ClubController@clubscsc')->name('club-scsc');

Route::get('/club-palembang', 'ClubController@clubpb')->name('club-pb');
Route::get('/club-palembang-schedule', 'ClubController@clubpbsc')->name('club-pbsc');


Route::get('/blog', 'MainController@blog')->name('blog');
Route::get('/blog-2', 'MainController@blog2')->name('blog-2');

Route::get('/special-class-osbond-gym-untuk-memperingati-bulan-peduli-kanker-payudara', 'BlogController@artcl17')->name('artcl17');
Route::get('/pro-dan-kontra-bodybuilding', 'BlogController@artcl16')->name('artcl16');
Route::get('/musik-upbeat-dapat-membuat-latihan-sulit-lebih-mudah-dilakukan', 'BlogController@artcl15')->name('artcl15');
Route::get('/latihan-kardio-di-rumah-4-latihan-yang-harus-anda-lakukan', 'BlogController@artcl14')->name('artcl14');
Route::get('/apakah-olahraga-dapat-menyebabkan-serangan-jantung', 'BlogController@artcl13')->name('artcl13');
Route::get('/jenis-olahraga-yang-direkomendasikan-who-selama-pandemi-covid-19', 'BlogController@artcl12')->name('artcl12');
Route::get('/haruskah-memakai-masker-saat-berolahraga-di-tengah-pandemi', 'BlogController@artcl11')->name('artcl11');
Route::get('/9-jenis-diet-populer-beserta-kelebihan-dan-kekurangannya', 'BlogController@artcl10')->name('artcl10');
Route::get('/cedera-otot-gejala-penyebab-pengobatan-kapan-harus-ke-dokter-dan-pencegahan', 'BlogController@artcl9')->name('artcl9');
Route::get('/yang-harus-anda-ketahui-untuk-membangun-massa-otot', 'BlogController@artcl8')->name('artcl8');
Route::get('/haruskah-menghitung-karbohidrat-kalori-untuk-menurunkan-berat-badan', 'BlogController@artcl7')->name('artcl7');
Route::get('/anjuran-nutrisi-yang-baik-selama-pandemi-covid-19', 'BlogController@artcl6')->name('artcl6');
Route::get('/lakukan-aktifitas-fisik-ini-di-rumah-selama-pandemi-covid-19', 'BlogController@artcl5')->name('artcl5');
Route::get('/5-makanan-untuk-meningkatkan-sistem-kekebalan-tubuh', 'BlogController@artcl4')->name('artcl4');
Route::get('/2-cara-ampuh-cepat-bangun-otot-tanpa-diet', 'BlogController@artcl3')->name('artcl3');
Route::get('/8-tips-gym-untuk-pemula-agar-maksimal', 'BlogController@artcl2')->name('artcl2');
Route::get('/jangan-lupa-pemanasan-sebelum-nge-gym', 'BlogController@artcl1')->name('artcl1');

Route::get('/schedule', 'MainController@schedule')->name('schedule');

Route::get('/join', 'MainController@join')->name('join');

Auth::routes();


