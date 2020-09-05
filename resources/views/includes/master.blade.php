<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    	
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>
        Socialite - @yield('title')
    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">    
    <link rel="stylesheet" href="{{ url('css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">    
    <link rel="stylesheet" href="{{ url('css/main.css') }}">                
    
    @yield('css')
    
</head>
<body class="{{ \Auth::check() ? "" : "bg-dark" }}">
    
    @if (\Auth::check())

        @section('sidebar')        
            @include('includes.sidebar')            
        @show
    
        <div id="right-panel" class="right-panel">

            @section('header')            
                @include('includes.header')    
            @show
            
            @yield('auth-content')
    
            <div class="clearfix"></div>
            @section('footer')            
                @include('includes.footer')
            @show
        </div>
    @else    
        @yield('guest-content')
    @endif
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ url('js/main.js') }}"></script>    
    @yield('js')
</body>
</html>