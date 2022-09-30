<?php

session_start();
##### DB Configuration #####
$servername = "localhost";
$username = "root";
$password = "";
$db = "krayo";

##### Google App Configuration #####
$googleappid = "131581938677-cr7otneo1vjius87c1fpq0g34r8735vi.apps.googleusercontent.com"; 
$googleappsecret = "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"; 
$redirectURL = "http://localhost/googlephp/authenticate.php"; 

##### Create connection #####
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
##### Required Library #####
include_once 'src/Google/Google_Client.php';
include_once 'src/Google/contrib/Google_Oauth2Service.php';

$googleClient = new Google_Client();
$googleClient->setApplicationName('Krayo Test');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($googleClient);

?>