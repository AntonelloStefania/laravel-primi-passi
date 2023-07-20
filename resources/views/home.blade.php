<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
       <link rel="stylesheet" href="{{asset('style.css')}}">

      
    </head>
    <body class="home-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="col-12 d-flex justify-content-center my-5">
                        <h1>{{$title}}</h1>
                    </div>
                    <div class="col-8 offset-2 d-flex justify-content-between">
                        <div class="align-self-center me-5">
                            <button type="submit" class="btn btn-danger mb-2"><a href="/not-hello">Non ricambiare</a></button>
                        </div>
                        <img class="w-50" src="{{asset($earth_img)}}" alt="">
                        <div class="align-self-center ms-5">
                            <button type="submit" class="btn btn-success mb-2"><a href="/hello">Ricambia saluto</a></button>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
       
    </body>
</html>
