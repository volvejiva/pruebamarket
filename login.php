<?php
require __DIR__ . "/configuracion.php";

    if(!session_id()) {
        session_start();
    }

    $fb = new Facebook\Facebook([
        'app_id' => '614112695431994',
        'app_secret' => 'd771a55ef3da8e19cece11768a774cba',
        'default_graph_version' => 'v2.5',
    ]);

    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email', 'user_likes']; // optional
    $loginUrl = $helper->getLoginUrl('https://steleokontos-volvejiva.c9users.io/semana5/login-callback.php', $permissions);
    
    echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

?>