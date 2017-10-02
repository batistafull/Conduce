<div class="container white z-depth-2" style="border: 1px solid #000;padding-left: 10px;padding-right: 10px;">
  <div class="row" >
<nav class="black">
      <div class="nav-wrapper">
      <a href="#/" class="brand-logo"><i class="material-icons">arrow_back</i> Coduce</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#/crearConduce"><i class="material-icons">queue</i></a></li>
      </ul>
    </div>
</nav>
  </div>  
<!--conduce lista -->
        <ul class="collection" style="overflow:scroll; height:450px;width: 100%" ng-hide="posts.length == 0">
            <li class="collection-item" ng-repeat="post in posts">
              <div>[ {{post.FACTURA}} ] __ {{post.CLIENTE}}<a href="#/factura/{{post.FACTURA}}" class="secondary-content"><i class="material-icons">receipt</i></a></div>
            </li>
        </ul>
<!--conduce lista -->
</div>
