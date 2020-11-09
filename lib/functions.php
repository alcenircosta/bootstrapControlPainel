<?php
require_once ('includes.php');
function cadastrar_equipe($pdo){
    if(isset($_POST['editar_sobre'])){
        $sobre = $_POST['sobre'];
        $pdo->exec("DELETE FROM `tb_sobre`");
        $sql = $pdo->prepare("INSERT INTO `tb_sobre` values (null,?)");
        $sql->execute(array($sobre));
        echo '<div class="alert alert-primary" role="alert">
        O código HTML <b>SOBRE</b> foi editado com sucesso!!!
        </div>';
        $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
        $sobre->execute();
        $sobre = $sobre->fetch()['sobre'];
      }else if(isset($_POST['cadastrar_equipe'])){
        $nome = $_POST['nome_membro'];
        $descricao = $_POST['descricao'];
        $sql = $pdo->prepare("INSERT INTO `tb_equipe` values (null,?,?)");
        $sql->execute(array($nome,$descricao));
        echo '<div class="alert alert-primary" role="alert"><b>Novo membro</b> cadastrado com sucesso!!!</div>';
        $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
        $sobre->execute();
        $sobre = $sobre->fetch()['sobre'];
      }
}
function deletar($pdo,$id){
        $sql = $pdo->prepare("DELETE FROM `tb_equipe` WHERE id = ?");
        $sql->execute(array($id));
}
