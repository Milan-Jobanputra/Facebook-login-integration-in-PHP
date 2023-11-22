<?php 

require_once 'Facebook/autoload.php'; // Path to the SDK
$fb = new Facebook\Facebook([
    'app_id' => 'YOUR_APP_ID',
    'app_secret' => 'YOUR_APP_SECRET',
    'default_graph_version' => 'v13.0', // Replace with the latest version
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Adjust the permissions your app requires
$loginUrl = $helper->getLoginUrl('http://yourwebsite.com/fb-callback.php', $permissions);

?>