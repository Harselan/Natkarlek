<?php
Route::get( '/',                     'DashboardController@main' );
Route::post( '/',                    'LoginController@doLogin' );

Route::get( '/logout',               'LoginController@logout' );

Route::post( '/message/add',         'MessageController@create' );
Route::post( '/profile/edit',        'UserController@edit' );

Route::get( '/message/{id}/report',  'MessageController@report' );
Route::get( '/message/{id}/delete',  'MessageController@delete' );

$state = User::get( $_SESSION['user_id'] )['state_id'];

if( $state == 2 || $state == 1 )
{
    Route::get( '/admin',           'DashboardController@admin' );
}
?>
