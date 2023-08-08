<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @include('includes.cssLinks')
    
    @yield('css')


</head>
<body>
    @include('includes.header')

    
    @yield('main')



    @include ('includes.footer')
    @include ('includes.mobile-menu')
    @include ('includes.jsLinks')

    @yield('js')
    

</body>
</html>