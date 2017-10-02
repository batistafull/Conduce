
<div class="container white z-depth-2" style="border: 1px solid #000;padding-left: 10px;padding-right: 10px;">
  <div class="row" >
<nav class="black">
      <div class="nav-wrapper">
      <a href="#/conduce" class="brand-logo"><i class="material-icons">arrow_back</i> Factura</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="" onclick="javascript:imprSelec('muestra');function imprSelec(muestra)
{var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();};">
      <i class="material-icons">print</i></a></li>
      <li><a href="#/"><i class="material-icons">delete</i></a></li>
        <li><a href="#/"><i class="material-icons">close</i></a></li>
      </ul>
    </div>
</nav>
</div>
<div id="muestra"> 
<div style="padding-left: 10px;padding-right: 10px;" >
<div class="row">
<p align="right">Fecha: <?php echo date('j/n/Y - H:i:sa'); ?> <br>
<center> LA SOLUCION DE TU CONTRUCCION <br>
 RNC.:131-19577-6 <br>
  <b>CONDUCE DE ENTREGA</b>
  </center></p>
</div>
  <div class="row">  
  <b style="margin-left: 10px;">DIRECCION/REFERENCIA</b> <br>
  <div style="border: 1px solid #000;float:left;margin:10px; height: 110px; width: 300px;" class="col s4">
{{referencia}}
  </div>
  <div class="col s4" style="border: 1px solid #000;margin:10px;float:right;width: 300px;height: 110px;">
DESPACHO A FACTURA NO. {{factura}}<br>
CLIENTE: {{cliente}}<br>
DIRECCION: {{direccion}}<br>
TELEFONO: {{tel}}<br>
</div>
  </div>

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
    <tr ng-repeat="post in posts">
      <td>{{post.CODIGOP}}</td>
      <td>{{post.PRODUCTO}}</td>
      <td>{{post.CANTIDAD}}</td>
      <td>{{post.PRECIO | currency }}</td>
      <td>{{post.PRECIO*0.18 | currency }}</td>
      <td>{{post.PRECIO*0.18*post.CANTIDAD+post.PRECIO*post.CANTIDAD | currency }}</td>
    </tr>
  </table> 
  <br>
  <center>****************FIN DE DOCUMENTO*******************</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <pre>             _______________________                      __________________________</pre>
  <pre>                 Despachado por                                   Recibido Por</pre>
</div>
</div>
</div>