<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>

      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>

      <li <?php if ($page == 'pegawai') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Pegawai</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Data Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('kota') ?>"><i class="fa fa-circle-o"></i> Data Kota</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('Jabatan') ?>"><i class="fa fa-briefcase"></i> Data Jabatan</a></li>
        </ul>
        <ul class="treeview-menu">
        </ul>
      </li> <!-- /list treeview -->
      <!-- <li <?php if ($page == 'presensi') {
                  echo 'class="active"';
                } ?>>
        <a href="<?php echo base_url('Presensi'); ?>">
          <i class="fa fa-clipboard"></i>
          <span>Data Presensi</span>
        </a>
      </li> -->
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>