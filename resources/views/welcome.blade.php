<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ABC company</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <style>
            body {
                font-family: 'poppins', sans-serif;
            }
        </style>
    </head>
    <body>

           <div class="container">
            <div class="text-center mt-5">
                <div class="jumbotron">
                    <h1>Product Managment System</h1>
                    <p>ABC company</p>
                </div>
                <div>
                    @if (Route::has('login'))
                        <div >
                            @auth
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif


                </div>
            </div>
           </div>


        <!-- Bootstrap js file -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>
</html>
