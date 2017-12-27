<?php
Route::get( '/',                     'DashboardController@main' );
Route::post( '/',                    'LoginController@doLogin' );

Route::get( '/logout',               'LoginController@logout' );

Route::post( '/message/add',         'MessageController@create' );
Route::post( '/profile/edit',        'UserController@edit' );

Route::get( '/message/{id}/report',  'MessageController@report' );

?>
