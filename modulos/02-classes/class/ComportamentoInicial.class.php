<?php
/**
 * Created by PhpStorm.
 * User: Wagner
 * Date: 06/10/2015
 * Time: 20:34
 */

class ComportamentoInicial {

    //ATRIBUTOS
    var $Nome;
    var $Idade;
    var $Profissao;
    var $Salario;

    //MÉTODOS
    // MÉTODO MÁGICO, OBRIGO INICIO DA CLASSE PASSANDO PARÂMETROS
    function __construct($Nome, $Idade, $Profissao, $Salario){
        $this->Nome = (string) $Nome;
        $this->Idade = (int) $Idade;
        $this->Profissao = (string) $Profissao;
        $this->Salario = (float) $Salario;
        echo "O objeto {$this->Nome} foi iniciado <br>";
    }

    //MÉTODO MÁGICO PARA DESTRUIR O OBJETO
    function __destruct(){
        echo "O objeto {$this->Nome} foi destruido!<br>";
    }

    function ver(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}