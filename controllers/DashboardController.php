<?php
class DashboardController
{
    public function main()
    {
        view( 'dashboard/main', array(
            'messages' => Message::get()
        ) );
    }
}
?>
