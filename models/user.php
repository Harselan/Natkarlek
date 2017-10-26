<?php
class User
{

    public static function get( $id )
    {
        $get = DB::getConnection()->prepare( "SELECT users.name, user_states.name AS state FROM users
                    INNER JOIN user_states ON user_states.id = users.state_id WHERE users.id = :id LIMIT 1" );
        $get->execute( array(
            ':id' => $id
        ) );

        return $get->fetchAll()[0];
    }

    public static function edit( $post, $id )
    {
        if( !check( $post, [ 'name' ] ) )
        {
            return false;
        }

        if( !check( $post, [ 'password' ] ) )
        {
            $update = DB::getConnection()->prepare( "UPDATE users SET name = :name WHERE id = :id" );
            $update->execute( array(
                ':name' => $post['name'],
                ':id'   => $id
            ) );
        }
        else
        {
            $update = DB::getConnection()->prepare( "UPDATE users SET name = :name, password = :password WHERE id = :id" );
            $update->execute( array(
                ':name'     => $post['name'],
                ':password' => password_hash( $post['password'], PASSWORD_DEFAULT ),
                ':id'       => $id
            ) );
        }

        return true;

    }

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
