<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoxGloves Manifold Services</title>
    <link rel="icon" href="{{ asset('frontend/images/Foxgloves.jpg') }}" type="image/png">

    @include('frontend.layout.library')
</head>
<body>
    <div class="wrapper">
        @include('frontend.layout.header')
    

    <div class="content-wrapper">
        @include('frontend.layout.alert') 
        @yield('content')
    </div>

    @include('frontend.layout.footer')

    @yield('scripts')

</div>
</body>
</html>
