<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <div class="container">
        <center>
            <img src="/image/maintain.png">
            <h1>Website under maintainance</h1>
            <p>Our website is currently undergoing maintainance. We should be back shortly. Thank you for your patience.</p>
        </center>
        
    </div>
    <section>
        <div class="row">
            <div class="col-md-6 m-auto container2">
               <form action="" method="POST">
                   <label for="fullname">Full name</label>
                   <input type="text" placeholder="enter your fullname" name="fullname" class="form-control">
                   <label for="email">Email</label>
                   <input type="email" placeholder="enter your email" name="email" class="form-control">
                   <label>Abou Us</label>
                   <textarea cols="20" rows="10" class="form-control"></textarea>
                   <button type="submit" name="submit">Contact Us</button>
               </form>               
            </div>
        </div>
    </section>
</body>
</html>
