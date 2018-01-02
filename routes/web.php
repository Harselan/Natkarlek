<?php
Route::get( '/',                     'DashboardController@main' );
Route::post( '/',                    'LoginController@doLogin' );

Route::get( '/logout',               'LoginController@logout' );

if( isset( $_SESSION['user_id'] ) )
{
    Route::post( '/message/add',         'MessageController@create' );
    Route::post( '/profile/edit',        'UserController@edit' );

    Route::get( '/message/{id}/report',  'MessageController@report' );
    Route::get( '/message/{id}/delete',  'MessageController@delete' );
    Route::post( '/get/inbox',           'MessageController@get' );
}
?>
