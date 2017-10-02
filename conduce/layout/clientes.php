<div class="container white z-depth-2" style="border: 1px solid #000;padding-left: 10px;padding-right: 10px;">
  <div class="row" >
<nav class="black">
      <div class="nav-wrapper">
      <a href="#/" class="brand-logo"><i class="material-icons">arrow_back</i> Clientes</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#/addCliente"><i class="material-icons">person_add</i></a></li>
      </ul>
    </div>
</nav>
  </div>  
<!--clientes lista -->
        <div class="collection" style="overflow:scroll; height:450px;width: 100%" ng-hide="posts.length == 0">
            <a href="#/editClientes/{{post.CODIGOC}}" class="collection-item" ng-repeat="post in posts">
            {{post.NOMBRE}}
            </a>
        </div>
<!--clientes lista -->
</div>
