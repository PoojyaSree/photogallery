<?php








Route::get('/','GalleryController@index');
Route::resource('gallery', 'GalleryController');

Route::resource('photo', 'PhotoController');
Route::resource('gallery', 'GalleryController');

Route::get('/gallery/show/{id}', 'GalleryController@show');






Route::group(['middleware' => ['web']],function(){
    

}); 

Route::middleware(['web', 'subscribed'])->group(function () {
    //
});