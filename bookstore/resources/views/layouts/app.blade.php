<!DOCTYPE html>
<html>
<head>
    <title>Bookstore</title>
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="/js/app.js"></script>


</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')  
        @include('inc.create')
        @include('inc.magazines')
      </div>
    </div>        
</div>
<div id="endofChallenge"></div>
</body>




</html>