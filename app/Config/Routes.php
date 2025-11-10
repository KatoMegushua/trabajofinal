<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

#Empleados
///('nombre_ruta','nombre_controlador::nombre_metodo')
$routes->get('empleados', 'EmpleadosController::index');
$routes->post('agregar_empleado', 'EmpleadosController::agregarEmpleado');
                              //parametro                                 //$1 = es el numero de parametro que voy a utilizar
$routes->get('eliminar_empleado/(:num)', 'EmpleadosController::eliminarEmpleado/$1');
$routes->get('buscar_empleado/(:num)', 'EmpleadosController::buscarEmpleado/$1');
$routes->post('modificar_empleado', 'EmpleadosController::modificarEmpleado');

#Ventas
///('nombre_ruta','nombre_controlador::nombre_metodo')
$routes->get('ventas', 'VentasController::index');
$routes->post('agregar_venta', 'VentasController::agregarVenta');
                              //parametro                                 //$1 = es el numero de parametro que voy a utilizar
$routes->get('eliminar_venta/(:num)', 'VentasController::eliminarVenta/$1');
$routes->get('buscar_venta/(:num)', 'VentasController::buscarVenta/$1');
$routes->post('modificar_venta', 'VentasController::modificarVenta');

//usuarios controller
$routes->post('iniciar_sesion', 'UsuariosController::index');

#rutas para acceder a los menus
$routes->get('menu_admin','Home::verMenuAdmin');
$routes->get('menu_secre','Home::verMenuSecre');
$routes->get('menu_ventas','Home::verMenuVentas');

$routes->get('cerrar_sesion','UsuariosController::cerrarSesion');