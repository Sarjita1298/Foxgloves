<!DOCTYPE html>
<html lang="en">
    <head>
        @include('frontend.layout.library')
    </head>
    <body>
        @include('frontend.layout.header')

        @yield('content')

        @include('frontend.layout.footer')

        @yield('scripts')
    </body>
</html>
