 <?php $this->load->view('includes/header.php');?>

  <!-- Left side column. contains the logo and sidebar --> 
  <?php $this->load->view('includes/asider');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        EXIBIÇÃO DO JORNAL       
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('jornal/gerenciarJornal');?>">Gerenciar Jornal</a></li>
        <li class="active">Jornal</li>
      </ol>
    </section> 
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
	<!-- inicio da div para cadastro para sucesso-->   
   <!-- fim da div para cadastro com sucesso-->     
      <!-- /.box -->
      
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title"><?=$selecionadoJornal[0]->titulo_jornal;?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <blockquote>
        	  <h3><?=$selecionadoJornal[0]->titulo_jornal;?></h3>
              <p><?=$selecionadoJornal[0]->descricao;?></p>
              <img src="<?php echo base_url()."uploads/jornal/".$selecionadoJornal[0]->file_dir;?>" alt="" class="img-thumbnail" width="150px" height="100px"/>
              <small>Postado em : <cite title="Source Title"><?=$selecionadoJornal[0]->date_uploaded;?></cite></small>
            </blockquote>
            <?=$selecionadoJornal[0]->ckeditor;?>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>      

    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
 
<?php $this->load->view('includes/footer.php');?>

