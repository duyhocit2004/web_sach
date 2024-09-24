
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>đăng nhập</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="../admin/assets/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="../admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="../admin/assets/dist/css/adminlte.min.css?v=3.2.0">
<style>
    body{
        background-image: url('https://png.pngtree.com/thumb_back/fw800/back_our/20190621/ourmid/pngtree-world-book-day-423-charity-banner-image_190996.jpg');
        background-size: 100% auto;
        
    }
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">

<div class="card card-outline card-primary">
<div class="card-header text-center">
<a href="../../index2.html" class="h1"><b>Admin</b>Sách</a>
</div>
<div class="card-body">
<p class="login-box-msg">Quản lý</p>
<?php if(isset($_SESSION['error'])){?>
        <p class="text-danger"> <?= $_SESSION['error'] ?> </p>
    <?php } else { ?>
        <p> </p>
        <?php } ?>
<form action="<?= BASE_URL_ADMIN .'?act=login'?>" method="post">
<div class="input-group mb-3">
<input type="email" class="form-control" name="email" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope">

</span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="text" name="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row d-flex justify-content-center">
<div class="col-4 ">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>

</div>
</form>
</div>

</div>

</div>


<script src="../admin/assets/plugins/jquery/jquery.min.js"></script>

<script src="../admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../admin/assets/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
