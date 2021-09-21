<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos(){
        echo "<h1> Produtos </h1>";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>Impressora</li>";
        echo "<li>Mouse</li>";
        echo "</ol>";
        echo "<a href=".route('app')."> << Voltar</a>";
    }

    public function getNome(){
        return "Tiago Rodrigues";
    }

    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }
}
