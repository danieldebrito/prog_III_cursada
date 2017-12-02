<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'composer/vendor/autoload.php';
require 'class/AccesoDatos.php';
require 'class/empleadoApi.php';
require 'class/productoApi.php';


$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$app = new \Slim\App(["settings" => $config]);


$app->group('', function () {
 
  $this->post('/', \empleadoApi::class . ':CargarUno');

  $this->get('/', \empleadoApi::class . ':traerTodos');

  $this->post('/email/clave/Verifica_empleado', \empleadoApi::class . ':VerificarEmpleado');
     
});


$app->group('/productos', function () {
  
   $this->post('/', \productoApi::class . ':CargarUno');
 
   $this->get('/', \productoApi::class . ':traerTodos');
 
   $this->delete('/', \productoApi::class . ':BorrarUno');
 
   $this->put('/', \productoApi::class . ':ModificarUno');
      
 });

$app->run();