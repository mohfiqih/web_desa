<!DOCTYPE html>
<html lang="en">

<head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <title>SIAAP - Sistem Informasi Akademik Application</title>
     <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
     <link rel="icon" href="<?php echo base_url('assets/template_new/assets/img/icon.ico'); ?>" type="image/x-icon" />

     <!-- Fonts and icons -->
     <script src="<?php echo base_url('assets/template_new/assets/js/plugin/webfont/webfont.min.js'); ?>"></script>
     <script>
     WebFont.load({
          google: {
               "families": ["Lato:300,400,700,900"]
          },
          custom: {
               "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
               ],
               urls: ['<?php echo base_url('assets/template_new/assets/css/fonts.min.css'); ?>']
          },
          active: function() {
               sessionStorage.fonts = true;
          }
     });
     </script>

     <!-- CSS Files -->
     <link rel="stylesheet" href="<?php echo base_url('assets/template_new/assets/css/bootstrap.min.css'); ?>">
     <link rel="stylesheet" href="<?php echo base_url('assets/template_new/assets/css/atlantis.min.css'); ?>">

     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link rel="stylesheet" href="<?php echo base_url('assets/template_new/assets/css/demo.css'); ?>">
</head>

<body>
     <div class="wrapper">
          <div class="main-header">
               <!-- Logo Header -->
               <div class="logo-header" data-background-color="blue">

                    <!-- <a href="#" class="logo">
                         <img src="assets/template_new/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
                    </a> -->

                    <div class="logo">
                         <h2 class="text-white" style="margin-top: 15px;margin-left: 50px;">SIAAP</h2>
                    </div>

                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                         data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon">
                              <i class="icon-menu"></i>
                         </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <div class="nav-toggle">
                         <button class="btn btn-toggle toggle-sidebar">
                              <i class="icon-menu"></i>
                         </button>
                    </div>
               </div>
               <!-- End Logo Header -->

               <!-- Navbar Header -->
               <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                    <div class="container-fluid">
                         <div class="collapse" id="search-nav">
                              <form class="navbar-left navbar-form nav-search mr-md-3">
                                   <div class="input-group">
                                        <div class="input-group-prepend">
                                             <button type="submit" class="btn btn-search pr-1">
                                                  <i class="fa fa-search search-icon"></i>
                                             </button>
                                        </div>
                                        <input type="text" placeholder="Search ..." class="form-control">
                                   </div>
                              </form>
                         </div>
                         <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                              <li class="nav-item toggle-nav-search hidden-caret">
                                   <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                                        aria-expanded="false" aria-controls="search-nav">
                                        <i class="fa fa-search"></i>
                                   </a>
                              </li>

                              <!-- <li class="nav-item dropdown hidden-caret">
                                   <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <i class="fas fa-layer-group"></i>
                                   </a>
                                   <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                        <div class="quick-actions-header">
                                             <span class="title mb-1">Quick Actions</span>
                                             <span class="subtitle op-8">Shortcuts</span>
                                        </div>
                                        <div class="quick-actions-scroll scrollbar-outer">
                                             <div class="quick-actions-items">
                                                  <div class="row m-0">
                                                       <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                 <i class="flaticon-file-1"></i>
                                                                 <span class="text">Generated Report</span>
                                                            </div>
                                                       </a>
                                                       <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                 <i class="flaticon-database"></i>
                                                                 <span class="text">Create New Database</span>
                                                            </div>
                                                       </a>
                                                       <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                 <i class="flaticon-pen"></i>
                                                                 <span class="text">Create New Post</span>
                                                            </div>
                                                       </a>
                                                       <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                 <i class="flaticon-interface-1"></i>
                                                                 <span class="text">Create New Task</span>
                                                            </div>
                                                       </a>
                                                       <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                 <i class="flaticon-list"></i>
                                                                 <span class="text">Completed Tasks</span>
                                                            </div>
                                                       </a>
                                                       <a class="col-6 col-md-4 p-0" href="#">
                                                            <div class="quick-actions-item">
                                                                 <i class="flaticon-file"></i>
                                                                 <span class="text">Create New Invoice</span>
                                                            </div>
                                                       </a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </li> -->

                              <li class="nav-item dropdown hidden-caret">
                                   <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <h5 style="margin-top: 10px;"><?php echo $user->user_namalengkap;?></h5>
                                   </a>
                              </li>
                              <li class="nav-item dropdown hidden-caret">
                                   <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                        aria-expanded="false">
                                        <div class="avatar-sm">
                                             <img src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                                  alt="..." class="avatar-img rounded-circle">
                                        </div>
                                   </a>
                                   <ul class="dropdown-menu dropdown-user animated fadeIn">
                                        <div class="dropdown-user-scroll scrollbar-outer">
                                             <li>
                                                  <div class="user-box">
                                                       <div class="avatar-lg"><img
                                                                 src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                                                 alt="image profile" class="avatar-img rounded"></div>
                                                       <div class="u-text">
                                                            <h4>Username : <?php echo $user->user_nama;?></h4>
                                                            <p class="text-muted"><?php echo $user->user_namalengkap;?>
                                                            </p><a href="<?php echo base_url('profil'); ?>"
                                                                 class="btn btn-xs btn-secondary btn-sm">View
                                                                 Profile</a>
                                                       </div>
                                                  </div>
                                             </li>
                                             <li>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="<?php echo base_url('profil'); ?>">Edit
                                                       Profile</a>
                                                  <!-- <a class="dropdown-item" href="#">My Balance</a>
                                                  <a class="dropdown-item" href="#">Inbox</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Account Setting</a>
                                                  <div class="dropdown-divider"></div> -->
                                                  <a class="dropdown-item"
                                                       href="<?php echo base_url('logout'); ?>">Logout</a>
                                             </li>
                                        </div>
                                   </ul>
                              </li>
                         </ul>
                    </div>
               </nav>
               <!-- End Navbar -->
          </div>

          <!-- Sidebar -->

          <div class="sidebar sidebar-style-2">
               <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                         <div class="user">
                              <div class="avatar-sm float-left mr-2">
                                   <img src="<?php echo base_url().'assets/images/'.$user->user_foto;?>" alt="..."
                                        class="avatar-img rounded-circle">
                              </div>
                              <div class="info">
                                   <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                        <span>
                                             <?php echo $user->user_namalengkap; ?>
                                             <span class="user-level"><?php echo $user->user_level; ?></span>
                                        </span>
                                   </a>

                              </div>
                         </div>
                         <?php if ($this->user_level == "Super Admin") {?>
                         <ul class="nav nav-primary">
                              <li class="nav-section">
                                   <span class="sidebar-mini-icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                   </span>
                                   <h4 class="text-section">Menu Navigation</h4>
                              </li>
                              <li class="nav-item active">
                                   <a href="<?php echo base_url('dasbor'); ?>">
                                        <i class="fas fa-home"></i>
                                        <p>Dashboard</p>
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a href="<?php echo base_url('datasekolah'); ?>">
                                        <i class="fas fa-book"></i>
                                        <p>Data Sekolah</p>
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a data-toggle="collapse" href="#jadwal">
                                        <i class="fas fa-table"></i>
                                        <p>Jadwal</p>
                                        <span class="caret"></span>
                                   </a>
                                   <div class="collapse" id="jadwal">
                                        <ul class="nav nav-collapse">
                                             <li>
                                                  <a href="<?php echo base_url('jadwal'); ?>">
                                                       <span class="sub-item">Jadwal Pelajaran</span>
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <span class="sub-item">Jadwal Kegiatan</span>
                                                  </a>
                                             </li>
                                        </ul>
                                   </div>
                              </li>

                              <li class="nav-item">
                                   <a data-toggle="collapse" href="#datamaster">
                                        <i class="fas fa-list"></i>
                                        <p>Data Master</p>
                                        <span class="caret"></span>
                                   </a>
                                   <div class="collapse" id="datamaster">
                                        <ul class="nav nav-collapse">
                                             <li>
                                                  <a href="#">
                                                       <span class="sub-item">Daftar Siswa</span>
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <span class="sub-item">Datatables</span>
                                                  </a>
                                             </li>
                                        </ul>
                                   </div>
                              </li>

                              <li class="nav-section">
                                   <span class="sidebar-mini-icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                   </span>
                                   <h4 class="text-section">Master Data</h4>
                              </li>
                              <li class="nav-item">
                                   <a href="<?php echo base_url('users'); ?>">
                                        <i class="fas fa-user"></i>
                                        <p>User</p>
                                   </a>
                              </li>
                         </ul>
                         <?php } else if($this->user_level == "Administrator") {?>
                         <ul class="nav nav-primary">
                              <li class="nav-section">
                                   <span class="sidebar-mini-icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                   </span>
                                   <h4 class="text-section">Menu Navigation</h4>
                              </li>
                              <li class="nav-item">
                                   <a href="<?php echo base_url('dasbor'); ?>">
                                        <i class="fas fa-user"></i>
                                        <p>Dashboard</p>
                                   </a>
                              </li>
                              <!-- <li class="nav-section">
                                   <span class="sidebar-mini-icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                   </span>
                                   <h4 class="text-section">Master Data</h4>
                              </li> -->
                              <li class="nav-item">
                                   <a href="<?php echo base_url('jadwal'); ?>">
                                        <i class="fas fa-table"></i>
                                        <p>Jadwal</p>
                                   </a>
                              </li>
                         </ul>
                         <?php } else { ?>
                         <ul class="nav nav-primary">
                              <li class="nav-section">
                                   <span class="sidebar-mini-icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                   </span>
                                   <h4 class="text-section">Menu Navigation</h4>
                              </li>
                              <li class="nav-item">
                                   <a href="<?php echo base_url('dasbor'); ?>">
                                        <i class="fas fa-user"></i>
                                        <p>Dashboard</p>
                                   </a>
                              </li>

                         </ul>
                         <?php } ?>
                    </div>
               </div>
          </div>
          <!-- End Sidebar -->


          <!-- ============================================================== -->
          <!-- Start Page Content here -->
          <!-- ============================================================== -->

          <?php $this->load->view($view); ?>

          <!-- ============================================================== -->
          <!-- End Page content -->
          <!-- ============================================================== -->
          <!-- Custom template | don't include it in your project! -->
          <!-- <div class="custom-template">
               <div class="title">Settings</div>
               <div class="custom-content">
                    <div class="switcher">
                         <div class="switch-block">
                              <h4>Logo Header</h4>
                              <div class="btnSwitch">
                                   <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                                   <button type="button" class="selected changeLogoHeaderColor"
                                        data-color="blue"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                                   <br />
                                   <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                                   <button type="button" class="changeLogoHeaderColor"
                                        data-color="light-blue2"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                                   <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                              </div>
                         </div>
                         <div class="switch-block">
                              <h4>Navbar Header</h4>
                              <div class="btnSwitch">
                                   <button type="button" class="changeTopBarColor" data-color="dark"></button>
                                   <button type="button" class="changeTopBarColor" data-color="blue"></button>
                                   <button type="button" class="changeTopBarColor" data-color="purple"></button>
                                   <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                                   <button type="button" class="changeTopBarColor" data-color="green"></button>
                                   <button type="button" class="changeTopBarColor" data-color="orange"></button>
                                   <button type="button" class="changeTopBarColor" data-color="red"></button>
                                   <button type="button" class="changeTopBarColor" data-color="white"></button>
                                   <br />
                                   <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                                   <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                                   <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                                   <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                                   <button type="button" class="changeTopBarColor" data-color="green2"></button>
                                   <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                                   <button type="button" class="changeTopBarColor" data-color="red2"></button>
                              </div>
                         </div>
                         <div class="switch-block">
                              <h4>Sidebar</h4>
                              <div class="btnSwitch">
                                   <button type="button" class="selected changeSideBarColor"
                                        data-color="white"></button>
                                   <button type="button" class="changeSideBarColor" data-color="dark"></button>
                                   <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                              </div>
                         </div>
                         <div class="switch-block">
                              <h4>Background</h4>
                              <div class="btnSwitch">
                                   <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                                   <button type="button" class="changeBackgroundColor selected"
                                        data-color="bg1"></button>
                                   <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                                   <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="custom-toggle">
                    <i class="flaticon-settings"></i>
               </div>
          </div> -->
          <!-- End Custom template -->
     </div>
     <!--   Core JS Files   -->
     <script src="<?php echo base_url('assets/template_new/assets/js/core/jquery.3.2.1.min.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_new/assets/js/core/popper.min.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_new/assets/js/core/bootstrap.min.js'); ?>"></script>

     <!-- jQuery UI -->
     <script
          src="<?php echo base_url('assets/template_new/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js'); ?>">
     </script>
     <script
          src="<?php echo base_url('assets/template_new/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js'); ?>">
     </script>

     <!-- jQuery Scrollbar -->
     <script
          src="<?php echo base_url('assets/template_new/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js'); ?>">
     </script>


     <!-- Chart JS -->
     <script src="<?php echo base_url('assets/template_new/assets/js/plugin/chart.js/chart.min.js'); ?>"></script>

     <!-- jQuery Sparkline -->
     <script
          src="<?php echo base_url('assets/template_new/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js'); ?>">
     </script>

     <!-- Chart Circle -->
     <script src="<?php echo base_url('assets/template_new/assets/js/plugin/chart-circle/circles.min.js'); ?>"></script>

     <!-- Datatables -->
     <script src="<?php echo base_url('assets/template_new/assets/js/plugin/datatables/datatables.min.js'); ?>">
     </script>

     <!-- Bootstrap Notify -->
     <script
          src="<?php echo base_url('assets/template_new./assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js'); ?>">
     </script>

     <!-- jQuery Vector Maps -->
     <!-- <script src="assets/template_new/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
     <script src="assets/template_new/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js">
     </script> -->

     <!-- Sweet Alert -->
     <script src="<?php echo base_url('assets/template_new/assets/js/plugin/sweetalert/sweetalert.min.js'); ?>">
     </script>

     <!-- Atlantis JS -->
     <script src="<?php echo base_url('assets/template_new./assets/js/atlantis.min.js'); ?>"></script>

     <!-- Atlantis DEMO methods, don't include it in your project! -->
     <script src="<?php echo base_url('assets/template_new/assets/js/setting-demo.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_new/assets/js/demo.js'); ?>"></script>
     <!-- <script>
     Circles.create({
          id: 'circles-1',
          radius: 45,
          value: 60,
          maxValue: 100,
          width: 7,
          text: 5,
          colors: ['#f1f1f1', '#FF9E27'],
          duration: 400,
          wrpClass: 'circles-wrp',
          textClass: 'circles-text',
          styleWrapper: true,
          styleText: true
     })

     Circles.create({
          id: 'circles-2',
          radius: 45,
          value: 70,
          maxValue: 100,
          width: 7,
          text: 36,
          colors: ['#f1f1f1', '#2BB930'],
          duration: 400,
          wrpClass: 'circles-wrp',
          textClass: 'circles-text',
          styleWrapper: true,
          styleText: true
     })

     Circles.create({
          id: 'circles-3',
          radius: 45,
          value: 40,
          maxValue: 100,
          width: 7,
          text: 12,
          colors: ['#f1f1f1', '#F25961'],
          duration: 400,
          wrpClass: 'circles-wrp',
          textClass: 'circles-text',
          styleWrapper: true,
          styleText: true
     })

     var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

     var mytotalIncomeChart = new Chart(totalIncomeChart, {
          type: 'bar',
          data: {
               labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
               datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
               }],
          },
          options: {
               responsive: true,
               maintainAspectRatio: false,
               legend: {
                    display: false,
               },
               scales: {
                    yAxes: [{
                         ticks: {
                              display: false //this will remove only the label
                         },
                         gridLines: {
                              drawBorder: false,
                              display: false
                         }
                    }],
                    xAxes: [{
                         gridLines: {
                              drawBorder: false,
                              display: false
                         }
                    }]
               },
          }
     });

     $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
          type: 'line',
          height: '70',
          width: '100%',
          lineWidth: '2',
          lineColor: '#ffa534',
          fillColor: 'rgba(255, 165, 52, .14)'
     });
     </script> -->

     <script>
     $(document).ready(function() {
          $('#myTable').DataTable();
     });
     </script>

     <?php echo $this->session->flashdata('notifikasi'); ?>
</body>

</html>