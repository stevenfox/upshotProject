<!DOCTYPE html>
<html>
<head>
    <title>MotorPage</title>
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="/js/app.js"></script>


</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
        <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active btn" id="motorbikes-tab"data-toggle="tab" href="#motorbikes" role="tab">Motorbikes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn" id="owners-tab" data-toggle="tab" href="#owners" role="tab">Owners</a>
      </li>
      <li>
        @include('inc.create')
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="motorbikes" role="tabpanel">
          @include('inc.motorbikes')
      </div>
      <div class="tab-pane" id="owners" role="tabpanel">
          @include('inc.owners')
      </div>
    </div>        
</div>
</body>




</html>