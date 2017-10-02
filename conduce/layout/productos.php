<div class="container white z-depth-2" style="border: 1px solid #000;padding-left: 10px;padding-right: 10px;">
  <div class="row" >
<nav class="black">
      <div class="nav-wrapper">
      <a href="#/" class="brand-logo"><i class="material-icons">arrow_back</i> Productos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#/addProductos"><i class="material-icons">shopping_cart</i></a></li>
      </ul>
    </div>
</nav>
  </div>  
<!--clientes lista -->
        <div class="collection" style="overflow:scroll; height:450px;width: 100%" ng-hide="posts.length == 0">
            <a href="#/editProductos/{{post.CODIGOP}}" class="collection-item" ng-repeat="post in posts">
            {{post.DESCR}}
            </a>
        </div>
<!--clientes lista -->
</div>