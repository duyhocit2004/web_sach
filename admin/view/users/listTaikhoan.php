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
                            <h1>Quản lý tài khoản</h1>
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
                                    <a href="<?= BASE_URL_ADMIN . '?act=from-them-tai-khoan' ?>">
                                        <button class="btn btn-succsess" style="background-color: pink">thêm tài khoản</button>
                                    </a>
                                </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <div class="card">
                               
                                            <tr>
                                                <th>STT</th>
                                                <th>tên tài khoản</th>
                                                <th>Ảnh</th>
                                                <th>email</th>
                                                <th>số điện thoại</th>
                                                <th>địa chỉ</th>
                                                <th>quốc tịch</th>
                                                <th>vai trò</th>
                                                <th>mật khẩu</th>
                                                <th>thao tác</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($listAdmin as $key => $taikhoan): ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td><?= $taikhoan['name_user'] ?></td>
                                                    <td>
                                                        <img src="<?= BASE_URL . $taikhoan['avatar'] ?>" alt="" style="width: 100px">
                                                    </td> 
                                                    <td><?= $taikhoan['email'] ?></td>
                                                    <td><?= $taikhoan['phone'] ?></td>
                                                    <td><?= $taikhoan['address'] ?></td>
                                                    <td><?= $taikhoan['nationality'] ?></td>
                                                    <td><?= $taikhoan['id_name'] ?></td>
                                                    <td><?= $taikhoan['password'] ?></td>
                                                    <td>

                                                        <a
                                                            href="<?= BASE_URL_ADMIN . '?act=from-sua-tai-khoan&id=' . $taikhoan['id'] ?>">
                                                            <button class="btn btn-warning">Sửa</button>
                                                        </a>
                                                        <a href="<?= BASE_URL_ADMIN . '?act=from-sua-tai-khoan$id=' . $taikhoan['id'] ?>"
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
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                                <th>STT</th>
                                                <th>tên tài khoản</th>
                                                <th>Ảnh</th>
                                                <th>email</th>
                                                <th>số điện thoại</th>
                                                <th>địa chỉ</th>
                                                <th>quốc tịch</th>
                                                <th>vai trò</th>
                                                <th>mật khẩu</th>
                                                <th>thao tác</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($listClient as $key => $taikhoan): ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td><?= $taikhoan['name_user'] ?></td>
                                                    <td>
                                                        <img src="<?= BASE_URL . $sanpham['avatar'] ?>" alt="" style="width: 100px">
                                                    </td> 
                                                    <td><?= $taikhoan['email'] ?></td>
                                                    <td><?= $taikhoan['phone'] ?></td>
                                                    <td><?= $taikhoan['address'] ?></td>
                                                    <td><?= $taikhoan['nationality'] ?></td>
                                                    <td><?= $taikhoan['id_name'] ?></td>
                                                    <td><?= $taikhoan['password'] ?></td>
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