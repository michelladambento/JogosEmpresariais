
<ul class="sidebar-menu" data-widget="tree">
  <?php if ($usuario === 'admin'): ?>
  <li class="header">NAVEGAÇÃO ADMINISTRADOR</li>
  <li class="active treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>HOME</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="active"><a href="<?=base_url('home');?>"><i class="fa fa-circle-o text-aqua"></i>Painel de Controle</a></li>      
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-money"></i> <span>Empresas</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="active"><a href="<?=base_url('equipe/cadastrarEquipe');?>"><i class="fa fa-circle-o text-aqua"></i>Cadastrar Empresa</a></li> 
      <li class="active"><a href="<?=base_url('equipe/gerenciarEquipe');?>"><i class="fa fa-circle-o text-aqua"></i>Gerenciar Empresa</a></li>      
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-user-plus"></i> <span>Usuários</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="active"><a href="<?=base_url('user/cadastrarUsuario');?>"><i class="fa fa-circle-o text-aqua"></i>Cadastrar Usuários</a></li> 
      <li class="active"><a href="<?=base_url('user/gerenciarUsuario');?>"><i class="fa fa-circle-o text-aqua"></i>Gerenciar Usuários</a></li>      
    </ul>
  </li>  
  <li class="treeview">
    <a href="#">
      <i class="fa fa-newspaper-o"></i> <span>Jornal</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="active"><a href="<?=base_url('jornal/cadastrarJornal');?>"><i class="fa fa-circle-o text-aqua"></i>Cadastrar Jornal</a></li> 
      <li class="active"><a href="<?=base_url('jornal/gerenciarJornal');?>"><i class="fa fa-circle-o text-aqua"></i>Gerenciar Jornal</a></li>      
    </ul>
  </li>
  <?php endif; ?>   
  <li class="header">RODADAS</li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-gamepad"></i> <span>Rodadas do jogo</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="active"><a href="#"><i class="fa fa-gamepad text-aqua"></i> Rodada Teste</a></li>
      <li class="active"><a href="#"><i class="fa fa-gamepad text-yellow"></i> Rodada 1°</a></li> 
      <li class="active"><a href="#"><i class="fa fa-gamepad text-red"></i> Rodada 2°</a></li> 
      <li class="active"><a href="#"><i class="fa fa-gamepad text-green"></i> Rodada 3°</a></li> 
      <li class="active"><a href="#"><i class="fa fa-gamepad text-purple"></i> Rodada 4°</a></li>       
    </ul>
  </li>

  <li class="header">PARTICIPANTES</li>
  <li><a href="<?=base_url('grafico_relatorio/exibirGrafico');?>"><i class="fa fa-line-chart text-red"></i> <span>Gráficos</span></a></li>
  <li><a href="<?=base_url('grafico_relatorio/exibirRelatorio');?>"><i class="fa fa-edit text-yellow"></i> <span>Relatórios</span></a></li>
  <li><a href="<?=base_url('jornal/exibirTodosJornais');?>"><i class="fa fa-newspaper-o text-aqua"></i> <span>Jornais</span></a></li>
  <li><a href="<?=base_url('ranking/exibirRanking');?>"><i class="fa fa-flag-o text-green"></i> <span>Ranking</span></a></li>
</ul>