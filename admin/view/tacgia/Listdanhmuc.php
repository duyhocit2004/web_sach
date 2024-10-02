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
                            <h1>Quản lý Danh mục Tác giả</h1>
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
                        <div class="card">
                        <div class="card-header">
                                    <a href="<?= BASE_URL_ADMIN . '?act=form-them-tac-gia' ?>">
                                        <button class="btn btn-succsess" style="background-color: pink">Thêm Tác Giả</button>
                                    </a>
                                </div>  
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên Tác Giả</th>
                                                <th>Ảnh</th>
                                                <th>Bio</th>
                                                <th>Thao tác</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($listDanhMuc as $key => $tacgia): ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td><?= $tacgia['name'] ?></td>
                                                    <td>
                                                        <img src="<?= BASE_URL . $tacgia['img_author'] ?>" alt="" style="width: 100px">
                                                    </td> 
                                                    <td><?= $tacgia['bio'] ?></td>
                                                    <td>
                                                        <a href="<?= BASE_URL_ADMIN . '?act=form-sua-tac-gia&id_tacgia=' . $tacgia['id'] ?>">
                                                            <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                        </a>
                                                        <a href="<?= BASE_URL_ADMIN . '?act=xoa-tac-gia&id_tacgia=' . $tacgia['id'] ?>" 
                                                            onclick="return confirm('Ban co muon xoa')">
                                                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        </a>

                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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