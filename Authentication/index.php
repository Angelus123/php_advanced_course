<?php
$message="";

if(count($_POST)>0) {
// $user_name = $_POST["userName"];
// $password = $_POST["password"];
$pdo = require_once 'database.php';
	// $conn = mysqli_connect("localhost","iz","cri11ern","payload");
    // $statement = $pdo->prepare('SELECT * FROM home_card ORDER BY created_date DESC');
    $stmt = $pdo->prepare("SELECT * FROM users WHERE userName = ?");
    $stmt->execute([$_POST['userName']]);
    $user = $stmt->fetch();
    echo var_dump($user['password']) . "<br>";
    // die();
    if ( $_POST['password']== $user['password'])
    {
        echo "valid!";
    } else {
        echo "invalid";
    }
  
    
   
    $count  = mysqli_num_rows($result);

	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./asset/image/logo.png" />
    <title>Home|RCC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet"
    href="style.css">
</head>

<body>
    <h1>Hello World </h1>
</body>
</html>
