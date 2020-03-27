<?php
class Usuario
{
  private $nome, $email, $login, $senha;
  private $conexao;
  function __construct()
  {
    include ("Conexao.php");
    $conectar = new Conectar();
    $this->conexao=$conectar->conectar();
  }
  public function getConexao(){
    return $this->conexao;
  }
  public function addUsuario($nome, $email, $login, $senha)
  {
    $this->nome = $nome;
    $this->email = $email;
    $this->login = $login;
    $this->senha = $senha;

    if($this->getConexao()){
      //verifica se esta conectado ao BD
      //prepar a string de inserção na tabela
      $query = "INSERT INTO usuario (nome, email, login, senha)
      VALUE ('{$this->getNome()}', '{$this->getEmail()}', '{$this->getLogin()}','{$this->getSenha()}'
          )";
      //executa o método query para realizar uma consulta (insert, select, alter, drop) ao banco
      $insert = $this->conexao->query($query);
      //verificar se a tabela foi afetada
      if ($this->conexao->affected_rows){
        return 1;
      }else{
        return 0;
      }
    }else{
      echo "Não conectado ao BD";
    }
  }
//método assessores ou modificadores
  public function getNome(){ return $this->nome;}
  public function getEmail(){ return $this->email;}
  public function getLogin(){ return $this->login;}
  public function getSenha(){ return $this->senha;}
}
?>
