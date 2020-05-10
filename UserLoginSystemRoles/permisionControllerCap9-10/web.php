routes/


   //agrupar lista controladores 
//->middleware('can:manage-users')  solo permirtie acceso a admin y author (provider AuthService
  Route::prefix('')->namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show','create','store']]);
});
