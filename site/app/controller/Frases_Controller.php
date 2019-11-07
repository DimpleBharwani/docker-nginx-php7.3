<?php

namespace Controller;

use Psr\Container\ContainerInterface as Container,

    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

class Frases_Controller {

  protected $cContainer;
  private $file;
  public function __construct (Container $container) { 
    $this -> file = file('../database/frases.txt');
    $this -> cContainer = $container; 
  
  }

  public function getFrases (Request $rRequest, Response $rResponse, $args) {
    forEach ($this -> file as $i) {
        echo "$i  <br>";
    };
  }

  public function idFrases (Request $rRequest, Response $rResponse, $args) {
    
    $id = [
      'frase' => $this -> file[$args[id]]
    ];
    // return $rResponse -> write ($this -> file[$id]);
    return $this -> cContainer -> view -> render($rResponse, 'frase-id.twig', $id);
  }

  // public function getFrases (Request $rRequest, Response $rResponse, $args) {
    
  //   $id = [
  //     'frase' => $this -> file[$args[id]]
  //   ];
  //   // return $rResponse -> write ($this -> file[$id]);
  //   return $this -> cContainer -> view -> render($rResponse, 'frase-id.twig', $id);
  // }
}


