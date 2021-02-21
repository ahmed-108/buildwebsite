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

Auth::routes();

//Route::get("/login","HomeController@index");// لما بستخدم دي بيحولني علي النيم لوجين

Route::get("/","AdminController\AdminController@Index");
Route::get("/AdminLogin","AdminController\AdminController@LoginAdmin");
Route::get("/admin","AdminController\AdminController@Adminpage");
Route::post('/admin.about/editabout', 'AdminController\AdminController@updateabout')->name('category.update');
Route::get('/admin.about/deleteabout', 'AdminController\AdminController@deleteabout')->name('category.delete');
Route::get('/admin.about/deletevideo', 'AdminController\AdminController@deletevideo')->name('category.deletevideo');


Route::get("/admin.whyus","AdminController\AdminController@AdminWhyus");
Route::post('/admin.whyus/editus', 'AdminController\AdminController@updateus')->name('category.updateus');
Route::get('/admin.whyus/deletewhyus', 'AdminController\AdminController@Deletewhy')->name('category.deletewhyus');

Route::get("/admin.slider","AdminController\AdminController@Adminslider");
Route::post('/admin.slider/editpic1', 'AdminController\AdminController@updatepic1')->name('category.updatepic1');
Route::post('/admin.slider/editpic2', 'AdminController\AdminController@updatepic2')->name('category.updatepic2');
Route::post('/admin.slider/editpic3', 'AdminController\AdminController@updatepic3')->name('category.updatepic3');
Route::post('/admin.slider/editpic4', 'AdminController\AdminController@updatepic4')->name('category.updatepic4');
Route::get('/admin.slider/delslider', 'AdminController\AdminController@deleteslider')->name('category.deleteslider');






Route::get('/admin.slider/deletepic1', 'AdminController\AdminController@deletepic1')->name('category.deletepic1');
Route::get('/admin.slider/deletepic2', 'AdminController\AdminController@deletepic2')->name('category.deletepic2');
Route::get('/admin.slider/deletepic3', 'AdminController\AdminController@deletepic3')->name('category.deletepic3');
Route::get('/admin.slider/deletepic4', 'AdminController\AdminController@deletepic4')->name('category.deletepic4');



Route::get("/admin.contact","AdminController\AdminController@Admincontact");
Route::post('/admin.contact/editcontact', 'AdminController\AdminController@updatecontact')->name('category.updatecontact');
Route::post('/admin.contact/logo', 'AdminController\AdminController@updatelogo')->name('category.logo');

Route::get('/admin.contact/deleteform', 'AdminController\AdminController@deletecontactform')->name('category.delform');
Route::get('/admin.contact/addform', 'AdminController\AdminController@addcontactform')->name('category.addform');
Route::get('/admin.contact/delname', 'AdminController\AdminController@delnameform')->name('category.delname');
Route::get('/admin.contact/addname', 'AdminController\AdminController@addnameform')->name('category.addname');
Route::post('/admin.contact/background', 'AdminController\AdminController@editbackground')->name('category.backgroundcolor');


Route::get("/admin.page","AdminController\AdminController@Adminpage");
Route::post('/admin.page/editpage', 'AdminController\AdminController@updatepage')->name('category.updatepage');

Route::get('/admin.nav/delnav', 'AdminController\AdminController@deletenav')->name('category.deleteNavbar');
Route::get('/admin.content/del','AdminController\AdminController@delcontent')->name('category.delcontent');

Route::get('/admin.content/delcontact','AdminController\AdminController@delcontactsec')->name('category.delcontactsec');
Route::get('/admin.content/showcont','AdminController\AdminController@showcontact')->name('category.showcontact');

