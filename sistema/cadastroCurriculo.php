<!DOCTYPE html>
<html lang="pt-br">
<?php

include "conexao.php";

//destino do formulário
$destino = './recrutamento/inserir.php';

//se veriavel idAlt for diferente de vazio na url - se existir a variavel idAlt na URL
if (!empty($_GET['idAlt'])) {
  $id = $_GET['idAlt'];
  $sql = "SELECT * FROM recrutamento WHERE id='$id' ";

  //busca os o usuário para editar de acordo com o id
  $dados = mysqli_query($conexao, $sql);

  //separa os dados por coluna, pronto para uso
  $dadosAlt = mysqli_fetch_assoc($dados);

  //nesse caso o formulario vai enviar os dados para o alterar.php
  $destino = './recrutamento/alterar.php';
}

?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sistema </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./recursos/estilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />



</head>

<body>

  <?php include './menusuperior.php'; ?>
  <div class="container-fluid">

    <div class="row">
      
      <div class="container">

        <div class="row">

          <div class="col-md-12 card">
            <h3> Cadastre seu currículo </h3>
            <form action="<?= $destino ?>" method="post" class="row" enctype="multipart/form-data">

              <div class="form-group col-md-12">
                <label>Nome: </label>
                <input required value="<?php echo isset($dadosAlt) ? $dadosAlt['nome'] : '' ?>" type="text" name="nome"
                  class="form-control" placeholder="Nome do candidato">
              </div>

              <div class="form-group col-md-6">
                <label>Contato: </label>
                <input value="<?php echo isset($dadosAlt) ? $dadosAlt['contato'] : '' ?>" type="text" name="contato"
                  class="form-control" placeholder="contato">
              </div>

              <div class="form-group col-md-6">
                <label>Email</label>
                <input value="<?php echo isset($dadosAlt) ? $dadosAlt['email'] : '' ?>" type="text" name="email"
                  class="form-control" placeholder="Email">
              </div>

              <div class="form-group col-md-3">
                <label>Tipo</label>
                <select name="tipo" class="form-control">
                  <option value="Presencial"> Presencial </option>
                  <option value="Online"> online </option>
                  <option value="Em espera"> Em espera </option>
                </select>
              </div>

              <div class="form-group col-md-9">
                <label>Observação</label>
                <input value="<?php echo isset($dadosAlt) ? $dadosAlt['obs'] : '' ?>" type="text" name="obs"
                  class="form-control" placeholder="Observação (link do meet)">
              </div>

              <div class="form-group col-md-4">
                <label>Data da entrevista</label>
                <input value="<?php echo isset($dadosAlt) ? $dadosAlt['data_entrevista'] : '' ?>" type="date" name="data_entrevista"
                  class="form-control">
              </div>

              <div class="form-group col-md-4">
                <label>Hora de Início</label>
                <input value="<?php echo isset($dadosAlt) ? $dadosAlt['hora_inicio'] : '' ?>" type="time" name="hora_inicio"
                  class="form-control">
              </div>

              <div class="form-group col-md-4">
                <label>Hora de Finalização</label>
                <input value="<?php echo isset($dadosAlt) ? $dadosAlt['hora_fim'] : '' ?>" type="time" name="hora_fim"
                  class="form-control">
              </div>

              <div class="form-group col-md-12">
                <label>Imagem do candidato (opcional) </label>  <br>
                <input type="file" name="foto" id="foto">
              </div>

              <div class="form-group col-md-12">
                <label> Currículo (Apenas em PDF)  </label>  <br> 
                <input type="file" name="curriculo" id="curriculo">
              </div>
             
                <button type="submit" class="btn btn-primary ml-3 mb-3"> Enviar </button>
              
            </form>

          </div>


        </div>

      </div>
    </div>


  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
    integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
    integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <script src="./recursos/script.js"></script>
</body>

</html>