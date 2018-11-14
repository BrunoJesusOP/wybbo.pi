<?php
/*
*  Descrição do Arquivo
*  @autor - Bruno Jesus Oliveira Pinho
*  @data de criação - 26/09/2018 03:32:59
*  @arquivo - cliente.classe.php
*/

class cadastro {

//Atributos
private $idcadastro;
private $nome_completo;
private $placa_veiculo;
private $cor_veiculo;
private $telefone;
private $email;
private $CPF;
private $senha;


//Getters

public function getIdcadastro() {
   return$this->id;
}

public function getNome_completo() {
   return$this->nome_completo;
}

public function getPlaca_veiculo() {
   return$this->placa_veiculo;
}

public function getCor_veiculo() {
   return$this->cor_veiculo;
}

public function getTelefone() {
   return$this->telefone;
}

public function getEmail() {
   return$this->email;
}

public function getCPF() {
   return$this->CPF;
}

public function getSenha() {
   return $this->senha;
}

//Setters
//corrigir
public function setIdcadastro($idcadastro) {
    $this->idcadastro=$idcadastro;
}

public function setNome_completo($nome_completo) {
   $this->nome_completo=$nome_completo;
}

public function setPlaca_veiculo($placa_veiculo) {
   $this->placa_veiculo=$placa_veiculo;
}

public function setCor_veiculo($cor_veiculo) {
   $this->cor_veiculo=$cor_veiculo;
}

public function setTelefone($telefone) {
   $this->telefone=$telefone;
}

public function setEmail($email) {
   $this->email=$email;
}

public function setCPF($CPF) {
   $this->CPF=$CPF;
}

public function setSenha($senha) {
   $this->senha=$senha;
}

}
?>