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
Route::get('/', 'PropertyController@index');

Route::get('/search', 'PropertyController@search')->name('property.search');

Route::post('/search', 'PropertyController@search')->name('property.search.submit');

Route::resource('property', 'PropertyController');

Route::get('/alert', 'JoinUsController@alerte')->name('join.alert');

Route::post('/alert', 'JoinUsController@alertePerformed')->name('join.alert.submit');

Route::get('/contact', 'JoinUsController@contact')->name('join.contact');

Route::post('/contact', 'JoinUsController@contactPerformed')->name('join.contact.submit');

Route::get('/newsletter', 'JoinUsController@newsletter')->name('join.newsletter');

Route::post('/newsletter', 'JoinUsController@newsletterPerformed')->name('join.newsletter.submit');

Auth::routes();

Route::group([
    'middleware' => [
        'auth',
        'admin'
    ]
], function () {
    Route::resource('admin/user', 'Admin\UserController');

    Route::resource('admin/properties', 'Admin\PropertyController');

    Route::resource('admin/alerts', 'Admin\AlertController');

    Route::resource('admin/contacts', 'Admin\ContactController');

    Route::resource('admin/newsletter', 'Admin\NewsletterController');
});

Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');

Route::get('/{user}/avatar', 'ProfileController@ShowUpdateAvatarForm')->name('profile.avatar');

Route::post('/{user}/avatar', 'ProfileController@UpdateAvatar')->name('profile.avatar.submit');
