<?php
class DashboardController
{
    public function main()
    {
        view( 'dashboard/main', array(
            'messages' => Message::get(),
            'inbox' => Message::get_inbox( $_SESSION['user_id'] )
        ) );
    }
}
?>
