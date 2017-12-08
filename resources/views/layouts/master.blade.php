<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="{{url("css/style.css")}}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <!--Let browser know website is optimized for mobile-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body class="grey lighten-3">
    <nav class="indigo darken-4">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo hide-on-med-and-down">OmahTI Meme</a>
            <a href="#" class="brand-logo hide-on-large-only right">OmahTI Meme</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html"><i class="large material-icons left">account_circle</i>cacadosman</a></li>
                <li><a href="badges.html"><i class="large material-icons">more_horiz</i></a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html"><i class="large material-icons left">account_circle</i>cacadosman</a></li>
                <li><a href="badges.html"><i class="large material-icons">more_horiz</i></a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col s12 indigo">
            <div class="header-content container white-text">   
                @yield('headerContent')
            </div>
        </div>
    </div>
    
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="{{url('js/script.js')}}"></script>
</body>
</html>