<?php
/**
 * Created by PhpStorm.
 * User: Wagner
 * Date: 05/10/2015
 * Time: 20:23
 */

class ClassesObjetos {

    // ATRIBUTOS
    var $Classes;
    var $Funcao;

    // MÉTODOS

    function getClass($Class, $Funcao){
        echo "<p>A classe {$Class} serve para {$Funcao}</p>";
    }

    function verClass(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}