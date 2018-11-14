
<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$email = $_POST['email'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysqli_connect("localhost", "root", "") or die
 ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"pi") or die("Sem acesso ao DB, Entre em 
contato com o Administrador");
 
// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios
$result = mysqli_query($con,"SELECT * FROM cadastro WHERE email = '".$email."' AND senha = '".$senha."'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */
if(mysqli_num_rows($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('location:../view/cliente/telahistorico.cliente.php');
}
else{
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
  header('location:../index.php?erro=1');
   
  }
?>