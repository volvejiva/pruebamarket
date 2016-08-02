<?php
require __DIR__ . "/configuracion.php";

    if(!session_id()) {
        session_start();
    }

    $fb = new Facebook\Facebook([
        'app_id' => '614112695431994',
        'app_secret' => 'd771a55ef3da8e19cece11768a774cba',
        'default_graph_version' => 'v2.6',
    ]);

    $response = $fb->get('/me', $_SESSION['facebook_access_token']);
    $me = $response->getGraphUser();
    
    echo 'Nombre: ' . $me['name'];
    echo '                     ';
    echo 'ID: ' . $me['id'];
?>