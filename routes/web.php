<?php
use Illuminate\Http\Request;
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
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/test2', 'HomeController@test2')->name('test2');

Route::get('/', function () {
    return view('welcome');
})->name('landing');

/*Velgen home */
Route::get('/velgen-home/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }

    return view('velgen.home');
})->name('velgen_home');

/*Velgen Over Ons */
Route::get('/velgen/over-ons/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }

    return view('velgen-site.over-ons');
})->name('velgen_overons');

/*Velgen Contact */
Route::get('/velgen/contact/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }

    return view('velgen-site.contact');
})->name('velgen_contact');

/*Velgen Algemene voorwaarden */
Route::get('/velgen/algemene-voorwaarden/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }

    return view('velgen-site.algemene-voorwaarden');
})->name('velgen_algemenevoorwaarden');

/*Velgen Privacy Beleid */
Route::get('/velgen/privacy/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }

    return view('velgen-site.privacy');
})->name('velgen_privacy');

/*Velgen Verzenden & retourneren */
Route::get('/velgen/verzenden-retourneren/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }

    return view('velgen-site.verzenden-retourneren');
})->name('velgen_orders');



/*Contact */
Route::get('/contact/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }
    return view('over-ons');
})->name('over-ons');

Route::get('/informatie/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }
    return view('informatie');
})->name('informatie');

Route::get('/contact/{lang?}', function (Request $request) {
    if($request->lang<> '')
    {
        app()->setLocale($request->lang);
    }
    return view('contact');
})->name('contact');


Route::get('/velgen/home', 'VelgenController@index')->name('velgen-site');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/language', array(
  'Middleware'=>'LanguageSwitcher',
  'uses'=>'LanguageLocalizationController@index'
));

Route::get('/admin-portal/home', 'AdminController@adminportal')->name('admin-portal');
Route::get('/{lang?}', 'LanguageLocalizationController@index');
Route::get('/admin/{id}', 'AdminController@index')->name('admin');

