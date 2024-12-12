<!DOCTYPE html>
<html lang="pt-br">
<?php

include "validacao.php";
include "conexao.php";



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
      <div class="col-md-3 menu">
        <?php include './menulateral.php'; ?>
      </div>

      <div class="col-md-9">
        <div class="row">
          
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Teste Técnico </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Teste Comportamental </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Teste psicológico </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Dinâmica em grupos </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Aprovação e Integração </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Admissão e demissão </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Folha Salarial </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Contrato Empregatício </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Controle de Ponto </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Benefícios </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Compliance </h5> </div>
          <div class="col-md-2 card p-5 m-4 text-center"> <h5> <i class="fa-solid fa-file"></i> <br> Férias </h5> </div>
          
        
        </div>

      </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">© 2024 Company, Inc</p>
    </footer>

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