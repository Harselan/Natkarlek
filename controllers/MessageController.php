<?php
class MessageController
{
    public function create()
    {

        if( !Message::create( $_POST ) )
        {
            view( 'dashboard/main', array(
                'error' => 1,
                'message' => 'Någonting gick fel med skapandet av meddelandet'
            ) );
        }
        else
        {
            view( 'dashboard/main', array(
                'success' => 1,
                'message' => 'Gratulerar du har nu spridit kärleken'
            ) );
        }
    }

    public function createComment( $postId )
    {
        view( 'comment/view', array(
            'post' => $postId
        ) );
    }

    public function doCreateComment( $postId )
    {
        if( !Message::create_comment( $_POST, $postId ) )
        {
            view( 'comment/view', array(
                'post'      => $postId,
                'error'     => 1,
                'message'   => "Någonting gick fel med skapandet av kommentar"
            ) );
        }
        else
        {
            view( 'dashboard/main', array(
                'success' => 1,
                'message' => 'Gratulerar du har nu spridit kärleken'
            ) );
        }
    }
}
?>
