<!DOCTYPE HTML>
<html>
<head><title>Login</title></head>
<body>

<?php

if (isset($_POST['Login'])){ 
    $username = $_POST['username']; //input username dimasukkan dalam $username
    $passwd = $_POST['password']; //input password dimasukkan dalam $passwd
    // validasi kondisi $username dan $passwd 
	if($username == "egagefrie" && $passwd == "admin") { //jika $username = egagefrie dan $passwd = admin  
        echo "<h3>Welcome $user..</h3>"; //muncul pesan
    } else { //kondisi lain
        echo "<h3>Your username or password is wrong <br> please try again! </br></h3>"; //muncul pesan
    } 
	} 
?>

</body>
</html>