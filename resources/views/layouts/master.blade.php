<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'myProject')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/')}}/css/master.css" />
    <!-- in ordner public -->
</head>
<body>
<div class="container"> 
    <!-- Begin navi content -->       
    @includeIf('_partials.nav')

<!-- Begin page content -->
<main class="wrapper">
    @if(session('msg_success'))
        <div class="alert alert-success my-1">
            {!! session('msg_success') !!}
        </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger my-1">Bitte Überprüfung deine Eingabe
    <ul>
        @foreach($errors->all() as $error)
        <li>{!! $error !!}</li>
        @endforeach
    </ul>
    </div>
    @endif

    @yield('content')


</main>
<!-- Begin page footer -->
<footer class="text-center bg-blue py-3">         
  <em>&copy; 2024 Copyright by Yinli Jiang</em>
    <ul class="flex-row">
        <li class="d-inline-block"><a href="/impressum" class="text-dark nav-link">Impressum</a></li>
        <li class="d-inline-block"><a href="/datenschutz" class="text-dark nav-link">Datenschutz</a></li>
    </ul>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


</div>
</body>
</html>