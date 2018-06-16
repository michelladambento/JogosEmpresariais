<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="<?=base_url('assets/cssCustom/styleLogin.css'); ?>">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <link rel="icon" href="favicon.ico" type="image/x-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
      <!-- Favicon-->
      <link rel="icon" href="<?=base_url('assets/favicon.ico');?>" type="image/x-icon">    
    
</head>
<body class="hold-transition login-page">
    <div id="login">     
      <h2>JOGOS | EMPRESARIAIS</h2>
      <span>TCC | Michell Adam Bento | Matheus Molina</span>
      <?php             
        echo '<center><div style="background:#f1243c; margin-bottom:20px;border-radius:5px;color:#fff;"><label class="text-danger">'.$this->session->flashdata('error').'</label></div></center>';                    
    ?>
      <form name='form-login' method="POST" action="<?=base_url('login/entrar')?>">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" name="username" placeholder="Usuário" required="required" />       
        <span class="fontawesome-lock"></span>
          <input type="password" name="password" placeholder="Senha" required="required"/>        
        <input type="submit" value="Entrar">
      </form>
  </div>

</body>
</html>
