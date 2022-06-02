<?php
declare(strict_types=1);

function Login(string $email, string $senha){
    $connect = mysqli_connect('localhost','root','','be');
  
      if (isset($entrar)) {
  
        $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
  
          if (mysqli_num_rows($verifica)<=0){
  
            return 'email e/ou senha incorretos';
           
  
          }else{
  
              return 'Bem Vindo! pena que não tem para aonde ir agora kk ¯\_(ツ)_/';
          }
  
      }
      mysqli_close($connect);

}
function Cadastro(){
  var_dump($_POST);
  if(isset($_POST['cadastrar'])){
    $email=$_POST['email'];
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
$arquivo = fopen('dados/contatos.csv', 'a+');
$string = "{$nome};{$email};{$telefone}".PHP_EOL;
fwrite($arquivo,$string);
fclose($arquivo);
$mensagem = 'Cadastro Realizado com Sucesso';
include'telas/mensagem.php';

  }
  include 'telas/cadastro.php';
}
function Listar(){
  
  if(isset($_POST['delete'])){
    $arquivo = file('dados/contatos.csv');
    unset($arquivo[$_POST['delete']]);
    unlink('dados/contatos.csv');
    $novo = fopen('dados/contatos.csv', 'a+');
    foreach($arquivo as $ar){
        fwrite($novo,$ar);
    }
    fclose($novo);
    $mensagem = 'Excluido com Sucesso';
    include'telas/mensagem.php';
  }
  if(isset($_POST['edit'])){
    $id = $_POST['edit'];
    $arquivo = file('dados/contatos.csv');
    $dados = explode(';',$arquivo[$id]);
    include'telas/editar.php';
  }
  if(isset($_POST['editar'])){
    $email=$_POST['email'];
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $id = $_POST['editar'];
    $arquivo = file('dados/contatos.csv');
    $arquivo[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;
    unlink('dados/contatos.csv');
    $novo = fopen('dados/contatos.csv', 'a+');
    foreach($arquivo as $ar){
      fwrite($novo,$ar);
    }
    fclose($novo);
    $mensagem = 'Editado com Sucesso';
    include'telas/mensagem.php';
}
 
  $contatos = file('dados/contatos.csv');
  include 'telas/listar.php';
  
}
 function editar(){
   var_dump($_POST);
  
 }