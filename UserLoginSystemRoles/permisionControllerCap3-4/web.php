routes/

//sin agrupar
//Route::resource('/admin/users','Admin\UsersController',['except'=>['show','create','store']]);

 //agrupar lista controladores        
  Route::prefix('')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show','create','store']]);
});
