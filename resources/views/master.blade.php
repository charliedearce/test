<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <title>Free Text 4 All</title>
        <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel='stylesheet' href='{{asset('bower_components/angular-loading-bar/build/loading-bar.min.css')}}' type='text/css' media='all' />
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <script>var baseUrl = "{{ url('/') }}/"; </script>
    </head>
<body>
    <div class="container">
        <div ng-view></div>
    </div>
    <script type="text/javascript" src="{{asset('bower_components/angular/angular.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/angular-route/angular-route.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/angular-cookies/angular-cookies.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/angular-messages/angular-messages.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/angular-animate/angular-animate.js')}}"></script>
    <script type='text/javascript' src='{{asset('bower_components/angular-loading-bar/build/loading-bar.min.js')}}'></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/controllers.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/models.js')}}"></script>
</body>
</html>
