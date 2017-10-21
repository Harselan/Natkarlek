<?php

if( User::loggedIn() )
{
    Route::get('/',             'DashboardController@main');
    Route::get('/logout',       'LoginController@logout');

    Route::post('/message/add',  'MessageController@create');
}
else
{
    Route::get('/',             'LoginController@login');
    Route::post('/',            'LoginController@doLogin');
}
?>
