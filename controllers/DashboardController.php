<?php
class DashboardController
{
    public function main()
    {
        view( 'dashboard/main', array(
            'messages'  => Message::get(),
            'inbox'     => Message::get_inbox( $_SESSION['user_id'] ),
            'profile'   => User::get( $_SESSION['user_id'] )
        ) );
    }

    public function admin()
    {
        view( 'dashboard/admin', array(
            'reports' => Report::get(),
            'users'   => User::get()
        ) );
    }
}
?>
