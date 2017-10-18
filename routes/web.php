<?php
Route::get('/',                                         'DashboardController@main');
Route::get('/logout',                                   'LoginController@logout');
?>
