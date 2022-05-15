<html lang="en">

<head>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
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
	<a href="index.html">← Go Back</a>

	<?php
	session_start();
	$DATABASE_HOST = '';
	$DATABASE_USER = '';
	$DATABASE_PASS = '';
	$DATABASE_NAME = '';

	$profpic = "assets/uh-oh.jpg";

	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
	if (mysqli_connect_errno()) {
		exit('Failed to connect to MySQL:' . mysqli_connect_error());
	}

	if (!isset($_POST['username'], $_POST['password'])) {
		exit('Please fill both the username and password fields!');
	}

	if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?'))
		$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);
		$stmt->fetch();

		if ($_POST['password'] === $password) {
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			header('Location: homepage');
		} else {
			echo "<script>alert('Incorrect username and/or password!');</script>";
		}
	} else {
		echo "<script>
	alert('Incorrect username and/or password!');
	</script>";
	}

	$stmt->close();
	?>

</body>

<style type="text/css">
	body {
		background-image: url('<?php echo $profpic; ?>');
		background-repeat: no-repeat;
		background-size: cover;
	}

	a {

		width: 200px;
		height: 100px;
		text-align: center;
		color: white;
		margin-top: 50vh;
		margin-left: 50vw;
		font-size: 60px;
		font-family: 'Poppins'
	}
</style>

</html>