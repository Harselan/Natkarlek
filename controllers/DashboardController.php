<?php
class DashboardController
{
    public function main()
    {
        view( 'dashboard/main' );
    }

    public function search()
    {
        view( 'search/view', array(
            'data'      => Search::do( $_POST ),
            'search'    => $_POST['search']
        ) );
    }
}
?>
