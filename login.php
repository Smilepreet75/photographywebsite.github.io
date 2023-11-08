<?php 
 session_start();

 include("db.php");
 if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    $password = $_POST['pass'];
    if(!empty($mail) && !empty($password) &&!is_numeric($mail)){
        $query  = "select * from form where name = '$name' limit 1";
        $result = mysqli_query($con,$query);

        if($result){
            if($result && mysuli_num_row($result)>0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['pass']==$password){
                    header("loaction: intro.php");
                    die;
                }
            }
        }
        echo"<script type='text/javascript' alert('wrong name or password')</script>";
    }
    else{
        echo"<script type='text/javascript' alert('wrong name or password')</script>";
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login the page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utili.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet"  href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container1 mx-auto"  >
   <header style="background-color: #01133b; height: 25%;">
    <nav class="flex justify-between">
        <div class=" navbar items-center flex">
            <img class="logo" src="/Hannah (1).png" alt="photo">
            <p class="font-color" ><b>Next Step</b>
            </p>
        </div>
        <ul class="navbar flex items-center" style="color: white;">
            <li><a href="intro.php" class="width">Home</a></li>

            
            <li><a href="login.php" class="width">Login</a></li>
            <li><a href="signup.php" class="width">Signup</a></li>
            <li><a href="login.php" class="width">logout</a></li>

           
        </ul>
    </nav>
</header>
<div>
 <main class="min-h-screen" style="background-image: url(/pic2.jpg); background-size: cover;">
    <div class="loginpg">
        <span class="borderline"></span>
    <form  method="POST">
        <h2 >Login</h2><br><br>
        <div class="inputbox">
        <label class="color">Username: </label>
        <br>
        <input type="text" placeholder="Enter your username" name =" name"required><br>
        </div>
        <div class="inputbox">
        <label class="color">Password: </label>
        <input type="password" placeholder="Enter your password" name="pass" required><br>
        </div>

        <div class="links">
            <a href="#">Forget Password</a>
            <a href="signup.php">Signup</a>
        </div><br><br>
        <input type="submit" value="Login" >
    </form>
    </div>

</main>
</div>
</div>

</body>
</html>