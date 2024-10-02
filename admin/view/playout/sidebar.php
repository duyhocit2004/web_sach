<?php
  // var_dump($_SESSION['user_admin']);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../admin/assets/index3.html" class="brand-link">
    <img src="../uploads/clients/logo/logo.png" alt="AdminLTE Logo" width="200px" class=""
      style="opacity: .8">
  </a>

  <?php if(isset($_SESSION['user_admin'])): ?>
  <!-- Sidebar -->
     <div class="sidebar">
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAmQMBIgACEQEDEQH/xAAbAAEBAAIDAQAAAAAAAAAAAAAABgQFAQMHAv/EADcQAAICAQIDBAYIBwEAAAAAAAABAgMEBREhMVEGEkFhIjJxgZHRExQjUmJyoeEzQlOSscHwQ//EABUBAQEAAAAAAAAAAAAAAAAAAAAB/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8ApgAVQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA7KKbci1V0VynN+CQHWCgxey900pZV0a192C7z+JnR7MYSXpWXyf5l8gJEFVd2Woa+wyLIvpNKS/wBGlz9HzMFOVkO/Wv8A0hxXv6Aa8AAAAAAAAAAAAAAAAAeAGTp+Fbn5MaaeHjKX3UW+n4FGBT9HRH80nzk/Mxuz+CsPBjKUdrbUpT8uiNoRAAADhrfmcgCX1/Q41xllYcdorjZWly80Th6U0mmmQuuYX1HPnCC2qn6cPZ0KNeAAoAAAAAAAAAAB34VSvzKKnynZFP4nQZmjtLVcRv8AqxQF8uXA5C5AiAAAAAAT3bClPGx7lzjPu+5r9ihNJ2tklpkF1tX+GBHgAqgAAAAAAAAAAH1XN12RnH1otNe4+QB6Ni3xyceq6HqzipHaSnZfU1VL6lfLaMnvXJ+D6FUiI5AAAAACV7XZKnfTjRfqLvSXm+X/AHmUGo51WBjyutfL1Y+Mn0IK+6eRfZda95ze7A6wAVQAAAAAAAAAAAAAKHSe0TqjGnP70orgrVzXt+ZPAD0XHyaMiHfothZH8L3O3c83hOdcu9XOUH1i9jJWp58Vssy/+9kRftpcWazUNcw8SLjCautX8kHv8WR9uXk38Lsi2xdJTbR0AZOfnX59/wBLe+XCMVyivIxgCqAAAAAAAAAAAAAABkYeDkZs+7jVufWXJL3gY4KjC7MVx2lmWubf8kOC+PibnHwMXFW1FFcPNLj8QIWrDyruNWNbJdVBnfHR9Ra4Ylnv2RdgCElpGoRW7xLPdxMW3Hup/jU2Q/NFo9F2OGt+fFdGB5uC7ytIwcnd2Y8VL70PRf6GjzezNte88O36Vfclwfx8QNAD7sqnVNwti4TXOMlsz4AAAAAAAAAALi9kt2+SRWaFoix4xycuO93OMHyh+4GHpHZ+VqjdnpxhzVXJv29CmqqrprVdUFCEeSS4H2AAAAAAKAAAAAMXPwMfOr7mRXu16slwcfYyR1TSb9Pk5cbKG+FiXLyZcHzZXGyDhZFSi1s0/EI84Bt9c0d4E/paE3jyft7j6ew1AAAAADP0XA+v5sYSX2UPSs9nT3gbXs1pfLNvjz/hRfh+L5FKcRiopKK2S5I5AAAKAAAAAAAAAAAAAPi2uFtcq7IqUJLZp8mQ+rafPT8p1vd1y4wl1XzLswNawVnYUoJfaR9Kt+fT3hEKBxXPmAOeZYdlqoR0uNiXpWSbk/0AA3AACgAAAAAAAAAAAAAAAAfIACH16mFWr5EYLZNqW3m1uzXABH//2Q==" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block"><?= $_SESSION['user_admin']['name']?></a>
       </div>
  </div>
  <?php else: ?>

  <?php endif; ?>
   



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