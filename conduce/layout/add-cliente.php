<div class="container white z-depth-2" style="border: 1px solid #000;padding-left: 10px;padding-right: 10px;">
  <div class="row" >
<nav class="black">
      <div class="nav-wrapper">
      <a href="#/clientes" class="brand-logo"><i class="material-icons">arrow_back</i> {{tituloPage}}</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#/"><i class="material-icons">close</i></a></li>
      </ul>
    </div>
</nav>
  </div>
  <div class="row" style="padding-left: 10px;padding-right: 10px">

     <div class="col s2 input-field">
        <input type="text" placeholder="Codigo" ng-model="codigo">
      </div>
     <div class="col s10 input-field">
        <input type="text" placeholder="Nombre" ng-model="nombree">
      </div>
      <button class="btn right red" ng-show="{{borrar}}" ng-click="eliminar()">Borrar</button>
      <button style="margin-right: 10px" class="btn blue right" ng-show="{{borrar}}" ng-click="modificar()">Modificar</button>
      <button style="margin-right: 10px" class="btn right" ng-show="{{!borrar}}" ng-click="agregar()">Agregar</button>

</div>
</div>
<p class="flow-text center">{{statu}}</p>