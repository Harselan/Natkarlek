<?php

class LoginController
{
    public function login()
    {
        view( 'login/view' );
    }

    public function doLogin()
    {
        if( !User::login( $_POST ) )
        {
            view( 'login/view', array(
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
