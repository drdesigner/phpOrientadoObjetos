<?php
/**
 * Created by PhpStorm.
 * User: wjosue
 * Date: 08/10/2015
 * Time: 15:09
 */

class InteracaoDeObjetos {
    public $Empresa;
    public $Setores;

    //chamo atributos de outra classe
    /** @var InteracaoClasse */
    public $Funcionario;

    function __construct($Empresa)
    {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }

    public function Contratar($Funcionario, $Cargo, $Salario){
        $this->Funcionario = (object) $Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa,$Salario,$Cargo);
        $this->Setores += 1;
    }

    public function Pagar(){
        $this->Funcionario->Receber($this->Funcionario->Salario);
    }

    public function Promover($Cargo, $Salario = null){
        $this->Funcionario->Profissao = $Cargo;
        if($Salario){
            $this->Funcionario->Salario = $Salario;
        }
    }

    public function Demitido($Recisão){
        $this->Funcionario->Receber($Recisão);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;
        $this->Setores -= 1;
    }
}