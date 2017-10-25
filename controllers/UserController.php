<?php

class UserController
{
    public function view( $id = 0 )
    {
        if( $id == 0 )
        {
            $id = $_SESSION['user_id'];
        }

        view( 'dashboard/view', array(
            'data' => User::get( $id )
        ) );
    }
}

?>
