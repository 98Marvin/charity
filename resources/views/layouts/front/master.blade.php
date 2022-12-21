<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.front.header')
    </head>

    <body>
        <!-- Top Bar Start -->
            @include('layouts.front.topbar')
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
            @include('layouts.front.nav')
        <!-- Nav Bar End -->


       @yield('content')


        <!-- Footer Start -->
        @include('layouts.front.footer')
        <!-- Footer End -->
        
       @include('layouts.front.bottom')
    </body>
</html>
