   <?php $this->load->view('includes/header.php');?>

    <!-- Left side column. contains the logo and sidebar --> 
    <?php $this->load->view('includes/asider');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          EDITAR EMPRESAS       
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?=base_url('Equipe/gerenciarEquipe');?>">Gerenciar Empresa</a></li>
          <li class="active">Edição de Empresa</li>
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
              <h3 class="box-title">Formulário de Edição de Empresa</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->            	
            <div class="box-body" style="">             
	            <form role="form" action="<?=base_url('Equipe/atualizarEquipe/'.$selecionadoEquipe[0]->idEmpresa);?>" method="POST">
	                <div class="box-body">
	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Nome da Empresa</label>
	                    <div class="input-group">
	                      <div class="input-group-addon">
	                        <i class="fa fa-industry"></i>
	                      </div>
	                    	<input type="text" class="form-control" name="nome_equipe" value="<?=$selecionadoEquipe[0]->nome_equipe;?>" required  placeholder="Nome da Empresa">
	                    </div>                  
	                  </div>
	                  <div class="form-group">
	                    <label for="exampleInputPassword1">Quantidade Integrantes</label>
	                    <div class="input-group">
	                      <div class="input-group-addon">
	                        <i class="fa  fa-users"></i>
	                      </div>
	                    	<input type="number" class="form-control" name="qtd_integrante" value="<?=$selecionadoEquipe[0]->qtd_integrante;?>" max="5" min="0" required  placeholder="Quantidade Integrantes">
	                    </div>                  
	                    	<small class="text-red" ="">*máximo de 5 integrantes</small>                
	                  </div>                                                                    
	                </div>
	                <div class="box-footer">              	
	                  <button type="submit" id="btnCadastrar" name="btnCadastrar" class="btn btn-warning"><i class="fa fa-pencil"></i> Atualizar</button>
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

