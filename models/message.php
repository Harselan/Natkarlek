<?php

class Message
{
    public static function get( $id = 0 )
    {
        return true;
    }

    public static function get_inbox( $user_id )
    {
        $get = DB::getConnection()->prepare( "SELECT messages.id, messages.text, inbox.reported, inbox.id AS inbox_id FROM inbox
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
        while( $receiver == $_SESSION['user_id'] || $receiver == 0 );

        $create = DB::getConnection()->prepare( "INSERT INTO inbox (user_id, message_id) VALUES (:user_id, :message_id)" );
        $create->execute( array(
            ':user_id' => $receiver,
            ':message_id' => $id
        ) );

        return $id;
    }

    public static function report( $id, $reason = 0 )
    {
        $get = DB::getConnection()->prepare( "SELECT messages.user_id, inbox.message_id AS id FROM inbox
                INNER JOIN messages ON messages.id = inbox.message_id
                WHERE inbox.id = :id LIMIT 1" );
        $get->execute( array(
            ':id' => $id
        ) );

        $result = $get->fetchAll()[0];

        if( $reason == 0 )
        {
            $insert = DB::getConnection()->prepare( "INSERT INTO reports (message_id, user_id) VALUES (:message_id, :user_id)" );
            $insert->execute( array(
                ':message_id' => $result['id'],
                ':user_id'    => $result['user_id']
            ) );

            $update = DB::getConnection()->prepare( "UPDATE inbox SET reported = :reported WHERE id = :id" );
            $update->execute( array(
                ':reported' => true,
                ':id'       => $id
            ) );
        }
    }

    public static function delete( $id )
    {
        $delete = DB::getConnection()->prepare( "DELETE FROM inbox WHERE id = :id" );
        $delete->execute( array(
            ':id' => $id
        ) );

        return true;
    }
}

?>
