<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}} >
        
        <title>{{config('app.name', 'myapp')}}</title>
    </head>
    <body>
        @include('inc.navbar')<!-- get navbar php file from inc/ -->
        <div class="container">
            @yield('content')
        </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
