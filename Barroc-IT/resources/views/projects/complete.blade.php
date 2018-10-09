<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Development</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/development.css')?>" type="text/css">

    <!-- Styles -->

</head>
<body>
<h1>Barroc-IT</h1>
<h2>Development</h2>
<div class="dev_menu open">
    <div><a href="{{route('project.index')}}"><button class="back_button">Back</button></a></div>
    <h2>Complete Project</h2>
    <p>Project Name:</p><p>Buyer:</p><p>Project Status:</p>
</div>
</body>
</html>