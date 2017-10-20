<?php

if( User::loggedIn() )
{
    Route::get('/',         'DashboardController@main');
    Route::get('/logout',   'UserController@logout');
}
else
{
    Route::get('/',         'UserController@login');
    Route::post('/',        'UserController@doLogin');
}
?>
