<?php
use Illuminate\Support\Facades\Route;
Route::get('/test', function () {
    return App\Profile::find(1)->user;
});



Route::get('/',  [
     'uses' => 'FrontEndController@index',
     'as' => 'index'
]);

Route::get('/results', function(){
  $posts = \App\Post::where('title','like', '%' . request('query') . '%')->get();
  return view('results')->with('posts',$posts)
  ->with('title','Search results: ' .  request('query'))
  ->with('setting', \App\Setting::first())
  ->with('categories', \App\Category::take(5)->get())
  ->with('query', request('query'));
});

Route::get('/post/{slug}',  [
     'uses' => 'FrontEndController@singlePost',
     'as' => 'post.single'
]);

Route::get('/category/{id}',[
  'uses' => 'FrontEndController@category',
  'as'   => 'category.single'
]);

Route::get('/tag/{id}',[
  'uses' => 'FrontEndController@tag',
  'as'   => 'tag.single'
]);

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/home',[
        'uses' =>  'HomeController@index',
        'as' => 'home'
    ]);


    Route::get('/post/create', [
        'uses' => 'PostController@create',
        'as' => 'post.create'
    ]);

    Route::post('/post/store', [
        'uses' => 'PostController@store',
        'as' => 'post.store'
    ]);
    Route::get('/post/delete/{id}', [
        'uses' => 'PostController@destroy',
        'as' => 'post.delete'
    ]);
    Route::get('/posts', [
        'uses' => 'PostController@index',
        'as' => 'posts'
    ]);
    Route::get('/posts/trashed', [
        'uses' => 'PostController@trashed',
        'as' => 'posts.trashed'
    ]);
    Route::get('/posts/kill/{id}', [
        'uses' => 'PostController@kill',
        'as' => 'post.kill'
    ]);
    Route::get('/posts/restore/{id}', [
        'uses' => 'PostController@restore',
        'as' => 'post.restore'
    ]);
    Route::get('/posts/edit/{id}', [
        'uses' => 'PostController@edit',
        'as' => 'post.edit'
    ]);
    Route::post('/posts/update/{id}', [
        'uses' => 'PostController@update',
        'as' => 'post.update'
    ]);
    Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);
    Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);

    Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);

    Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

    Route::get('/category/delete/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);

    Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);


    Route::get('/tags',[
       'uses' => 'TagsController@index',
       'as' => 'tags'
    ]);
    Route::get('/tag/edit/{id}',[
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
     ]);
     Route::get('/tag/create/',[
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
     ]);
     Route::post('/tag/store/',[
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
     ]);
     Route::post('/tag/update/{id}',[
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
     ]);
     Route::get('/tag/delete/{id}',[
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
     ]);

     Route::get('/users', [
      'uses' => 'UsersController@index',
      'as' => 'users'
     ]);
     Route::get('/user/create', [
        'uses' => 'UsersController@create',
        'as' => 'user.create'
       ]);
       Route::post('/user/store', [
        'uses' => 'UsersController@store',
        'as' => 'user.store'
       ]);
       Route::get('/user/admin/{id}', [
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
       ]);
       Route::get('/user/not-admin/{id}', [
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not.admin'
       ]);
       Route::get('/user/profile', [
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
       ]);
       Route::get('/user/delete{id}', [
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
       ]);
       Route::post('/user/profile/update', [
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
       ]);

       Route::get('/settings', [
        'uses' => 'SettingsController@index',
        'as' => 'settings'
       ]);
       Route::post('/settings/update', [
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
       ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
