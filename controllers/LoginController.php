<?php

class LoginController
{
    public function login()
    {
        view( 'login/view' );
    }

    public function doLogin()
    {
        User::login( $_POST );
        redirect( '/' );
    }

    public function logout()
    {
        User::logout();
        redirect( '/' );
    }
}

?>
