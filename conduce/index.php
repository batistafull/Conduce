  <!DOCTYPE html>
  <html ng-app="App" lang="en">
    <head>
<meta charset="UTF-8">
<title>Conduce</title>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link rel="stylesheet" href="css/materialize.css">
     <script src="js/angular.js"></script>
     <script src="js/angular-route.js"></script>
    <script src="todo.js"></script>
    <script src="controller.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="grey lighten-1">


<nav class="black">
  <div class="nav-wrapper">
      <ul id="nav-mobile" class="hide-on-med-and-down">
      <li><a href="#/">Inicio</a></li>
        <li><a href="#/clientes">Clientes</a></li>
        <li><a href="#/productos">Productos</a></li>
        <li><a href="#/conduce">Conduce</a></li>
        <li><a href="">Configuracion</a></li>
      </ul>
    </div>
</nav>
<br><br>

<div ng-view>
  
</div>

<br><br>    
      <script src="js/awesomplete.js"></script>
<script src="js/materialize.js"></script>
    </body>
  </html>