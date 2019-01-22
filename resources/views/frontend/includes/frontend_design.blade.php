<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
<body class="container">
@include('frontend.includes.nav')

@yield('content')

@include('frontend.includes.footer')
@include('frontend.includes.script')
</body>
</html>