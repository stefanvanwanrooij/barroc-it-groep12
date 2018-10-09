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
    <h2>Open Projects</h2>
    <h3>Project Name:</h3> <h3>Buyer:</h3> <h3>Project Status:</h3>
        <ul>
            @foreach($projects as $project)
                <div  class="wrapper">
                    <li><div class="grid-column-1"><p class="block">{{$project->project_name}}</p></div></li>
                    <li><div class="grid-column-2"><p class="block">{{$project->buyer}}</p></div></li>
                    <li><div class="grid-column-3"><p class="block">{{$project->project_status}}</p></div></li>
                </div>
            @endforeach
        </ul>
</div>
</body>
</html>