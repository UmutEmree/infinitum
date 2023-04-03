<?php

//front
Route::get('/', 'PagesController@index');
Route::get('/referanslar', 'PagesController@showcase');
Route::get('/hizmetler', 'PagesController@hizmetler');
Route::get('/blog', 'PagesController@blog');
Route::get('/iletisim', 'PagesController@iletisim');
Route::get('/hizmetler/markayonetimi', 'PagesController@markayonetimi');
Route::get('/hizmetler/webtasarim', 'PagesController@webtasarim');
Route::get('/hizmetler/dijitalpazarlama', 'PagesController@dijitalpazarlama');
Route::get('/hizmetler/sosyalmedyayonetimi', 'PagesController@sosyalmedyayonetimi');
Route::get('/hizmetler/kurumsalkimlik', 'PagesController@kurumsalkimlik');
Route::get('/hizmetler/kreatiftasarim', 'PagesController@kreatiftasarim');
Route::get('/hizmetler/produksiyon', 'PagesController@produksiyon');
Route::get('/hizmetler/dijitalmedyaplanlama', 'PagesController@dijitalmedyaplanlama');
Route::get('/referans/{slug}', 'PagesController@refdetail');
Route::get('/referanslar/{slug}', 'PagesController@showcaseCat');
Route::post('/iletisim', 'PagesController@contactsend')->name('iletisim');


//backend
Route::prefix('admin')->group(function() {

  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::resource('categories', 'Backend\CategoriesController');
  Route::resource('references', 'Backend\ReferencesController');
  Route::resource('blog', 'Backend\BlogController');
  Route::resource('partners', 'Backend\PartnersController');
  Route::resource('feedbacks', 'Backend\FeedbacksController');



});

Auth::routes();