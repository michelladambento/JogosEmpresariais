<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=base_url('assets/dist/img/avatar5.png'); ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $usuario;?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
   
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <?php $this->load->view('includes/menu')?>
  </section>
  <!-- /.sidebar -->
</aside>
