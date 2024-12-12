<?php
    include '../conexao.php';

    //recebendo requisições do front-end e armazendo valores em variáveis
    $id = $_REQUEST['id'];
    $descricao = $_REQUEST['descricao'];
    $obs = $_REQUEST['obs'];

    $sql = "UPDATE profissao SET descricao='$descricao', obs='$obs' WHERE id='$id' ";

    //executa sql
    $resultado = mysqli_query($conexao, $sql);

    //voltar para tela inicial
    header("Location:../profissao.php");

?>