 <?php $this->load->view('includes/header.php');?>

  <!-- Left side column. contains the logo and sidebar --> 
  <?php $this->load->view('includes/asider');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        CADASTRO DE JORNAL       
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('Jornal/gerenciarJornal');?>">Gerenciar Jornal</a></li>
        <li class="active">Cadastro de Jornal</li>
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
    		alert('<?=$this->session->flashdata('success jornal')?>');
    	},1000);
    </script>               
	        <div class="alert alert-success alert-dismissible">
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              <h4><i class="icon fa fa-check"></i> Alerta!</h4>
	              <?=$this->session->flashdata('success jornal')?>
	            </div>               
	   
	 <?php } ?>
	 <?php
	   if($this->session->userdata('error')){ ?>
	   	<script>
	   		alert('<?=$this->session->flashdata('success jornal')?>');
	   	</script>
	    <div class="alert alert-danger alert-dismissible">
	          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	          <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
	          <?=$this->session->flashdata('error jornal')?>
	        </div>  
	 <?php } ?>
   <!-- fim da div para cadastro com sucesso-->     
      <!-- /.box -->
      <div class="col-md-12">
        <div class="box box-default box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Formulário de Cadastro de Jornal</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->            	
          <div class="box-body" style="">
          	<?php echo form_open_multipart('Jornal/upload', array('role'=>'form', 'id'=>'form_validation'));?>
            <!--<form role="form" action="<?/*=base_url('Equipe/inserirEquipe');*/?>" method="POST">-->
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-newspaper-o"></i>
                      </div>
                    	<input type="text" class="form-control" name="titulo_jornal" required  placeholder="Nome da Empresa">
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descrição Breve</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-newspaper-o"></i>
                      </div>
                    	<input type="text" class="form-control" name="descricao" required  placeholder="Descreva poucas livas sobre jornal">
                    </div>                  	                
                	<small class="text-red">*Descreva em poucas Palavras Sobre o Jornal</small>
                  </div>
                  <div class="form-group">
                    <i class="fa fa-newspaper-o" style="font-size: 34px;">                    	
                    </i>
                    <label for="exampleInputFile">Escolher um Arquivo</label>                 
                    <input type="file" name="userfile" class="drop" id="image" onchange="readURL(this)" id="exampleInputFile">                    
                  </div> 
                  <div class="form-group">
                    <div class="image_preview ">
                        <div id="previewLoad" style='margin-left: 0px; display: none'>
                            <!--<img src='<?/*php echo base_url();*/?>images/loading.gif'/>-->
                        </div>                                    
                        <div class="image_preview " style="background: #F1F1F1;">                 
                        </div>                                    
                    </div>
                  </div>                 
                  <div class="form-group">
                  	<div class="box-body pad">                  	  
	          	        <textarea id="editor1" name="ckeditor" rows="10" cols="80">
	          	           Digite seu texto aqui...
	          	        </textarea>                  	  
                  	</div>
                  </div>                                                                    
                </div>
                <div class="box-footer">              	
                  <button type="submit" id="btnCadastrarJornal" name="btnCadastrarEmpresa" class="btn btn-primary"><i class="fa fa-save"></i> Cadastrar</button>
                </div>
              <?php form_close();?> 
              <!--</form>-->
          </div>          
        </div>
        <!-- /.box -->
      </div>

    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>-->
  <script type="text/javascript">
  
  function readURL(input) {
  $('#previewLoad').show();
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('.image_preview').html('<img src="'+e.target.result+'" alt="'+reader.name+'" class="img-thumbnail" width="204" height="136"/>');
    }

    reader.readAsDataURL(input.files[0]);
    $('#previewLoad').hide();
  }
  }
  
  function reset(){
  $('#image').val("");
  $('.image_preview').html("");
  }

  </script>
 
<?php $this->load->view('includes/footer.php');?>

