 <?php $this->load->view('includes/header.php');?>

  <!-- Left side column. contains the logo and sidebar --> 
  <?php $this->load->view('includes/asider');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">      
      <ol class="breadcrumb">
        <li><a href="<?=base_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>        
        <li class="active">Perfil</li>
      </ol>
    </section> 
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">   
      <!-- /.box -->
	  	<div class="col-md-4">
	  		<div class="box box-primary">
	            <div class="box-body box-profile">
	              <img class="profile-user-img img-responsive img-circle" src="<?=base_url('assets/dist/img/avatar5.png');?>" alt="User profile picture">

	              <h3 class="profile-username text-center">Michell</h3>

	              <p class="text-muted text-center">Engenheiro de Software</p>

	              <ul class="list-group list-group-unbordered">	                
	                <li class="list-group-item">
	                  <b>Cargo Na Empresa</b> <a class="pull-right">Adiministrador</a>
	                </li>
	                <li class="list-group-item">
	                  <b>Empresa</b> <a class="pull-right">Alpha</a>
	                </li>
	              </ul>

	              <a href="#" class="btn btn-primary btn-block"><b>Editar Perfil</b></a>
	            </div>
	            <!-- /.box-body -->	            
	          </div>

	  	</div>
	  	<div class="col-md-6">
	  		<div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Sobre Mim</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <strong><i class="fa fa-book margin-r-5"></i> Formação</strong>
	              <p class="text-muted">
	              	Sistema da Informação na Universidade Herminino Ometto Araras-SP	               
	              </p>
	              <hr>
	              <strong><i class="fa fa-map-marker margin-r-5"></i> LocaL</strong>
	              <p class="text-muted">Araras, São Paulo</p>
	              <hr>
	              <strong><i class="fa fa-pencil margin-r-5"></i>Habilidades</strong>
	              <p>
	                <span class="label label-danger">UI Design</span>
	                <span class="label label-success">Coding</span>
	                <span class="label label-info">Javascript</span>
	                <span class="label label-warning">PHP</span>
	                <span class="label label-primary">Node.js</span>
	              </p>
	              <hr>
	              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
	              <p>Administrador da empresa Alpha.</p>
	            </div>
	            <!-- /.box-body -->
	          </div>
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

