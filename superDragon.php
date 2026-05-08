<?php
session_start();

if(isset($_SESSION["name_login"]) && isset($_SESSION["pass_login"])){
    echo $_SESSION['name_login'] . "<br>";
    echo $_SESSION['pass_login'];
    echo "<a href='superlogout.php'>Logout</a>";

}else{
    header("location:superlogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to super dragon big php project</h1>
    <script src="/js/main.js"></script>
</body>
</html>
