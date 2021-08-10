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

Route::get('/',function () {
	if(Auth::check()){
		return view('ck');
	}else{
		return redirect('/login');
	}
	
});


Route::get('/tintuc',function(){
	return view('tintuc');
});
Route::get('/login','logincontroller@getlogin')->name('login');

Route::post('/login','logincontroller@postlogin');
Route::get('/logout','logincontroller@logout')->name('logout');

Route::group(['prefix'=>'/admin', 'as' => 'admin','middleware' => 'auth'],function(){
	Route::get('/',function(){
		return view('postmanager');
	});
	route::get('/upload',function (){
	return view('upload');
})->middleware('auth');
	Route::post('/upload','uploadcontroller@postupload');
	Route::get('/deletepost','uploadcontroller@delete');
	Route::get('/updatepost','uploadcontroller@getupdate');
	Route::post('/updatepost','uploadcontroller@update');
	Route::get('/postmanager',function(){
		return view ('/postmanager');
	});
	Route::post('/newcategory','uploadcontroller@newcategory');
	Route::get('/newcategory',function(){
		return view ('newcategory');
	});
	Route::get('/uploadidol',function(){
		return view ('uploadidol');
	});
	Route::post('/uploadidol','uploadcontroller@uploadidol');
});
Route::get('vote','votecontroller@vote');
Route::get('/myvote',function(){
		return view('myvote');
});