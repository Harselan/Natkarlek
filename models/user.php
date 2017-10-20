<?php
class User
{
    public static function login( $post )
    {

        $get = DB::getConnection()->prepare( "SELECT id, password FROM users WHERE name = :name LIMIT 1" );
        $get->execute( array(
            ':name'     => $post['name']
        ) );
        $id = $get->fetchAll()[0];

        if( !isset( $id['id'] ) )
        {
            return false;
            die();
        }

        if( !password_verify( $post['password'], $id['password']  ) )
        {
            return false;
        }

        $_SESSION['user_name']    = $post['name'];
        $_SESSION['user_id']      = $id['id'];

        return true;
    }

    public static function logout()
    {
        session_destroy();
    }

    public static function loggedIn()
    {
        if( !isset( $_SESSION['user_name'] ) || !isset( $_SESSION['user_id'] ) )
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}
?>
