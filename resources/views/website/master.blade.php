<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.includes.style')
</head>
<body>
<!-- HEADER -->
<header>
    @include('website.includes.header')
</header>
<!-- /HEADER -->
<!-- NAVIGATION -->
@include('website.includes.navigation')
<!-- /NAVIGATION -->
@yield('body')
<!-- NEWSLETTER -->
@include('website.includes.footer')
<!-- jQuery Plugins -->
@include('website.includes.script')

</body>
</html>
