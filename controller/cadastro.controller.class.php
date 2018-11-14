<?php
/*
*  Descrição do Arquivo
*  @autor - Bruno Jesus Oliveira Pinho
*  @data de criação - 03/10/2018 03:04:05
*  @arquivo - clientecontroller.classe.php
*///Inclui a classe genérica CRUD
require_once("./functions/crud.class.php");

//Método construtor
class cadastroController extends Crud{
public function __construct() {

//Passa como parametro a tabela
    parent::__construct("cadastro");
}
}

?>