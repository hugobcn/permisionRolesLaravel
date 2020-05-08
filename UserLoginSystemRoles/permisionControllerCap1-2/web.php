routes/

Route::resource('/admin/users','Admin\UsersController',['except'=>['show','create','store']]);
