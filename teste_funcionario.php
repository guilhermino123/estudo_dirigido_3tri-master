<?php

    require __DIR__."/Funcionario.php";
    require __DIR__."/Data.php";

    //FUNCIONARIO1

    $Funcionario1 = new Funcionario();
    $Funcionario1->departamento = "Professor";
    $Funcionario1->salarioAnual = 0;
    $Funcionario1->salario = 6000;
    $Funcionario1->CPF = "123.456.789-00";

    $Entrada_Data_funcionario = new Data();
    $Entrada_Data_funcionario->ano = 2001;
    $Entrada_Data_funcionario->mes = 01;
    $Entrada_Data_funcionario->dia = 01;
    
    $Funcionario1->Data_Entrada = $Entrada_Data_funcionario;

    $Funcionario1->recebe_Aumento();
    $Funcionario1->calcula_Ganho_Anual();
    //print_r($Funcionario1);
  
    //FUNCIONARIO2

    $Funcionario2 = new Funcionario();
    $Funcionario2->departamento = "Diretor";
    $Funcionario1->salarioAnual = 0;
    $Funcionario2->salario = 7000;
    $Funcionario2->CPF = "987.654.321-00";

    $Entrada_Data_funcionario = new Data();
    $Entrada_Data_funcionario->ano = 2002;
    $Entrada_Data_funcionario->mes = 02;
    $Entrada_Data_funcionario->dia = 02;
    
    $Funcionario2->Data_Entrada = $Entrada_Data_funcionario;

    $Funcionario2->recebe_Aumento();
    $Funcionario2->calcula_Ganho_Anual();
    //print_r($Funcionario2);

