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


        <?php if (isset($_SESSION['error']['delete'])) { ?> 
            <p class="text-danger"><?= $_SESSION['error']['delete'] ?></p>
        <?php } ?>
        
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
                                    <h3 class="card-title">Sửa thể loại</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?= BASE_URL_ADMIN . '?act=sua-the-loai' ?>" method="POST">
                                    <input type="text" name="id" value="<?= $tacGia['id'] ?>" hidden>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Tên Tác Giả</label>
                                            <input type="text" class="form-control" name="name" value="<?= $tacGia['name'] ?>"
                                                placeholder="Nhập tên thể loại">
                                            <?php if (isset($errors['name'])) { ?> 
                                                <p class="text-danger"><?= $errors['name'] ?></p>
                                            <?php } ?>
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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