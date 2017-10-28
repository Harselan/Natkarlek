<?php
class MessageController
{
    public function create()
    {
        Message::create( $_POST );
        redirect("/");
    }
}
?>
