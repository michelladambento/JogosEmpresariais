 <?php $this->load->view('includes/header.php');?>

  <!-- Left side column. contains the logo and sidebar --> 
  <?php $this->load->view('includes/asider');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        TODOS OS JORNAIS       
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <?php if ($usuario === 'admin'): ?>
          <li><a href="<?=base_url('Jornal/gerenciarJornal');?>">Gerenciar Jornal</a></li>
        <?php endif; ?> 
        <li class="active">Jornais</li>
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
            <h3 class="box-title">Exibição de Todos os Jornais</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->            	
          <div class="box-body" style="">
          	<div class="col-md-10">
  	          <!-- Custom Tabs (Pulled to the right) -->
  	          <div class="nav-tabs-custom">
  	            <ul class="nav nav-tabs pull-right">  	             
  	              <?php foreach($todosJornais as $key => $row):?>
  	              	<!-- declaração de variavel -->
  	              	<?php $indice = $key+1;?>
  	              	<?php if ($indice == 1): ?>
  	              		<li class="active"><a href="#tab_<?=$indice?>-1" data-toggle="tab" aria-expanded="true"><?=$row->titulo_jornal?></a></li>
  	              	<?php endif ?>
  	              	<?php if ($indice != 1): ?>
  	              	<li class=""><a href="#tab_<?=$indice?>-2" data-toggle="tab" aria-expanded="false"><?=$row->titulo_jornal?></a></li>
  	              	<?php endif ?>
  	              <?php endforeach; ?>
  	              
  	              <li class="dropdown">
  	                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
  	                  Tipo Arquivo <span class="caret"></span>
  	                </a>
  	                <ul class="dropdown-menu">
  	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Imprimir</a></li>
  	                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PDF</a></li>  	                 
  	                </ul>
  	              </li>
  	              <li class="pull-left header"><i class="fa fa-th"></i>Jornais</li>
  	            </ul>
  	            <div class="tab-content">
  	            	<?php foreach($todosJornais as $key => $row):?>
  	            		<!-- declaração de variavel -->
  	            		<?php $indice = $key+1;?>
  	            		<?php if ($indice == 1): ?>
  	            			<div class="tab-pane active" id="tab_<?=$indice?>-1">
  	            			  <h3><?=$row->titulo_jornal;?></h3>  	                
  	            			  <p><?=$row->ckeditor;?></p>
  	            			</div>
  	            		<?php endif ?>
  	            		<?php if ($indice != 1): ?>
  	            			<div class="tab-pane" id="tab_<?=$indice?>-2">
  	            			  <h3><?=$row->titulo_jornal;?></h3>  	                
  	            			  <p><?=$row->ckeditor;?></p>
  	            			</div>  	            			
  	            		<?php endif ?>
  	            	<?php endforeach; ?> 	               	             
  	              <!-- /.tab-pane -->
  	            </div>
  	            <!-- /.tab-content -->
  	          </div>
  	          <!-- nav-tabs-custom -->
  	        </div>
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

