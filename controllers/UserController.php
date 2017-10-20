<?php

class UserController
{
    public function login()
    {
        view( 'user/login' );
    }

    public function doLogin()
    {
        if( !User::login( $_POST ) )
        {
            view( 'user/login', array(
                'error' => 1,
                'message' => "Användarnamnet eller lösenordet är fel!"
            )  );
        }
        else
        {
            view( 'dashboard/main' );
        }
    }

    public function logout()
    {
        User::logout();
        redirect('/');
    }
}

?>
