<?php
class Report
{
    public static function do( $id, $reason = 0 )
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
            $insert = DB::getConnection()->prepare( "INSERT INTO reports (message_id, user_id, reported) VALUES (:message_id, :user_id, :reported)" );
            $insert->execute( array(
                ':message_id' => $result['id'],
                ':user_id'    => $result['user_id'],
                ':reported'   => time()
            ) );

            $update = DB::getConnection()->prepare( "UPDATE inbox SET reported = :reported WHERE id = :id" );
            $update->execute( array(
                ':reported' => true,
                ':id'       => $id
            ) );
        }
    }

    public static function get( $id = 0 )
    {
        if( $id == 0 )
        {
            $get = DB::getConnection()->prepare( "SELECT reports.id AS id, messages.text AS message, messages.user_id AS sender, reports.user_id AS receiver, reports.reported FROM reports
                                                INNER JOIN messages ON messages.id = reports.message_id
                                                INNER JOIN users ON users.id = reports.user_id
                                                GROUP BY id DESC" );
            $get->execute();
            
            return $get->fetchAll();
        }
    }
}
?>
