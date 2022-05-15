<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: index');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VS AV Club</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" media="only screen and (max-width: 500px)" href="homepageformobile.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#000000">
</head>

<body>

  <div class="notcontainer">
    <div class="logoutfunc">
      <i class="fas fa-sign-out-alt"></i>
      <a class="logout" href="./logout">Logout</a>
    </div>
  </div>

  <div class="avlogo"></div>
  <div class="headerattop">Victoria School Audio-Video Club</div>

  <div class="container">

    <div class="container1">
      <div class="box"></div>
      <p class="headerforsections">documents</p>
      <a class="sectiontext text1" href="" target="_blank">Training</a>
      <a class="sectiontext text2" href="" target="_blank">Videos</a>
      <a class="sectiontext text3" href="" target="_blank">SOP</a>
      <a class="sectiontext text4" href="" target="_blank">Inventory</a>
    </div>

    <div class="container2">
      <div class="box"></div>
      <p class="headerforsections">events</p>
      <a class="sectiontext text1" href="https://bit.ly/vasavclubchoir" target="_blank">Choir</a>
      <a class="sectiontext text2" href="https://bit.ly/vsavclubco" target="_blank">Chinese Orchestra</a>
      <a class="sectiontext text3" href="http://bit.ly/vsavclubcb" target="_blank">Concert Band</a>
      <a class="sectiontext text4" href="https://bit.ly/vsavclubdrama" target="_blank">Drama</a>
    </div>

    <div class="container3">
      <div class="box"></div>
      <p class="headerforsections admin">Administration</p>
      <a class="sectiontext righttext1" href="https://bit.ly/3jV1YCu" target="_blank">Reporting Sick</a>
      <div class="sectiontext righttext2">Portfolio</div>
      <a class="sectiontext righttext3" href="https://bit.ly/3yC3BsM" target="_blank">Requests</a>
    </div>

  </div>

</body>

</html>