<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../admin/view/playout/head.php' ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once '../admin/view/playout/nav.php' ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once '../admin/view/playout/sidebar.php' ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Thêm thể loại</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?= BASE_URL_ADMIN . '?act=them-tai-khoan' ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                        <div class="form-group">
                                            <label>tên</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="tên">
                                            <?php if (isset($errors['name'])) { ?> 
                                                <p class="text-danger"><?= $errors['name'] ?></p>
                                            <?php } ?>
                                        </div>
                                    

                                    
                                        <div class="form-group">
                                            <label>mật khẩu</label>
                                            <input type="text" class="form-control" name="password"
                                                placeholder="mật khẩu">
                                            <?php if (isset($errors['password'])) { ?> 
                                                <p class="text-danger"><?= $errors['password'] ?></p>
                                            <?php } ?>
                                        </div>
                                    

                                    
                                        <div class="form-group">
                                            <label>email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="rmail">
                                            <?php if (isset($errors['email'])) { ?> 
                                                <p class="text-danger"><?= $errors['email'] ?></p>
                                            <?php } ?>
                                        </div>

                                        <div class="form-group">
                                            <label>ảnh</label>
                                            <input type="file" class="form-control" name="avatar"
                                                placeholder="092231...">
                                            <?php if (isset($errors['avatar'])) { ?> 
                                                <p class="text-danger"><?= $errors['avatar'] ?></p>
                                            <?php } ?>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>số điện thoại</label>
                                            <input type="text" class="form-control" name="phone"
                                                placeholder="092231...">
                                            <?php if (isset($errors['phone'])) { ?> 
                                                <p class="text-danger"><?= $errors['phone'] ?></p>
                                            <?php } ?>
                                        </div>
                                    

                                    
                                        <div class="form-group">
                                            <label>địa chỉ</label>
                                            <input type="text" class="form-control" name="address"
                                                placeholder="địa chỉ">
                                            <?php if (isset($errors['address'])) { ?> 
                                                <p class="text-danger"><?= $errors['address'] ?></p>
                                            <?php } ?>
                                        </div>
                                   

                                   
                                        <div class="form-group">
                                            <label>quốc tịch</label>
                                            <input type="text" class="form-control" name="nationality"
                                                placeholder="quốc tịch">
                                            <?php if (isset($errors['nationality'])) { ?> 
                                                <p class="text-danger"><?= $errors['nationality'] ?></p>
                                            <?php } ?>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>vai trò</label>
                                            <select name="id_role" class="form-control" id="">
                                                <?php foreach($list as $role) : ?>
                                                <option value="<?=$role['id']?>"><?=$role['role']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                   

                                        <div class="card-footer d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->


        </div>
         <!-- footer -->
 <?php require_once '../admin/view/playout/footer.php' ?>
    <!-- end_footer -->
 
<!-- jQuery -->
<?php require_once '../admin/view/playout/js.php' ?>

</body>

</html>