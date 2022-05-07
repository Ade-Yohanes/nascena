<?php
 
 use Illuminate\Support\Facades\Route;



//  use App\Http\Controllers\Frontend;
 use App\Http\Controllers\Frontend\QuoteformController;
 use App\Http\Controllers\Frontend\FormQuotationController;


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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/eror', function () {
return view ('Frontend.404');
});

Route::get('/','Frontend\FrontendController@index');
Route::get('/nav_brand','Frontend\FrontendController@nav_bran');

// Route::get('/brand','Frontend\FrontendController@render_brand');
Route::get('/product/{slug}','Frontend\FrontendController@product');
Route::get('/contact','Frontend\FrontendController@contact');
Route::get('/product','Frontend\FrontendController@render_product');

Route::get('/about','Frontend\FrontendController@about');
Route::get('/about','Frontend\FrontendController@about_client');
// Route::get('/about','Frontend\FrontendController@experiance');




Route::get('/brand/{slug}','Frontend\FrontendController@brand_show');
Route::get('/brand_all','Frontend\FrontendController@brand_all' );

//email confirm
Route::get('/confirm','Frontend\FrontendController@alert');


// Contact Form
Route::get('/quote','Frontend\QuotationController@index');
Route::post('/create','Frontend\QuotationController@save');

// categori page
Route::get('/category_list', 'Frontend\FrontendController@category_list')->name('category_list');
Route::get('/category/{slug} ', 'Frontend\FrontendController@category_show')->name('category_show');

Route::get('/category_all', 'Frontend\FrontendController@category_page' )->name('category_page');
Route::get('/category_all', 'Frontend\FrontendController@category_all' )->name('category_all');

// experiance
Route::get('/experience', 'Frontend\FrontendController@experiance_index' )->name('experience');
Route::get('/experience/{slug} ', 'Frontend\FrontendController@experiance_detail')->name('{slug}');


// search
Route::get('/search','Frontend\SearchController@index')->name('search');
// Route::get('/search_list','Frontend\SearchController@search_sugestion')->name('search_list');
// Route::get('/search_list','Frontend\SearchController@query')->name('search_list');
Route::get('/search_list','Frontend\SearchController@getSearch')->name('search_list');


// package 
Route::get('/package','Frontend\FrontendController@package')->name('package');
Route::get('/package_list','Frontend\FrontendController@package_list')->name('package_list');
Route::get('/package/{slug}','Frontend\FrontendController@package_details')->name('{slug}');

Route::get('/package_detail_1',function () {
    return view('Frontend.package_detail_1');
} );

// Route::get('/', function () {
//     return view('frontend.index');
// });
















