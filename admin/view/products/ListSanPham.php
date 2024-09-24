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
                            <h1>Quản lý Danh Sách Sản Phẩm</h1>
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
                                    <a href="<?= BASE_URL_ADMIN . '?act=form-them-san-pham' ?>">
                                        <button class="btn btn-succsess" style="background-color: pink">Thêm Sản Phẩm</button>
                                    </a>
                                </div>  
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên Sách</th>
                                                <th>Ảnh</th>
                                                <th>Tên Tác giả</th>
                                                <th>Thể Loại</th>
                                                <th>Giá</th>
                                                <th>Mô Tả</th>
                                                <th>Thao tác</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($listSanPham as $key => $sanpham): ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td><?= $sanpham['book_name'] ?></td>
                                                    <td>
                                                        <img src="<?= BASE_URL . $sanpham['image'] ?>" alt="" style="width: 100px">
                                                    </td> 
                                                    <td><?= $sanpham['name'] ?></td>
                                                    <td><?= $sanpham['genres_name'] ?></td>
                                                    <td><?= $sanpham['price'] ?></td>
                                                    <td><?= $sanpham['description'] ?></td>
                                                    <td>
                                                        <a
                                                            href="<?= BASE_URL_ADMIN . '?act=form-sua-san-pham&id_sanpham=' . $sanpham['id'] ?>">
                                                            <button class="btn btn-warning">Sửa</button>
                                                        </a>
                                                        <a href="<?= BASE_URL_ADMIN . '?act=xoa-san-pham&id_sanpham=' . $sanpham['id'] ?>"
                                                            onclick="return confirm('Ban co muon xoa')">
                                                            <button class="btn btn-danger">Xóa</button>
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