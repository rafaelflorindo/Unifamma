<?php
class Usuario
{
  private $nome, $email, $login, $senha, $id;
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
    $this->senha = md5($senha);
    $dataCadastro = date("Y-m-d H:i:s");
    if($this->getConexao()){
      //verifica se esta conectado ao BD
      //prepar a string de inserção na tabela
      echo $query = "INSERT INTO usuario (nome, email, login, senha, dataCadastro)
      VALUE ('{$this->getNome()}', '{$this->getEmail()}', '{$this->getLogin()}','{$this->getSenha()}', '{$dataCadastro}'
          )";
    //  exit;
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

  public function relatorioSimples(){
    if($this->getConexao()){
      $query = "SELECT * FROM usuario";
      $busca = $this->conexao->query($query);

      $retornoBanco = array();//array dinamico
      while ($linha = $busca->fetch_array()) {
        $retornoBanco[] = $linha;
      }
      return $retornoBanco;
    }else{
      echo "Erro";
    }
  }
public function relatorioUnico($id){
  if($this->getConexao()){
    $query = "SELECT * FROM usuario where id = ". $id;//2
    $busca = $this->conexao->query($query);

    $retornoBanco = array();
    while ($linha = $busca->fetch_assoc()) {
      //echo $row["nome"];
      $retornoBanco[] = $linha;
    }
    return $retornoBanco;
  }else{
    echo "Erro";
  }
}
public function alterUsuario($nome, $email, $login, $id)
{
  $this->nome = $nome;
  $this->email = $email;
  $this->login = $login;
  $this->id = $id;

  if($this->getConexao()){
    $query = "UPDATE usuario SET
          nome = '{$this->getNome()}',
          email = '{$this->getEmail()}',
          login = '{$this->getLogin()}'

          WHERE id = '{$this->getId()}'";//2

    //executa o método query para realizar uma consulta (insert, select, alter, drop) ao banco
    $alter = $this->conexao->query($query);
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
public function deleteUsuario($id){
  $this->id = $id;

    if($this->getConexao()){
      $query = "DELETE FROM usuario
                WHERE id = '{$this->getId()}'";
      $delete = $this->conexao->query($query);
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
  public function getId(){ return $this->id;}
}
?>
