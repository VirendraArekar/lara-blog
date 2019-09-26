Its a beginner BLog Sample
  Tested On
  . Laravel 5.6
  . PHP 7.2.1
  . Mysql 5.7
  . XAMPP 

Procedure 
  .Create Database
  .Cange database setting and another useful setting in .env file
  .Browse your project folder and run
      php artisan migration

      .thats command will create the all neccessary database table.
   .Browse Your Project
   .Enjoy

 Routing for browsing Blog

    Route::get('/blog','BlogController@index');
	Route::get('/blog/create','BlogController@create');
	Route::post('/blog/store','BlogController@store');
	Route::get('/blog/{id}','BlogController@show');
	Route::get('/blog/{id}/edit','BlogController@edit');
	Route::patch('/blog/{id}','BlogController@update');
	Route::delete('/blog/{id}/delete' ,'BlogController@destroy');

