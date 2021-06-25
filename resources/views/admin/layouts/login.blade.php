<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Store Manager | @yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('admin/img/apple-touch-icon.png')}}" sizes="180x180">
    <link rel="icon" href="{{ asset('admin/img/favicon-32x32.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('admin/img/favicon-16x16.png')}}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('admin/manifest.json')}}">
    <link rel="mask-icon" href="{{ asset('admin/img/safari-pinned-tab.svg')}}" color="#7952b3">
    <link rel="icon" href="{{ asset('admin/img/favicon.ico')}}">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/signin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">
    @yield('content')
  </body>
</html>
