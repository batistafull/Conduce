<div class="container white z-depth-2" style="border: 1px solid #000;padding-left: 10px;padding-right: 10px;">
  <div class="row" >
<nav class="black">
          <div class="nav-wrapper">
      <a href="#/conduce" class="brand-logo"><i class="material-icons">arrow_back</i> Crear Conduce</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#/"><i class="material-icons">close</i></a>
        </li>
      </ul>
    </div>
</nav>
  </div>  
  <div style="border: 1px solid #000;padding-left: 20px;padding-right: 20px;">
    <div class="row">
      <div class="col s2">Despacho A</div>
      <div class="col s2"><input type="text" ng-model="factura" placeholder="Factura No."></div>
      </div>
      <div class="row">
     <div class="col s5">
     <input type="text" ng-model="clientename" placeholder="Cliente" list="mylist2">
            <datalist id="mylist2">

                    <option ng-repeat="post in posts">{{post.NOMBRE}}</option>

          </datalist></div> 
      <div class="col s4"><input type="text" ng-model="direccion" placeholder="Direccion"></div> 
      <div class="col s3"><input type="text" ng-model="telefono" placeholder="Telefono"></div>
    </div>
  </div>
  <br>
<hr>
  <div class="row">
          <form ng-submit="addActv()">
          <div class="col s2">
          <input type="text" ng-model="newActv.codep" ng-blur="descr()" placeholder="Codigo" list="mylist">
          <datalist id="mylist">
            <option ng-repeat="postp in postsp">{{postp.CODIGOP}}</option>
          </datalist>
          </div>
          <div class="col s5">
         <input type="text" ng-model="datext" size="30" placeholder="Productos">
         </div>
          <div class="col s1">
         <input type="number" ng-model="newActv.Cant"  size="30" placeholder="Cantidad">
         </div>
         <div class="col s2">
        <input type="number" ng-model="newActv.Price"  size="30" placeholder="Precio">
         </div>
         <div class="col s2"> <br>
        <input class="btn" type="submit" value="Añadir">
        </div>
      </form>
  </div>
  <div class="row">
  <table class="bordered centered responsive-table">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Descripción</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>ITBIS</th>
      <th>Total</th>
    </tr>
    </thead>
    <tr ng-repeat="actividad in todo">
      <td>{{actividad.codep}}</td>
      <td>{{actividad.Text}}</td>
      <td>{{actividad.Cant}}</td>
      <td>{{actividad.Price}}</td>
      <td>{{actividad.Price*0.18}}</td>
      <td>{{(actividad.Price*0.18+actividad.Price)*actividad.Cant}}</td>
    </tr>
  </table>  
  </div>   
  <a href="" ng-click="crear()" ng-show="btnCrear" class="btn right">Crear</a>
  <br><br>
</div>
  </div>
