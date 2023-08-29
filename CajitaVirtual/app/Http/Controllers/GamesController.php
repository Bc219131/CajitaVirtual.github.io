<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    //
    public function index (){
        return "Juegos comprados";
    }

    public function create (){
        return " Crear formulario de Juegos para inclir en la página";
    }

    public function help ($name_game, $categoria=null){
        if($categoria){
            return "Juegos comprados: " .$name_game. " que pertenece a la categoria de: " .$categoria;
        }
        else{
            return "Juegos comprados: " .$name_game;
        }
    }
}

