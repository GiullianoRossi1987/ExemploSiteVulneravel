<?php
    require("../banco/conecta.php");
    session_start();
    $senha = $_POST['senha'];
    $login = $_POST['usuario'];
    $stmt = $conexao->prepare("SELECT * FROM tb_admin WHERE nm_admin = ? AND ds_senha = ?");
    $stmt->bind_param('ss', $login, $senha);
    $stmt->execute();
    // LEGACY: $query = "SELECT * FROM tb_admin WHERE nm_admin ='$login' AND ds_senha = '$senha'";
    // $result = mysqli_query($conexao, $query);
    // echo $query;
    if(mysqli_num_rows($stmt->get_result)==1){
        $_SESSION['acesso'] = "admin";
        header('location:../inicio.php');
    }else{
         header('location:../index.php');
    }
    
