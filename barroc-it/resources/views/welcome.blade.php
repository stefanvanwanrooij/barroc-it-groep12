<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">


        <title>Laravel</title>

    </head>
    <body>
    <div class="container">

        <div class="top">
            <h1>Login</h1>
            <hr class="line">

        </div>

        <form action="" name="login">

<input type="text" name="Username" placeholder="Username">
<input type="text" name="Password" placeholder="Password">
            <br>
        <input type="checkbox" name="ShowPassword">
        <input type="checkbox" name="StayLoggedIn">
            <input type="submit">
        </form>

    </div>




    </body>
</html>
