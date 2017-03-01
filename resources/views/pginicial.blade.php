<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
           <meta charset="utf-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
           <meta name="description" content="">
           <meta name="author" content="">
           <link rel="icon" href="../../favicon.ico">
           
           <title>Fe en Accion</title>
           
           <!-- Bootstrap core CSS -->
           <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
           
           <!-- Custom styles for this template -->
           <link href="dashboard.css" rel="stylesheet">
           
           
           <!-- Latest compiled and minified CSS -->
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
           <style >
            body{
            margin-top: 60px;
            }
            </style>
    </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Fe en Accion</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Principal</a></li>
            <li><a href="#">Cerrar Sesion</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Menu <span class="sr-only">(current)</span></a></li>
            <li><a href="{{ url('/iglesia') }}">Iglesias</a></li>
            <li><a href="{{ url('/redes') }}">Redes</a></li>
            <li><a href="{{ url('/celulas') }}">Celulas</a></li>
            <li><a href="{{ url('/persona') }}">Personas</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="{{ url('/usuario') }}">Usuarios</a></li>
            <li><a href="">Nuevo</a></li>
          </ul>
        </div>
          
         @yield('tabla')
        </div>
      </div>
    </div>
       
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <p>&copy; 2017 Derechos Reservados: Fe en Accion-design</p>
        </div>
     </div>
    
    
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>