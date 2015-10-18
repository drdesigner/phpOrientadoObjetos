<?php
/**
 * Created by PhpStorm.
 * User: Wagner
 * Date: 05/10/2015
 * Time: 20:46
 */

class AtributosMetodos {

    //ATRIBUTOS
    var $Nome;
    var $Idade;
    var $Profissao;

    //MÉTODOS
    function setUsuario($Nome, $Idade, $Profissao){
        $this->Nome         = $Nome;
        $this->setIdade($Idade);
        $this->Profissao    = $Profissao;
    }

    function getUsuario(){
        return "{$this->Nome} tem {$this->Idade} anos de idade. E trabalha como {$this->Profissao}";
    }

    function getClass(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

    function setIdade($Idade){
        if(!is_int($Idade)){
            die('Idade informada é incorreta!');
        }else{
            $this->Idade = $Idade;
        }
    }

    function envelhecer(){
        $this->Idade = $this->Idade + 1;
    }

}