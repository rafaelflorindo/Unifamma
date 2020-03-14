<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="../controller/controlePessoaFisica.php" method="post">
      <!-- Classe Pessoa -->
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Entre com o seu nome" name="nome">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Entre com o seu email" name="email">
    </div>
    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="text" class="form-control" id="telefone" placeholder="Entre com o seu telefone" name="telefone">
    </div>
      <!-- Classe Fisica -->
    <div class="form-group">
      <label for="cpf">CPF:</label>
      <input type="text" class="form-control" id="cpf" placeholder="Entre com o seu CPF" name="cpf">
    </div>
      <div class="form-group">
      <label for="rg">RG:</label>
      <input type="text" class="form-control" id="rg" placeholder="Entre com o seu RG" name="rg">
    </div>
      <!-- Classe Endereco -->
      <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" class="form-control" id="endereco" placeholder="Entre com o seu Endereço" name="endereco">
    </div>
      <div class="form-group">
      <label for="numero">Número:</label>
      <input type="text" class="form-control" id="numero" placeholder="Entre com o seu numero" name="numero">
    </div>
    <div class="form-group">
      <label for="bairro">Bairro:</label>
      <input type="text" class="form-control" id="bairro" placeholder="Entre com o seu Bairro" name="bairro">
    </div>
    <div class="form-group">
      <label for="logradouro">Logradouro:</label>
      <input type="text" class="form-control" id="logradouro" placeholder="Entre com o seu logradouro" name="logradouro">
    </div>
    <div class="form-group">
      <label for="cidade">Cidade:</label>
      <select name="cidade">
          <option value="Maringá">Maringá</option>
          <option value="Sarandi">Sarandi</option>
      </select> 
    </div>
      <div class="form-group">
      <label for="uf">UF:</label>
      <select name="uf">
          <option value="PR">PR</option>
          <option value="SP">SP</option>
      </select> 
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

