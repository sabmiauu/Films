<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    @hasSection('page-title')
      @yield('page-title')
    @else
      Sistema de películas
    @endif



  </title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>

    <!--Esto se usa para llamar el contenido al layout-->
    @yield('content')

</body>
</html>
