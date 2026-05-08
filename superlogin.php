<?php

session_start();

$nameError = $passError = $name = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    if(empty($name)){
        $nameError = "please enter your name";
    }else if(preg_match("/^[A-Z][9-0]$/",$name)){
        $nameError = "your name must contain uppercase character and ended with digitals nubmer";
    }

    if(empty($pass)){
        $passError = "please enter your password";
    }else if(strlen($pass) < 3){
        $passError = "your password is very week sir , you must write very strong and safe password";
    }else if(preg_match("/^[9-0].*[A-Z]$/",$pass)){
        $passError = "the pass worrd must contain all uppercase characters and digitals numbers";
    }



    if(empty($nameError) && empty($passError)){
        if($name == "Superking9000" && $pass == "1234Super")
        {
            $_SESSION['name_login'] = $name;
            $_SESSION['pass_login'] = $pass;
            header("location: superDragon.php");

        }else{
            $_SESSION['message'] = "your account is not in DataBase";
        }
    }

   
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10">

                <h1>Super Admin Login</h1>
            
                <form action="superlogin.php" method="post">
                    <input type="text" value="<?php echo $nameError; ?>" name="name" placeholder="name" class="form-control text-center">
                    <h5 class="text-center text-danger">
                        <?php echo $nameError; ?>
                    </h5>
                    <input type="password" value="<?php echo $passError ?>" name="pass" placeholder="pass" class="form-control text-center">
                    <h5 class="text-center text-danger">
                        <?php echo $passError; ?>
                    </h5>
                    <input type="submit" value="login" class="btn btn-success w-100">
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>