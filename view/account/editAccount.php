<!doctype html>
<html class="no-js" lang="en">
<?php require_once "./view/playout2/head.php" ?>

<!-- Mirrored from htmldemo.net/corano/corano/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:53:03 GMT -->

<head>


</head>

<body>
    <!-- Start Header Area -->
    <?php require_once "./view/playout2/header.php" ?>
    <!-- end Header Area -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">my-account</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- my account wrapper start -->
        <div class="my-account-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- My Account Page Start -->
                            <div class="myaccount-page-wrapper">
                                <!-- My Account Tab Menu Start -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="myaccount-tab-menu nav" role="tablist">
                                            <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> tài khoản</a>
                                            <a href="?act=login"><i class="fa fa-sign-out"></i> Logout</a>
                                        </div>
                                    </div>
                                    <!-- My Account Tab Menu End -->
                                    <!-- My Account Tab Content Start -->
                                    <div class="col-lg-9 col-md-8">
                                        <div class="tab-content" id="myaccountContent">
                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" class="account-info" id="account-info" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h5> thông tin cá nhân</h5>
                                                    <div class="account-details-form">
                                                        <form action="<?=  BASE_URL . '?act=postuser&id='. $account['id'] ?>" method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="first-name" class="">họ</label>
                                                                        <input type="text" id="first-name" name="firtname" value="<?= $firstname ?>" placeholder="First Name"  />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="last-name" class="">tên</label>
                                                                        <input type="text" id="last-name"  name="lastname" value="<?= $lastname ?>"  placeholder="Last Name"  />
                                                                    </div>
                                                                </div>
                                                                    <div class="single-input-item">
                                                                        <label for="email" class="">Email</label>
                                                                        <input type="email" id="email"  name="email" value="<?=$account['email'] ?>"  placeholder="Email Address"   />
                                                                    </div>
                                                                 <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="" class="">quốc tịch</label>
                                                                        <select  class="" name="nationality" id="">
                                                                            <option value="VietNam">Việt Nam</option>
                                                                            <option value="ThaiLand">thái lan</option>
                                                                            <option value="Cambodia">campuchia</option>
                                                                            <option value="India">ấn độ</option>
                                                                            <option value="USA">mỹ</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">  
                                                                    <div class="single-input-item">
                                                                        <label for="" class="">số điện thoại</label>
                                                                        <input type="text" id="" name="phone" value="<?=$account['phone'] ?>" placeholder="phone"  />
                                                                    </div>
                                                                </div>
                                                                <div class="single-input-item">
                                                                        <label for="" class="">địa chỉ</label>
                                                                        <input type="text" id="" name="address" value="<?=$account['address'] ?>"  placeholder="address"   />
                                                                </div>
                                                                <div class="single-input-item">
                                                                        <label for="" class="">avatar</label>
                                                                        <input type="file" id="" name="avatar"  placeholder="avatar"   />
                                                                    </div>
                                                            </div>
                                                           

                                                            <fieldset>
                                                                <legend>đổi mật khẩu</legend>
                                                                <div class="single-input-item">
                                                                    <label for="current-pwd" class="required">mật khẩu hiện tại</label>
                                                                    <input type="password" id="current-pwd" name="password" placeholder="Current Password" />
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="single-input-item">
                                                                            <label for="new-pwd" class="required">mật khẩu mới</label>
                                                                            <input type="password" id="new-pwd" name="new_password" placeholder="New Password" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="single-input-item">
                                                                            <label for="confirm-pwd" class="required">nhập lại mật khẩu</label>
                                                                            <input type="password" id="confirm-pwd" name="confirm_password" placeholder="Confirm Password" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="single-input-item">
                                                                <button  class="btn btn-sqr">thay đổi thông tin</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- Single Tab Content End -->
                                        </div>
                                    </div> <!-- My Account Tab Content End -->
                                </div>
                            </div> <!-- My Account Page End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- my account wrapper end -->
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- footer area start -->
    <?php require_once "./view/playout2/footer.php" ?>
    <!-- offcanvas mini cart end -->

    <!-- JS
============================================ -->
    <?php require_once "./view/playout2/js.php" ?>

</body>


<!-- Mirrored from htmldemo.net/corano/corano/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:53:43 GMT -->

</html>