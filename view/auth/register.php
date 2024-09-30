<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login37.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Sep 2024 12:30:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đăng kí</title>
    <link rel="stylesheet" type="text/css" href="assets/login/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/iofrm-theme43.css">
</head>
<body>
<div class="form-body form-left">
        <div class="iofrm-layout">
            <div class="img-holder">
                <div class="bg"></div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                    <div class="website-logo-inside logo-normal">
                            <img class="logo-size" height="100px" style="width: 300px;" src="uploads/clients/logo/logo.png" alt="">                        
                        </div>
                        <h3 class="font-md">đăng kí tài khoản</h3>
                        <form action ="<?= BASE_URL . '?act=post-register' ?>" method="POST">
                            <input class="form-control" type="name_user" name="name_user" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button d-flex">
                                <button id="submit" type="submit" class="btn btn-primary">đăng kí</button>
                                <a href="?act=login" class="btn btn-outline-primary">đăng nhập</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="assets/login/js/jquery.min.js"></script>
<script src="assets/login/js/popper.min.js"></script>
<script src="assets/login/js/bootstrap.bundle.min.js"></script>
<script src="assets/login/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login37.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Sep 2024 12:30:14 GMT -->
</html>