<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodee</title>
    {{HTML::style('bower/bootstrap/dist/css/bootstrap.css')}}
    <script src="//code.jquery.com/jquery.js"></script>
    {{HTML::style(' bower/bootstrap/dist/js/bootstrap.min.js')}}
    {{ HTML::style('css/sites/homepage.css') }}
    <link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    @yield('style')
</head>
<body>
@yield('content')
{{ HTML::script('js/sites/homepage.js') }}
<script>
    $(document).ready(function () {
        $('#logout-1').on('click', function () {
            $('#logout-form').submit();
        });
    });
</script>
@yield('script')
</body>
</html>
