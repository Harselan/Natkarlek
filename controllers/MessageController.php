<?php
class MessageController
{
    public function create()
    {
        Message::create( $_POST );
        redirect( "/" );
    }

    public function report( $id )
    {
        Message::report( $id );
        redirect( "/" );
    }

    public function delete( $id )
    {
        Message::delete( $id );
        redirect( "/" );
    }

    public function get()
    {
        $result = Message::get_inbox( $_SESSION['user_id'] );
        echo json_encode( $result );
        die();
    }
}
?>
