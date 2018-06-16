
 <?php $this->load->view('includes/header.php');?>

  <!-- Left side column. contains the logo and sidebar --> 
  <?php $this->load->view('includes/asider');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        GERENCIAR EMPRESA       
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('Equipe/cadastrarEquipe');?>">Cadastrar Empresa</a></li>
        <li class="active">Gerenciamento de Empresas</li>
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
      <div class="col-md-7">
        <div class="box box-default box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Lista de Empresas</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->            	
          <div class="box-body" style="">
          	<div class="box-body table-responsive no-padding">
          	  <table class="table table-hover">
          	    <tr>
          	      <th>ID</th>
          	      <th>Nome da Empresa</th>
          	      <th>Qtd de membros</th>          	               	      
          	      <th>Ação</th>
          	    </tr>
          	     <?php if(!empty($listarEquipe)): ?>
	          	     <?php foreach($listarEquipe as $key => $row):?>
		          	    <tr>
		          	      <td><?=$row->idEmpresa;?></td>
		          	      <td><?=$row->nome_equipe;?></td>
		          	      <td><?=$row->qtd_integrante;?></td>		          	      		          	      
		          	      <td>
		          	      	<a href="<?=base_url('Equipe/editarEquipe/'.$row->idEmpresa);?>"class="btn btn-warning">
		          	      		<i class="fa fa-pencil"></i> Editar
	                      </a>
		          	      	<a href="<?=base_url('Equipe/deletarEquipe/'.$row->idEmpresa);?>"class="btn btn-danger">
	                        <i class="fa fa-close"></i> Excluir
	                      </a>	          	      	
		          	      </td>
		          	    </tr>       	                                              
	          	     <?php endforeach; ?>
          	    <?php endif; ?>                    
          	  </table>
          	</div>
          </div>          
        </div>
        <!-- /.box -->
      </div>

    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
 
<?php $this->load->view('includes/footer.php');?>

