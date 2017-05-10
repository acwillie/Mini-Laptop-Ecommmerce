<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
     <title>@yield('title')</title>

    <link href="src/css/bootstrap.css" rel="stylesheet"/>
    <link href="src/css/mystyle.css" rel="stylesheet"/>


    @yield('styles')
</head>
<body>
@include('partials.header')

<div class="container">
    @yield('content')
</div>



<!-- jQuery-->
<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>
@yield('scripts')
                

</body>
</html>