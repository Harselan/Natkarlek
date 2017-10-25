<?php

if( User::loggedIn() )
{
    Route::get('/',                     'DashboardController@main');
    Route::get('/logout',               'LoginController@logout');

    Route::post('/message/add',         'MessageController@create');
    Route::get('/profile',              'UserController@view');
}
else
{
    Route::get('/',                     'LoginController@login');
    Route::post('/',                    'LoginController@doLogin');
}
?>
