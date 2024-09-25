<?php
  var_dump($_SESSION['user_admin']);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../admin/assets/index3.html" class="brand-link">
    <img src="../admin/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../admin/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"></a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item">
          <a href="<?= BASE_URL_ADMIN . '?act=tai-khoan'?>" class="nav-link">
            <i class="fas fa-user"></i></i>
            <p>
              Quản Lý tài khoản
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL_ADMIN . '?act=tac-gia' ?>" class="nav-link">
          <i class="fas fa-user-tie"></i> </i>
            <p>
              Danh Mục Tác Giả
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL_ADMIN . '?act=products'?>" class="nav-link">
            <i class="fas fa-book"></i></i>
            <p>
              Quản Lý Sản Phẩm
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL_ADMIN . '?act=the-loai'?>" class="nav-link">
          <i class="fas fa-won-sign"></i></i>
            <p>
              Quản Lý Thể Loại
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL_ADMIN . '?act=don-hang'?>" class="nav-link">
            <i class=" fas fa-regular fa-copy"></i>
            <p>
              Quản Lý Đơn hàng
            </p>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>