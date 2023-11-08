<?php
 include('db.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-learning</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utili.css">
    <link rel="stylesheet"  href="desing.css">
    <link rel="stylesheet"  href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="">
</head>
<body>
     
   <!--<form action="form.ping">-->
    <div class="container1 mx-auto"  >
       
       <header style="background-color: #01133b; height: 25%;">
        <nav class="flex justify-between">
            <div class=" navbar items-center flex">
                <img class="logo" src="/Hannah (1).png" alt="photo">
                <p class="font-color" ><b>Nature's</b>
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
       
       <main class="min-h-screen" style="background-image: url(/naturephot-ec32e94608f809e.webp); background-size: cover;">
        <section class="section1">
        <div class="flex">
        <div class="topleft flex justify-center flex-col px-1" style="text-align: center ;color: black;">
            <p class="my-1" style="font-size: x-large;color: black; font-size: 3rem; font-weight: normal; ">Welcome to our photography</p>
            <p>Here you can saw realistic scenes of nature in variable color and shades. you can join us by just with signup.</p> 
           
        </div>
        <div class="topright"></div>
        </div>
        <div class="latter">
            <form>
                <input type="email" placeholder="Write Your Email" required>
                <input type="submit" value="Let's Start" required>
            </form>
        </div>
    </section>
    
      
    </main>
    <div class="containers" style="background-color: #01133b;">
      <div class="item" ><img src="/img1.jpg" height="500px" width="492px"></div>
      <div class="item"><img src="/pho2.jpg" height="500px" width="492px"></div>
      <div class="item"><img src="/img3.jpg" height="500px" width="492px"></div>
      <div class="item"><img src="/ph4.jfif" height="500px" width="492px"></div>
      <div class="item"><img src="/img5.jpg" height="500px" width="492px"></div>
      <div class="item"><img src="/img6.jpg" height="500px" width="492px"></div>
      <div class="item"><img src="/ph7.jpg" height="500px" width="492px"></div>
      <div class="item"><img src="/ph8.jpg" height="500px" width="492px"></div>
      <div class="item"><img src="/ph9.jfif" height="500px" width="492px"></div>
    </div>
      
    </div>
   <!--</form>-->
</body>
</html>