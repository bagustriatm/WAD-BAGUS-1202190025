<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css.map" rel="stylesheet">
    <title>EAD Hospital | {{ $title }}</title>
</head>
<body>
    <header>
        @include('components.nav');
    </header>
    <main style="padding-top: 80px;">
        @yield('article')
    </main>
@include('components.footer');
</body>
<script type="application/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="application/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="application/javascript" src="js/bootstrap.bundle.min.js.map"></script>
</html>
