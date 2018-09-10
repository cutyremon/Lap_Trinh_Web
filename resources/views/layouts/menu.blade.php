<!DOCTYPE HTML>
<HTML lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style('/bower/bootstrap/dist/css/bootstrap.css') }}
    {{ HTML::style('/bower/owl.carousel/dist/assets/owl.carousel.css') }}
    {{ HTML::style('/bower/owl.carousel/dist/assets/owl.theme.default.css') }}
    {{ HTML::style('/bower/owl.carousel/dist/assets/owl.theme.default.css') }}
    {{ HTML::style('/bower/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('/css/sites/homepage.css') }}
    {{ HTML::style('/css/sites/menu.css') }}
    {{ HTML::style('/css/sites/reset.css') }}
    {{ HTML::style('bower/jquery-ui/themes/base/jquery-ui.css') }}
    <link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    @yield('style')
</head>
<body>
<div class="container-fluid fix-width" id="content_menu">
    @yield('content')
</div>
{{ HTML::script("bower/vue/dist/vue.js") }}
{{ HTML::script("bower/axios/dist/axios.min.js") }}
{{ HTML::script('bower/jquery/dist/jquery.js') }}
{{ HTML::script('bower/bootstrap/dist/js/bootstrap.js') }}
{{ HTML::script('bower/vue2-filters/dist/vue2-filters.js') }}
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
</HTML>
