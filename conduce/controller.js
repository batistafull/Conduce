angular.module('App')
.controller('Home', function($scope){ //home
	
})
.controller('Conduce', function($scope,$http){ //conduce
	$scope.posts = [];
	$http.get("service/dataConduce.php")
	.success(function(data){
		$scope.posts = data;
	})
	.error(function(err){
	})
	
})
.controller('factura', function($scope,$http,$routeParams){ //factura
	$scope.factura = $routeParams.numero;
	$scope.posts = [];
	$http.get("service/dataConduce.php?single=yes&factura="+$scope.factura)
	.success(function(data){
		$scope.posts = data;
		$scope.tel = data[0].TELEFONO;
		$scope.cliente = data[0].CLIENTE;
		$scope.direccion = data[0].DIRECCION;
	})
	.error(function(err){
	})
	
})
.controller('crearConduce', function($scope,$http,$location) { //crear conduce
    $scope.todo = [];
    $scope.btnCrear = false;
    $scope.descr = function(){
    	$http.get("service/dataProductos.php?single=yes&codigop="+$scope.newActv.codep)
	.success(function(data){
		$scope.datext = data[0].DESCR;
	})
	.error(function(err){
	})
    }
    $scope.addActv = function(){
    $scope.newActv.Text = $scope.datext
	$scope.todo.push($scope.newActv);
	$scope.datext = "";
    $scope.newActv = {};
    $scope.btnCrear = true;
};

	$scope.posts = [];
	$http.get("service/dataCliente.php")
	.success(function(data){
		$scope.posts = data;
	})
	.error(function(err){
	})

	$scope.postsp = [];
	$http.get("service/dataProductos.php")
	.success(function(data){
		$scope.postsp = data;
	})
	.error(function(err){
	});

	$scope.crear = function(){
		for(var i = 0; i < $scope.todo.length; i++){
		$http.get("service/crearConduce.php?codigop="+$scope.todo[i].codep+"&factura="+$scope.factura+"&cliente="+$scope.clientename+"&direccion="+$scope.direccion+"&telefono="+$scope.telefono+"&producto="+$scope.todo[i].Text+"&cantidad="+$scope.todo[i].Cant+"&precio="+$scope.todo[i].Price+"&itbis="+$scope.todo[i].Price*0.18)
			.success(function(data){
				$location.path('/conduce');
			})
			.error(function(err){
			})
	}
	};
})
.controller('clientes', function($scope,$http){ //clientes
	$scope.posts = [];
	$http.get("service/dataCliente.php")
	.success(function(data){
		$scope.posts = data;
	})
	.error(function(err){
	})

})
.controller('productos', function($scope,$http){ // productos
	$scope.posts = [];
	$http.get("service/dataProductos.php")
	.success(function(data){
		$scope.posts = data;

	})
	.error(function(err){
	})
})
.controller('editClientes', function($scope,$http, $routeParams, $location){ //editar clientes
	$scope.codigo = $routeParams.codigo;
	$scope.tituloPage = "Editar Clientes";
		$scope.modificar = function(){
		$http.get("service/modCliente.php?codigoc="+$scope.codigo+"&nombre="+$scope.nombree)
		.success(function(data){
		$scope.statu = $scope.nombree+" modificado correctamente.";
		})
		.error(function(err){
		})
	};
	$scope.eliminar = function(){
		$http.get("service/borrarCliente.php?codigoc="+$scope.codigo)
		.success(function(data){
		$scope.statu = " se ha eliminado el cliente "+$scope.nombree;
		$location.path('/clientes');
		})
		.error(function(err){
		})
	};
	if($routeParams){
		$scope.borrar = true;
	}else{
		$scope.borrar = false;
	}
	$http.get("service/dataCliente.php?single=yes&codigoc="+$scope.codigo)
	.success(function(data){
		$scope.nombree = data[0].NOMBRE;
	})
	.error(function(err){
	})
})
.controller('addCliente', function($scope,$http, $routeParams){ //agregar clientes
	$scope.codigo = "";
	$scope.nombree = "";

	$scope.tituloPage = "Agregar Clientes";

	$scope.agregar = function(){
		$http.get("service/crearCliente.php?codigoc="+$scope.codigo+"&nombre="+$scope.nombree)
	.success(function(data){
		$scope.statu = $scope.nombree+" agregado correctamente.";
		$scope.codigo = "";
		$scope.nombree = "";

	})
	.error(function(err){
	})
	};

})
.controller('addProductos', function($scope,$http, $routeParams){ //agregar productos
	$scope.codigo = "";
	$scope.descr = "";
	$scope.tituloPage = "Agregar Productos";
	$scope.agregar = function(){
		$http.get("service/crearProducto.php?codigop="+$scope.codigo+"&descr="+$scope.descr)
		.success(function(data){
		$scope.statu = $scope.descr+" agregado correctamente.";
		$scope.codigo = "";
		$scope.descr = "";
		})
		.error(function(err){
		})

	};

})
.controller('editProductos', function($scope,$http, $routeParams, $location){ //editar productos
	$scope.codigo = $routeParams.codigo;
	$scope.tituloPage = "Editar Productos";

	$scope.modificar = function(){
		$http.get("service/modProducto.php?codigop="+$scope.codigo+"&descr="+$scope.descr)
		.success(function(data){
		$scope.statu = $scope.descr+" modificado correctamente.";
		})
		.error(function(err){
		})
		};

		$scope.eliminar = function(){
		$http.get("service/borrarProducto.php?codigop="+$scope.codigo)
		.success(function(data){
		$scope.statu = " se ha eliminado el cliente "+$scope.descr;
		$location.path('/productos');
		})
		.error(function(err){
		})
	};


		if($routeParams){
		$scope.borrar = true;
	}else{
		$scope.borrar = false;
	}
		$http.get("service/dataProductos.php?single=yes&codigop="+$scope.codigo)
	.success(function(data){
		$scope.descr = data[0].DESCR;
	})
	.error(function(err){
	})

});