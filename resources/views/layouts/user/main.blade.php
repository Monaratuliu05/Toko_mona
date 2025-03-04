<!DOCTYPE html> 
<html lang="zxx" class="no-js"> 
<head> 
    <!-- Mobile Specific Meta --> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <!-- Favicon--> 
    <link rel="shortcut icon" href="{{ asset('assets/templates/user/img/fav.png') }}"> 
    <!-- Author Meta --> 
    <meta name="author" content="CodePixar"> 
    <!-- Meta Description --> 
    <meta name="description" content=""> 
    <!-- Meta Keyword --> 
    <meta name="keywords" content=""> 
    <!-- meta character set --> 
    <meta charset="UTF-8"> 
    <!-- Site Title --> 
    <title>Merch Store</title>

    @include('layouts.user.style')
</head>
<body>
    @include('sweetalert::alert')

    @include('layouts.user.navbar')

    @yield('content')

    @include('layouts.user.footer')

    @include('layouts.user.script')
</body>
</html>