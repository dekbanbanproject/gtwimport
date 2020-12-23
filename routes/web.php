<?php

use Illuminate\Support\Facades\Route;


Route::resource('first', 'FirstController');

Route::get('/', 'FontendController@welcome')->name('Per.welcome');
Route::match(['get','post'],'hrdperson_excel','FontendController@hrdperson_excel')->name('hrdperson_excel');
Route::match(['get','post'],'hrdperson_excel_save','FontendController@hrdperson_excel_save')->name('hrdperson_excel_save');
Route::match(['get','post'],'importusers','FontendController@importusers')->name('importusers');
Route::match(['get','post'],'supplies','FontendController@supplies')->name('supplies');

Route::match(['get','post'],'supplies_excel','FontendController@supplies_excel')->name('supplies_excel');
Route::match(['get','post'],'asset_excel','FontendController@asset_excel')->name('asset_excel');
Route::match(['get','post'],'asset_article','FontendController@asset_article')->name('asset_article');
Route::match(['get','post'],'leaveover_excel','FontendController@leaveover_excel')->name('leaveover_excel');
Route::match(['get','post'],'leaveover','FontendController@leaveover')->name('leaveover');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

