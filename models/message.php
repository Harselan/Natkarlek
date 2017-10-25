<?php

class Message
{
    public static function get( $id = 0 )
    {
        return true;
    }

    public static function get_inbox( $user_id )
    {
        $get = DB::getConnection()->prepare( "SELECT messages.id, messages.text FROM inbox
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

        $id = DB::getConnection()->lastInsertId();

        $amount = DB::getConnection()->prepare( "SELECT COUNT(id) AS amount FROM users" );
        $amount->execute();
        do
        {
            $receiver = rand( 1, $amount->fetchAll()[0]['amount'] );
        }
        while( $receiver == $_SESSION['user_id'] );

        $create = DB::getConnection()->prepare( "INSERT INTO inbox (user_id, message_id) VALUES (:user_id, :message_id)" );
        $create->execute( array(
            ':user_id' => $receiver,
            ':message_id' => $id
        ) );

        return $id;
    }
}

?>
