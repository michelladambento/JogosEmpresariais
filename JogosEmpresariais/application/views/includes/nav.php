<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
       <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">          
         <i class="fa fa-clock-o"></i>         
         <span class="">Tempo Restante</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">            
            <h1 id="relogio2" style="font-weight: bold;color:#fff;"></h1>
            <p>
              Tempo Restante
              <small>data de inicio e fim da rodada</small>
            </p>
          </li>         
          
        </ul>
      </li>    
        <script>
            function relogio2(){
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
              document.getElementById("relogio2").innerHTML = horas+':'+minutos+':'+segundos;
              
            }
            setInterval("relogio2()", 1000);
        </script>       
     
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown messages-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-graduation-cap"></i>
          <span class="label label-success">5</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Integrantes da Equipe</li>
          <?php for($i=1;$i<=5;$i++): ?>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">              
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="<?=base_url('assets/dist/img/avatar'.$i.'.png'); ?>" class="img-circle" alt="User Image">
                  </div>
                  <h4>
                    <?php echo $usuario;?>
                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                  </h4>
                  <p>Breve descrição da pessoa</p>
                </a>
              </li>            
            </ul>
          </li>
        <?php endfor; ?>
          <li class="footer"><a href="#">Equipe Alpha</a></li>
        </ul>
      </li>
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">10</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Você tem 10 notificações</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i> 5 novos membros se juntou Hoje
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-warning text-yellow"></i> Hoje é dia de resolver o Jornal de marketing
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users text-red"></i> 5 novos membros se juntou
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-shopping-cart text-green"></i> 25 vendas feita
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-user text-red"></i> Você mudou seu nome
                </a>
              </li>
            </ul>
          </li>Ver todas as mensagens</a></li>
        </ul>
      </li>
      <!-- Tasks: style can be found in dropdown.less -->
      
     
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="<?=base_url('assets/dist/img/avatar5.png'); ?>" class="user-image" alt="User Image">
          <span class="hidden-xs"><?php echo $usuario;?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="<?=base_url('assets/dist/img/avatar5.png'); ?>" class="img-circle" alt="User Image">

            <p>
              <?php echo $usuario;?>
              <small>Membro desde Jun. 2017</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-xs-12 text-center">
                <h1>Equipe Alpha</h1>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="<?=base_url('user/exibirPerfil');?>" class="btn btn-default btn-flat">Editar Perfil</a>
            </div>
            <div class="pull-right">
              <a href="<?=base_url('login/logout');?>" class="btn btn-default btn-flat">Sair</a>
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"> Tema / Rodadas  </i></a>
      </li>
    </ul>
  </div>
</nav>