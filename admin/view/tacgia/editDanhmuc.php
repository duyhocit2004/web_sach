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
                                    <h1>Sửa thông tin: <?= $tacGia['name'] ?></h1>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?= BASE_URL_ADMIN . '?act=sua-tac-gia' ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <input type="hidden" name="tacgia_id" value="<?= $tacGia['id'] ?>">
                                                <label>Tên Tác Giả</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="<?= $tacGia['name']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Ảnh</label>
                                                <input type="file" id="img_author" name="img_author"
                                                    class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>bio</label>
                                                <input type="text" class="form-control" id="bio" name="bio"
                                                    value="<?= $tacGia['bio']; ?>">
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