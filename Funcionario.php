<?php
class Funcionario{

    public $departamento;
    public $salario;
    public $Ganho_Anual;
    public $CPF;
    public $Data_Entrada;

    public function recebe_Aumento(){
        $aumento = $this->salario + (0.1 * $this->salario);
   		$this->salario += $aumento;
    }

    public function calcula_Ganho_Anual(){
        $salariodoAno = $this->salario * 13;
        $this->Ganho_Anual = $salariodoAno;
    }

    public function mostra(){
        return "O Empregado do departamento {$this->departamento}, entrou em {$this->Data_Entrada->getData()}, tem um salario de R$ {$this->salario}";
    }

    public function __toString() {
        return $this->mostra();
    }
}

