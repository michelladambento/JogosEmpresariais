  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0.0
    </div>
    <strong>Direitos &copy;</strong> 2018 Michell Adam Bento Matheus Molina
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-gamepad"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h4 class="control-sidebar-heading  text-aqua" style="font-weight:bold">JOGOS EMPRESARIAIS TCC</h4>
        <h3 class="control-sidebar-heading">Atividades</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-newspaper-o bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Rodada 1°</h4>

                <p>exibido dia 5 maio</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-newspaper-o bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Rodada 2°</h4>

                <p>exibido dia 15 maio</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-newspaper-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Rodada 3°</h4>

                <p>exibido dia 20 maio</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-newspaper-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Rodada 4°</h4>

                <p>em andamento</p>
              </div>
            </a>
          </li>
        </ul>       
      </div>
  
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h4 class="control-sidebar-heading  text-aqua" style="font-weight:bold">JOGOS EMPRESARIAIS TCC</h4>
          <h3 class="control-sidebar-heading">Config Geral</h3>  
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url('assets/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?=base_url('assets/bower_components/raphael/raphael.min.js'); ?>"></script>
<script src="<?=base_url('assets/bower_components/morris.js/morris.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?=base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?=base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?=base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?=base_url('assets/bower_components/moment/min/moment.min.js'); ?>"></script>
<script src="<?=base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<!-- datepicker -->
<script src="<?=base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?=base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?=base_url('assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('assets/dist/js/pages/dashboard.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/dist/js/demo.js'); ?>"></script>
<!-- select do formulario-->
<script src="<?=base_url('assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
<!-- text area ckeditor-->
<!-- CK Editor -->
<script src="<?=base_url('assets/bower_components/ckeditor/ckeditor.js'); ?>"></script>

</body>
<script>
  $(function () {
    //Initialize Select2 Elements
    //$('.select2').select2()
   
  })

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</html>
