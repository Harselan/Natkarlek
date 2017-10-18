<?php
class User
{
    public static function get( $id = 0 )
    {
        if( $id == 0)
        {
            $get = DB::getConnection()->prepare("SELECT users.*, user_states.state FROM users INNER JOIN user_states ON users.state_id = user_states.id ORDER BY users.name ");
            if( ! $get->execute() ) {
                die(var_export(DB::getConnection()->errorinfo(), TRUE));
            }
            return $get->fetchAll();
        }
        else
        {
            $get = DB::getConnection()->prepare("SELECT users.*, user_states.state FROM users INNER JOIN user_states ON users.state_id = user_states.id WHERE users.id = :id LIMIT 1");
            if( ! $get->execute( array( ':id' => $id ) ) ) {
                die(var_export(DB::getConnection()->errorinfo(), TRUE));
            }
            return $get->fetchAll()[0];
        }
    }
}
?>
