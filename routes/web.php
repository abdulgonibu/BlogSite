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

/*Route::get('/', function () {
    return view('welcome');
});*/

route::get('/', 'Frontend\FrontendController@index')->name('index');
route::get('about-us', 'Frontend\FrontendController@aboutUs')->name('about.us');
route::get('contact-us', 'Frontend\FrontendController@contactUs')->name('contact.us');
route::get('news/events/details/{id}', 'Frontend\FrontendController@newsdetails')->name('news.event.details');
route::get('our/misson', 'Frontend\FrontendController@mission')->name('our.mission');
route::get('our/visson', 'Frontend\FrontendController@vission')->name('our.vission');
route::get('news/evetnts', 'Frontend\FrontendController@newsEvents')->name('our.news.evets');
route::post('contact/store', 'Frontend\FrontendController@contactstore')->name('contact.store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){
	Route::prefix('users')->group(function(){
	route::get('/view', 'Backend\UsersController@view')->name('users.view');
	route::get('/add', 'Backend\UsersController@add')->name('users.add');
	route::post('/store', 'Backend\UsersController@store')->name('users.store');
	route::get('/edit/{id}', 'Backend\UsersController@edit')->name('users.edit');
	route::post('/update/{id}', 'Backend\UsersController@update')->name('users.update');
	route::get('/delete/{id}', 'Backend\UsersController@delete')->name('users.delete');
});






Route::prefix('profile')->group(function(){
	route::get('/view', 'Backend\ProfileController@view')->name('profile.view');
	route::get('/password/view', 'Backend\ProfileController@passwordView')->name('password.view');
	route::post('/store', 'Backend\ProfileController@store')->name('profile.store');
	route::get('/edit', 'Backend\ProfileController@edit')->name('profile.edit');
	route::post('/update', 'Backend\ProfileController@update')->name('profile.update');
	route::get('/delete/{id}', 'Backend\ProfileController@delete')->name('profile.delete');
	route::post('/password/update', 'Backend\ProfileController@passwordupdate')->name('password.update.view');
});

Route::prefix('logos')->group(function(){
	route::get('/view', 'Backend\LogoController@view')->name('logos.view');
	route::get('/add', 'Backend\LogoController@add')->name('logos.add');
	route::post('/store', 'Backend\LogoController@store')->name('logos.store');
	route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
	route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
	route::get('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
});

Route::prefix('sliders')->group(function(){
	route::get('/view', 'Backend\sliderController@view')->name('sliders.view');
	route::get('/add', 'Backend\sliderController@add')->name('sliders.add');
	route::post('/store', 'Backend\sliderController@store')->name('sliders.store');
	route::get('/edit/{id}', 'Backend\sliderController@edit')->name('sliders.edit');
	route::post('/update/{id}', 'Backend\sliderController@update')->name('sliders.update');
	route::get('/delete/{id}', 'Backend\sliderController@delete')->name('sliders.delete');
});

Route::prefix('missions')->group(function(){
	route::get('/view', 'Backend\MissionController@view')->name('missions.view');
	route::get('/add', 'Backend\MissionController@add')->name('missions.add');
	route::post('/store', 'Backend\MissionController@store')->name('missions.store');
	route::get('/edit/{id}', 'Backend\MissionController@edit')->name('missions.edit');
	route::post('/update/{id}', 'Backend\MissionController@update')->name('missions.update');
	route::get('/delete/{id}', 'Backend\MissionController@delete')->name('missions.delete');
});

Route::prefix('vissions')->group(function(){
	route::get('/view', 'Backend\VissionController@view')->name('vissions.view');
	route::get('/add', 'Backend\VissionController@add')->name('vissions.add');
	route::post('/store', 'Backend\VissionController@store')->name('vissions.store');
	route::get('/edit/{id}', 'Backend\VissionController@edit')->name('vissions.edit');
	route::post('/update/{id}', 'Backend\VissionController@update')->name('vissions.update');
	route::get('/delete/{id}', 'Backend\VissionController@delete')->name('vissions.delete');
});

Route::prefix('news_events')->group(function(){
	route::get('/view', 'Backend\NewsEventController@view')->name('news_events.view');
	route::get('/add', 'Backend\NewsEventController@add')->name('news_events.add');
	route::post('/store', 'Backend\NewsEventController@store')->name('news_events.store');
	route::get('/edit/{id}', 'Backend\NewsEventController@edit')->name('news_events.edit');
	route::post('/update/{id}', 'Backend\NewsEventController@update')->name('news_events.update');
	route::get('/delete/{id}', 'Backend\NewsEventController@delete')->name('news_events.delete');
});

Route::prefix('services')->group(function(){
	route::get('/view', 'Backend\serviceController@view')->name('services.view');
	route::get('/add', 'Backend\serviceController@add')->name('services.add');
	route::post('/store', 'Backend\serviceController@store')->name('services.store');
	route::get('/edit/{id}', 'Backend\serviceController@edit')->name('services.edit');
	route::post('/update/{id}', 'Backend\serviceController@update')->name('services.update');
	route::get('/delete/{id}', 'Backend\serviceController@delete')->name('services.delete');
});

Route::prefix('contacts')->group(function(){
	route::get('/view', 'Backend\ContactController@view')->name('contacts.view');
	route::get('/add', 'Backend\ContactController@add')->name('contacts.add');
	route::post('/store', 'Backend\ContactController@store')->name('contacts.store');
	route::get('/edit/{id}', 'Backend\ContactController@edit')->name('contacts.edit');
	route::post('/update/{id}', 'Backend\ContactController@update')->name('contacts.update');
	route::get('/delete/{id}', 'Backend\ContactController@delete')->name('contacts.delete');
	route::get('communicate/delete/{id}', 'Backend\ContactController@Communicatedelete')->name('communicate.delete');
	route::get('/communicate', 'Backend\ContactController@viewCommunicate')->name('contacts.communicate');

});

Route::prefix('abouts')->group(function(){
	route::get('/view', 'Backend\AboutController@view')->name('abouts.view');
	route::get('/add', 'Backend\AboutController@add')->name('abouts.add');
	route::post('/store', 'Backend\AboutController@store')->name('abouts.store');
	route::get('/edit/{id}', 'Backend\AboutController@edit')->name('abouts.edit');
	route::post('/update/{id}', 'Backend\AboutController@update')->name('abouts.update');
	route::get('/delete/{id}', 'Backend\AboutController@delete')->name('abouts.delete');
});

});

