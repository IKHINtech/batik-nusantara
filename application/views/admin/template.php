
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin-NUSANTARA </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- datatables -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- eksport -->
  <!-- <link rel="stylesheet" href="<?=base_url('assets/admin/');?>bower_components/jquery/dist/jquery.dataTables.min.css"> -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>bower_components/datatables.net/buttons.dataTables.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>dist/css/AdminLTE.min.css">
  <!-- Datepicker -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
      folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/');?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url('assets/admin/');?>index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>ATIK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NUSA</b>NTARA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li> -->
                <!-- inner menu: contains the actual data -->
                <!-- <ul class="menu"></ul>
              </li>
              <li class="footer">
              </li>
            </ul> -->
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url('assets/admin/');?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url('assets/admin/');?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                <?=$this->fungsi->user_login()->name?>
                <small><?=$this->fungsi->user_login()->address?></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-info">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=base_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets/admin/');?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->fungsi->user_login()->name?></p>
          <a href="#"><i class="fa fa-circle text-success"></i><?=$this->fungsi->user_login()->username?></a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HOME MENU</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Produk Terdaftar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('product');?>"><i class="fa fa-hourglass-1"></i>Semua</a></li>
            <li><a href="<?=base_url('assets/admin/');?>index.html"><i class="fa fa-hourglass-1"></i>Pria</a></li>
            <li><a href="<?=base_url('assets/admin/');?>index2.html"><i class="fa fa-line-chart"></i>Wanita</a></li>
            <li><a href="<?=base_url('assets/admin/');?>index2.html"><i class="fa fa-line-chart"></i>Anak-Anak</a></li>

          </ul>
        </li>
        <li class="header">ADMIN MENU</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Input Inventori</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('product/add');?>"><i class="fa fa-circle-o"></i>Input Produk</a></li>
            <li><a href="<?=base_url('kategori/add');?>"><i class="fa fa-circle-o"></i>Input Kategori Produk </a></li>
            <li><a href="<?=base_url('brand/add');?>"><i class="fa fa-circle-o"></i>Input Brand / Merk Produk</a></li>
          </ul>
        </li>
        <li class="header">USER MENU</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('profile');?>"><i class="fa fa-user"></i>User Profile</a></li>
            <?php if($this->fungsi->user_login()->level==1){?>
            <li><a href="<?=base_url('user');?>"><i class="fa fa-user-plus"></i>User Management</a></li><?php } ?>
          </ul>
        </li>
        <li >
          <a href="<?=base_url('login/logout')?>">
            <i class="fa fa-sign-out"></i> <span>logout</span>
          </a>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <?php echo $contents?> 
  </div>
  <!--isi content  -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="">IKHINtech.ID</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Control Sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?=base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets/admin/');?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- datatablees -->
<script src="<?=base_url('assets/admin/');?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/admin/');?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url('assets/admin/');?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- Datepicker -->
<script src="<?=base_url('assets/admin/');?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url('assets/admin/');?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?=base_url('assets/admin/');?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url('assets/admin/');?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- Eksport Button -->
<!-- <script src="<?=base_url('assets/admin/');?>bower_components/jquery/dist/jquery.dataTables.min.js"></script> -->
<script src="<?=base_url('assets/admin/');?>bower_components/datatables.net/js/buttons.flash.min.js"></script>
<script src="<?=base_url('assets/admin/');?>bower_components/datatables.net/js/buttons.html5.min.js"></script>
<script src="<?=base_url('assets/admin/');?>bower_components/datatables.net/js/buttons.print.min.js"></script>
<script src="<?=base_url('assets/admin/');?>bower_components/datatables.net/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url('assets/admin/');?>bower_components/datatables.net/js/jszip.min.js"></script>
<script src="<?=base_url('assets/admin/');?>bower_components/datatables.net/js/pdfmake.min.js"></script>
<script src="<?=base_url('assets/admin/');?>bower_components/datatables.net/js/vfs_fonts.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/admin/');?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/admin/');?>dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
$(document).ready(function(){
  $('#table').DataTable({
        // dom: 'Bfrtip',
        // // buttons: [
        // //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ]
    } );
});
$('#datepicker').datepicker({
      autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,
    })

$('.select2').select2()

//Datemask dd/mm/yyyy
$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
//Datemask2 mm/dd/yyyy
$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
//Money Euro
$('[data-mask]').inputmask()

//Date range picker
$('#reservation').daterangepicker()
//Date range picker with time picker
$('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
//Date range as a button
$('#daterange-btn').daterangepicker(
  {
    ranges   : {
      'Today'       : [moment(), moment()],
      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate  : moment()
  },
  function (start, end) {
    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
  }
)

//iCheck for checkbox and radio inputs
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
  checkboxClass: 'icheckbox_minimal-blue',
  radioClass   : 'iradio_minimal-blue'
})
//Red color scheme for iCheck
$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
  checkboxClass: 'icheckbox_minimal-red',
  radioClass   : 'iradio_minimal-red'
})
//Flat red color scheme for iCheck
$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
  checkboxClass: 'icheckbox_flat-green',
  radioClass   : 'iradio_flat-green'
})

//Colorpicker
$('.my-colorpicker1').colorpicker()
//color picker with addon
$('.my-colorpicker2').colorpicker()

//Timepicker
$('.timepicker').timepicker({
  showInputs: false
})

</script>
</body>
</html>
