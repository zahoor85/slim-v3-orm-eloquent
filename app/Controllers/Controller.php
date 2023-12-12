<?php
namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Controller
{
   protected $container;
   public function __construct($container){
       $this->container = $container;
   }
}
?>