<?php

class Message
{
    public static function get( $id = 0 )
    {
        return true;
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

    public static function create_comment( $post, $postId )
    {
        $indexes = [ 'comment' ];

        if( !check( $post, $indexes ) )
        {
            return false;
        }

        $create = DB::getConnection()->prepare( "INSERT INTO comments (user_id, message_id, text) VALUES (:user_id, :message_id, :text)" );
        $create->execute( array(
            ':user_id'      => $_SESSION['user_id'],
            ':message_id'   => $postId,
            ':text'         => $post['comment']
        ) );

        return DB::getConnection()->lastInsertId();
    }
}

?>
