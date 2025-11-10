<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('autores', 'AutoresController::index');
$routes->get('empleados', 'EmpleadosController::index');
$routes->get('grados', 'GradosController::index');
$routes->get('estados', 'EstadosController::index');
$routes->get('editoriales', 'EditorialesController::index');
$routes->get('prestamos', 'PrestamosController::index');
$routes->get('estudiantes', 'EstudiantesController::index');
$routes->get('libros', 'LibrosController::index');

///('nombre_ruta','nombre_controlador::nombre_metodo')
//autores
$routes->post('agregar_autor', 'AutoresController::agregarAutor');
                              //parametro                                 //$1 = es el numero de parametro que voy a utilizar
$routes->get('eliminar_autor/(:num)', 'AutoresController::eliminarAutor/$1');
$routes->get('buscar_autor/(:num)', 'AutoresController::buscarAutor/$1');
$routes->post('modificar_autor', 'AutoresController::modificarAutor');
//grados
$routes->post('agregar_grado', 'GradosController::agregarGrado');

//estados
$routes->post('agregar_estado', 'EstadosController::agregarEstado');

//editoriales
$routes->post('agregar_editorial', 'EditorialesController::agregarEditorial');

//prestamos
$routes->post('agregar_prestamo', 'PrestamosController::agregarPrestamo');

//estudiantes
$routes->post('agregar_estudiante', 'EstudiantesController::agregarEstudiante');

//libros
$routes->post('agregar_libro', 'LibrosController::agregarLibro');

//usuarios controller
$routes->post('iniciar_sesion', 'UsuariosController::index');

#rutas para acceder a los menus
$routes->get('menu_admin','Home::verMenuAdmin');
$routes->get('menu_secre','Home::verMenuSecre');
$routes->get('menu_ventas','Home::verMenuVentas');

$routes->get('cerrar_sesion','UsuariosController::cerrarSesion');