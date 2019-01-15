<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">
    <style>
        .media-list p {
            margin: 0px;
        }

        .media-item:hover {
            text-decoration: none;
            font-weight: bolder;
        }

        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav>li>a,
        .navbar-inverse .navbar-text {
            color: #fff;
        }
        .collapse.in {
            background: unset;
        }
    </style>


</head>

<body>
    <div id="app">
        @include('layouts.navbar')

        @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $(".destroy").click(function(event){
            event.preventDefault()
            $.ajax({
                url: $(this).attr("href"),
                headers:{ "X-CSRF-TOKEN": "{{csrf_token()}}"},
                method: "DELETE",
                success: response => {
                    location.reload()
                }
            })
        })
    </script>

</body>

</html>