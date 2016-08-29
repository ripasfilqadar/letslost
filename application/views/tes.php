<?php
$fb = new Facebook\Facebook([
  'app_id' => '1021740361279032', // Replace {app-id} with your app id
  'app_secret' => 'ebde3cc4051bba4f000d213b0c3cefda',
  'default_graph_version' => 'v2.7',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>