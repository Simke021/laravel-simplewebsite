<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acme</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
        <div class="row">
            <div class="col-lg-8 col-md-8">
            <!-- Error Messages -->
                @include('inc.messages')
                @yield('content')
            </div>
            
            <div class="col-lg-4 col-md-4">
                @include('inc.sidebar')    
            </div>
        </div>
    </div>
    <footer id="footer" class="footer text-center">
        <p>Copyright 2017 &copy; Aleksandar Ljubišić</p>
    </footer>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>      
</body>
</html>