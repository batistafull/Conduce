angular.module('App', ["ngRoute"])
.config(function($routeProvider){
	$routeProvider
	.when("/",{
		controller: "Home",
		templateUrl: "layout/home.php"
	})
	.when("/conduce",{
		controller: "Conduce",
		templateUrl: "layout/conduce.php"
	})
	.when("/clientes",{
		controller: "clientes",
		templateUrl: "layout/clientes.php"
	})
	.when("/crearConduce",{
		controller: "crearConduce",
		templateUrl: "layout/crear-conduce.php"
	})
	.when("/addCliente",{
		controller: "addCliente",
		templateUrl: "layout/add-cliente.php"
	})
	.when("/productos",{
		controller: "productos",
		templateUrl: "layout/productos.php"
	})
	.when("/addProductos",{
		controller: "addProductos",
		templateUrl: "layout/add-productos.php"
	})
	.when("/editClientes/:codigo",{
		controller: "editClientes",
		templateUrl: "layout/add-cliente.php"
	})
	.when("/editProductos/:codigo",{
		controller: "editProductos",
		templateUrl: "layout/add-productos.php"
	})
	.when("/factura/:numero",{
		controller: "factura",
		templateUrl: "layout/factura.php"
	})
});