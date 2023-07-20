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
    <body class="hello-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <div class="col-auto d-flex justify-content-center text-container" style="background-image: url('{{ asset($background_callout) }}');">
                        <h2 class="align-self-center pb-5">{{$text}}</h2>
                    </div>
                    <div class="col-8 offset-4 d-flex justify-content-end penguin-img-container">
                        <img class="w-50" src="{{asset($penguin_hi)}}" alt="" >
                    </div>
                </div>
            </div>
        </div>
       
    </body>
</html>