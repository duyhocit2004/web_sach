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
                                    <li class="breadcrumb-item active" aria-current="page">Liên hệ với chúng tôi</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- google map start -->
        <div class="map-area section-padding">
            <div id="google-map"></div>
        </div>
        <!-- google map end -->

        <!-- contact area start -->
        <div class="contact-area section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-message">
                            <h4 class="contact-title">Tell Us Your Project</h4>
                            <?php if (isset($_SESSION['success_message'])): ?>
                                <div class="alert alert-success">
                                    <?= $_SESSION['success_message']; ?>
                                </div>
                                <?php unset($_SESSION['success_message']); // Xóa thông báo sau khi hiển thị ?>
                            <?php endif; ?>
                            
                            <form action="<?= BASE_URL_ADMIN . '?act=them-lien-he' ?>" method="post"
                                class="contact-form">

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="name" placeholder="Nhập Tên *" type="text" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="phone" placeholder="Nhâp Số Điện Thoại *" type="text" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="subject" placeholder="Nhập Chủ Đề *" type="text">
                                    </div>
                                    <div class="col-12">

                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Nhập tin nhẳn *" name="message" class="form-control2"
                                                required=""></textarea>
                                        </div>

                                        <div class="contact-btn">
                                            <button type="submit" class="btn btn-sqr">Gửi</button>
                                        </div>

                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <h4 class="contact-title">Liên Hệ</h4>

                            <ul>
                                <li><i class="fa fa-fax"></i> Địa chỉ : Cao Đẳng FPT Polytechnic</li>
                                <li><i class="fa fa-phone"></i> + 0962139512 </li>
                                <li><i class="fa fa-envelope-o"></i>E-mail: lechinh2905@gmail.com</li>
                            </ul>
                            <div class="working-time">
                                <h6>Thời gian làm việc</h6>
                                <p><span>Thứ 2 – 7:</span>08AM – 22PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->


    <!-- offcanvas mini cart end -->

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <?php require_once "./view/playout2/footer.php" ?>
    <!-- offcanvas mini cart end -->

    <!-- JS
============================================ -->
    <?php require_once "./view/playout2/js.php" ?>
</body>


<!-- Mirrored from htmldemo.net/corano/corano/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:54:03 GMT -->

</html>