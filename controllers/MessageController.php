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
}
?>
