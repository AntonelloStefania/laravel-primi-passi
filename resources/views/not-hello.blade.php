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
        <style>
            .not-hello-body {
                background-color: #a2a2ff;
                padding-top: 5rem;

            }

            .penguin-back-container {
                width: 400px;
                margin-left: 25rem;
            }

            .penguin-farewell-container {
                background-repeat: no-repeat;
                background-size: cover;
                width: 20rem;
                height: 17rem;
                margin-left: 35rem;
            }

            .earth-container {
                min-width: 900px;
            }

            .back{
                position: absolute;
                top: 3rem;
                right: 3rem;
            }
        </style>
      
    </head>
    <body class="not-hello-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class=" d-flex justify-content-center align-items-center penguin-farewell-container" style="background-image: url('{{ asset($left_callout) }}');">
                        <h4 class="pb-4">{{$text}}</h4>
                    </div>
                    <div class=" d-flex justify-content-start penguin-back-container">
                        <img class="w-50" src="{{asset($penguin_back)}}" alt="" >
                    </div>
                    <div class="d-flex justify-content-end earth-container">
                        <img class="w-50" src="{{asset($earth_img)}}" alt="" >
                    </div>
                </div>
            </div>
            <div class="back">
                <a href="/"><button type="submit" class="btn btn-danger mb-2 fw-bold text-white">Home</button></a>
            </div>
        </div>
    </body>
</html>