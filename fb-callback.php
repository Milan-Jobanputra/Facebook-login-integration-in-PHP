<?php 

try {
    $accessToken = $helper->getAccessToken();
    $response = $fb->get('/me?fields=id,name,email', $accessToken);
    $user = $response->getGraphUser();
    
    $facebook_id = $user->getId();
    $facebook_name = $user->getName();
    $facebook_email = $user->getEmail();
    
    // You can save user information to your database or do other actions here.
    
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // Handle errors from the API
    echo 'Graph returned an error: ' . $e->getMessage();
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // Handle errors in the SDK
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

?>