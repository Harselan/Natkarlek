<?php

class Message
{
    public static function get( $id = 0 )
    {
        return true;
    }

    public static function get_inbox( $user_id )
    {
        $get = DB::getConnection()->prepare("SELECT messages.id, messages.text FROM inbox
            INNER JOIN messages ON messages.id = inbox.message_id
            INNER JOIN users ON users.id = inbox.user_id
            WHERE users.id = :user_id");
        $get->execute( array(
            ':user_id' => $user_id
        ) );

        return $get->fetchAll();
    }

    public static function create( $post )
    {
        $indexes = [ 'text' ];
        if( !check( $post, $indexes ) )
        {
            return false;
        }

        $create = DB::getConnection()->prepare( "INSERT INTO messages (text, user_id) VALUES (:text, :user_id)" );
        $create->execute( array(
            ':text' => $post['text'],
            ':user_id' => $_SESSION['user_id']
        ) );

        return DB::getConnection()->lastInsertId();
    }
}

?>
