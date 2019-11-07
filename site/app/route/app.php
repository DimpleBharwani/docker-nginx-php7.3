<?php

// $aApp->get('/double/{num}', function ($request, $response, $args) {
//     $num = $args[num];
//     return $response->write($num*2);
// });




// $aApp->get('/piropeame', function ($request, $response, $args) {
//     $file = file('../database/frases.txt');
//     $frases = "";
    
//     for($i=0; $i<count($file); $i++)
//     {
//         $frases .= $file[$i] . "<br>";
//     }
//     return $response -> write ($frases);
//     }); 

// $aApp->get('/piropeame/{id}', function ($request, $response, $args) {
//     $file = file('../database/frases.txt');
//     $id = $args[id];
//     return $response -> write ($file[$id]);

//         }); 


$aApp->get('/piropitos', Frases::class . ':getFrases');
$aApp->get('/piropitos/{id}', Frases::class . ':idFrases') -> add(new \Middleware\Home_Middleware());
$aApp -> get('/', Home::Class . ':getHome');

