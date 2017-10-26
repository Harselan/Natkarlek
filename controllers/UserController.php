<?php

class UserController
{
    public function edit( $id = 0 )
    {
        if( $id == 0 )
        {
            $id = $_SESSION['user_id'];
        }

        User::edit( $_POST, $id );
        redirect( "/" );
    }
}

?>
