
 <?php $this->load->view('includes/header.php');?>

  <!-- Left side column. contains the logo and sidebar --> 
  <?php $this->load->view('includes/asider');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        CADASTRO DE USUÁRIOS       
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('user/gerenciarUsuario');?>">Gerenciar Usuário</a></li>
        <li class="active">Cadastro de Usuário</li>
      </ol>
    </section> 
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
	<!-- inicio da div para cadastro para sucesso-->
    <?php    
    if($this->session->userdata('success')){?>	
    <script>
    	setTimeout(function(){
    		alert('<?=$this->session->flashdata('success')?>');
    	},1000);
    </script>               
	        <div class="alert alert-success alert-dismissible">
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              <h4><i class="icon fa fa-check"></i> Alerta!</h4>
	              <?=$this->session->flashdata('success')?>
	            </div>               
	   
	 <?php } ?>
	 <?php
	   if($this->session->userdata('error')){ ?>
	   	<script>
	   		setTimeout(function(){alert('teste de alerte')},1000);
	   	</script>
	    <div class="alert alert-danger alert-dismissible">
	          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	          <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
	          <?=$this->session->flashdata('error')?>
	        </div>  
	 <?php } ?>
   <!-- fim da div para cadastro com sucesso-->     
      <!-- /.box -->
      <div class="col-md-6">
        <div class="box box-default box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Formulário de Cadastro de Usuário</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->            	
          <div class="box-body" style="">
            <form role="form" action="<?=base_url('user/inserirUsuario');?>" method="POST">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome do Usuário</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                    	<input type="text" class="form-control" name="username" required id="exampleInputEmail1" placeholder="Usuario">
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                    	<input type="password" class="form-control" name="password" required id="exampleInputPassword1" placeholder="Senha">
                    </div>
                  </div>
                  <div class="row">                   
	                <div class="form-group">
	                 	<div class="col-md-6">
		                 	<label>Empresa</label>
		                 	<div class="input-group">
		                 	  <div class="input-group-addon">
		                 	    <i class="fa fa-industry"></i>
		                 	  </div>
		                 		<select class="form-control select2 "  name="Empresa_idEmpresa" style="width: 100%;">
		                 			<?php if(!empty($listarEquipe)): ?>
		                 			 <?php foreach($listarEquipe as $row):?>
		                 			   <option value="<?=$row->idEmpresa?>"><?=$row->nome_equipe?></option>                                     
		                 			  <?php endforeach; ?>
		                 			<?php endif; ?>		                 		                		  
		                 		</select>
		                 	</div>                      
	                 	</div>                 
	                 	<div class="col-md-6">
		                 	<label>Tipo acesso</label>
		                 	<div class="input-group">
		                 	  <div class="input-group-addon">
		                 	    <i class="fa fa-unlock"></i>
		                 	  </div>
		                 		<select class="form-control select2" name="tipo_acesso" style="width: 100%;">
		                 		  <option value="admin">Admin</option>
		                 		  <option value="usuario_comum">Comum</option>                 		                   		  
		                 		</select>
		                 	</div>
	                 	</div>                      
	                </div>
				   </div>                                                  
                </div>
                <div class="box-footer">              	
                  <button type="submit" id="btnCadastrar" name="btnCadastrar" class="btn btn-primary"><i class="fa fa-save"></i> Cadastrar</button>
                </div>
              </form>
          </div>          
        </div>
        <!-- /.box -->
      </div>

    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
 
<?php $this->load->view('includes/footer.php');?>
