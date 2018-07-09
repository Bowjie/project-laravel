<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name', 'Laravel | Home')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" />
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    @include('layouts.nav')
    <div class="container">  
         @yield('content')
        </div>
    
</body>
</html>
</html>