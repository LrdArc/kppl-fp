<?php
if ( $_POST && $me ) {
	$db->i( 'chat', 'epochtime,isi,uid,toid', array( time(), escape( $_POST['isi'] ), $me, $_POST['toid'] ) );
	header( 'Location: ' );
}

include( 'views/header.php' );

if ( ! $me ) header( 'Location: /login/' );
elseif ( $_csc->uri[2][0] == '+' ) include( 'views/chat_people.php' );
else include( 'views/chat_list.php' );

include( 'views/footer.php' );