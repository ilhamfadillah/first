<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - Testing</title>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    </head>
    <body>
      <h2>Javascript Default</h2>
      @yield('javascript')

            This is the master sidebar.


        <div class="container">
            @yield('content')
        </div>
    </body>
</html
