 <?php $this->load->view('includes/header.php');?>

  <!-- Left side column. contains the logo and sidebar --> 
  <?php $this->load->view('includes/asider');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
        <small>Painel de Controle</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <?php if ($usuario === 'admin'): ?>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$totalJornal?></h3>
              <h4>Jornais</h4>
            </div>
            <div class="icon">
              <i class="fa fa-newspaper-o"></i>
            </div>
            <a href="<?=base_url('jornal/exibirTodosJornais');?>" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>5<sup style="font-size: 20px">%</sup></h3>
              <h4>Ranking</h4>
            </div>
            <div class="icon">
              <i class="fa fa-flag-o"></i>
            </div>
            <a href="<?=base_url('ranking/exibirRanking');?>" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>5</h3>
              <h4>Relatórios</h4>
            </div>
            <div class="icon">
              <i class="fa fa-edit"></i>
            </div>
            <a href="<?=base_url('grafico_relatorio/exibirRelatorio');?>" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>5</h3>
              <h4>Gráficos</h4>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <a href="<?=base_url('grafico_relatorio/exibirGrafico');?>" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->         
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?=$totalUsuario?></h3>
              <h4>Usuarios</h4>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=base_url('user/gerenciarUsuario');?>" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->         
          <div class="small-box bg-light-blue">
            <div class="inner">              
              <h3 id='relogio'></h3>
              <script>
                  function relogio(){
                    var rel = new Date();
                    var horas = rel.getHours();
                    var minutos = rel.getMinutes();
                    var segundos = rel.getSeconds();
                    
                    if(horas<10){
                      horas = "0"+horas;
                    }
                    if(minutos<10){
                      minutos = "0"+minutos;
                    }
                    if(segundos <10){
                      segundos = "0"+segundos;
                    }
                    document.getElementById("relogio").innerHTML = horas+':'+minutos+':'+segundos;
                    
                  }
                  setInterval("relogio()", 1000);
              </script>
              <h4>Tempo</h4>
            </div>
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <a href="#" class="small-box-footer">dia finaliza a Rodada</a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?=$totalEquipe?></h3>
              <h4>Empresas</h4>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="<?=base_url('equipe/gerenciarEquipe');?>" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <?php endif; ?> 
    <!-- /.content -->
  </div>
 
<?php $this->load->view('includes/footer.php');?>
