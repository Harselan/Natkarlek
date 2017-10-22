<?php

if( User::loggedIn() )
{
    Route::get('/',                     'DashboardController@main');
    Route::get('/logout',               'LoginController@logout');

    Route::post('/message/add',         'MessageController@create');

    Route::get('/comment/{id}/add',     'MessageController@createComment');
    Route::post('/comment/{id}/add',    'MessageController@doCreateComment');
}
else
{
    Route::get('/',             'LoginController@login');
    Route::post('/',            'LoginController@doLogin');
}
?>
