<?php
  /* https://developers.facebook.com/tools/explorer */

  require_once __DIR__ . '/facebook-php-sdk-v4/src/Facebook/autoload.php';
  use Facebook\Facebook;
  session_start();

  /* Access_token en dur */
  /* Grâce à => https://graph.facebook.com/oauth/access_token?client_id=1515749448735803&client_secret=ff6315aacd534cbf4207abee23c9d917&grant_type=client_credentials&__mref=message */
  $access_token = '1515749448735803|9lo3d8vSeFpMS89jXcNXAixV6iY';

  $fb = new Facebook([
    'app_id' => '1515749448735803',
    'app_secret' => 'ff6315aacd534cbf4207abee23c9d917'
    ]);

  $response = $fb->get('/345473422330064?fields=attending_count', $access_token);
  $graphObject = $response->getGraphObject();

  /* On décode et on affiche */
  $json = json_decode($graphObject, true);
  $participants = $graphObject['attending_count'];
?>
