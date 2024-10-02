<header class="header-area header-wide">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- start logo area -->
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="<?= BASE_URL ?>">
                                    <!-- SỬA LOGO  -->
                                    <img src="uploads/clients/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- main menu area start -->
                        <div class="col-lg-6 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li>
                                                <a href="<?= BASE_URL ?>">Trang Chủ </a>
                                            </li>
                                            
                                            <li><a href="#">Sản Phẩm <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                  
                                                </ul>
                                            </li>
                                            <li><a href="#">Giới thiệu</a></li>
                                            <li><a href="#">Liên Hệ</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-4">
                            <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                                <div class="header-search-container">
                                    <button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
                                    <form class="header-search-box d-lg-none d-xl-block">
                                        <input type="text" placeholder="Nhập tên sách" class="header-search-field">
                                        <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-configure-area ">
                                    <ul class="nav justify-content-end">
                                        <!-- kiểm tra seesion đã có thông tin người đăng nhập hay chưa -->
                                        <?php if(isset($_SESSION['user_clients'])){ ?>
                                            <li class="py-2">
                                            <?php
                                                // tạo  biến mới lưu trữ email từ session
                                                $user = $_SESSION['user_clients']['email'];
                                                // Xử lý lấy phần tên người dùng
                                                // Hàm explode() chia một chuỗi thành một mảng.
                                                // vị trí cắt chuỗi từ "@"
                                                $username = explode("@" , $user)[0];
                                                echo $username;
                                                ?>
                                            </li>
                                            <li class="user-hover">  
                                              
                                                <a href="#">
                                                    <i class="pe-7s-user"></i>
                                                    <ul class="dropdown-list">
                                                        <li><a href="my-account.html">Tài Khoản</a></li>
                                                        <li><a href="?act=logout">đăng xuất</a></li>
                                                    </ul>
                                                </a>
                                     
                                            </li>
                                        <?php } else {?>
                                            <li class="user-hover">
                                            <a href="#">
                                                    <i class="pe-7s-user"></i>
                                                    <ul class="dropdown-list">
                                                    <li><a href="?act=login">Đăng Nhập</a></li>
                                                    <li><a href="?act=register">Đăng Ký</a></li>
                                                
                                                </ul>
                                                </a>                                
                                            </li>
                                            <?php }?>
                                        <li class="user-hover" >
                                            <a href="#" class="minicart-btn">
                                                <i class="pe-7s-shopbag"></i>
                                                <div class="notification">2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->

                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->
    </header>