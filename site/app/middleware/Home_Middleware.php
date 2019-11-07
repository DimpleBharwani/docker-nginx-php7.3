<?php

namespace Middleware;

use Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

class Home_Middleware {
    private $file;
    public function __construct () {
         $this -> file = file('../database/frases.txt'); 
        }

  public function __invoke (Request $rRequest, Response $rResponse, $cNext) {

    $rResponse -> getBody() -> write($this -> file[1]);

    $rResponse = $cNext($rRequest, $rResponse);

    // $rResponse -> getBody() -> write(' AFTER');

    return $rResponse;

  }

}