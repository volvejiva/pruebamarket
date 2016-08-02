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
  try {
    $accessToken = $helper->getAccessToken();
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }
  
  if (isset($accessToken)) {
    // Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;
  
    $response = $fb->get('/me', $_SESSION['facebook_access_token']);
    $me = $response->getGraphUser();
    
    $repositorioPersona=$entityManager->getRepository('Persona');
    $persona = $repositorioPersona->findOneByFacebookId($me->getId());
    
    if ($persona != null) {
        // Actualizar Persona con el nuevo Token
        $persona->setFacebookAccessToken($_SESSION['facebook_access_token']);
    } else {
        // Crear Persona
        $persona = new Persona();
        $persona->setFacebookId($me->getId());
        $persona->setFacebookAccessToken($_SESSION['facebook_access_token']);
        $persona->setNombre($me->getName());
        $persona->setAvatar("faltaría!!!");
    }
    
    $entityManager->persist($persona);
    $entityManager->flush();
  
    // Now you can redirect to another page and use the
    // access token from $_SESSION['facebook_access_token']
  }
?>