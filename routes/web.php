<?php



Route::get('/', function () {
    return view('fristpage');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/insert-post', 'PostController@Store');
Route::get('delete-post/{id}', 'PostController@Delete');
Route::get('edit-post/{id}', 'PostController@Edit');
Route::post('update-post/{id}', 'PostController@Update');

Route::get('/all-post', 'PostController@AllPost')->name('all.posts');


Route::get('/password-change','HomeController@Password')->name('password.change');
Route::post('/update-pass','HomeController@UpdatePass');

Route::get('/news-add','PostController@News')->name('news.add');
Route::get('/all-news','PostController@NewsAll')->name('all.news');


Route::post('/insert-news','PostController@IsertNews');
Route::get('delete-news/{id}','PostController@DeleteNews');

Route::get('/view-post/{id}','NewsController@Viewpost');


