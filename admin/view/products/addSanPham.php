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
                        <div class="col-sm-12">
                            <h1>Form</h1>
                        </div>
                        <div class="col-sm-12">
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
                                    <h3 class="card-title">Thêm Sản Phẩm</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?= BASE_URL_ADMIN . '?act=them-san-pham' ?>" method="POST" enctype="multipart/form-data">
                                    <!-- 1 -->
                                    <div class="card-body">
                                        <div class="form-group col-12" >
                                            <label>Tên Sản Phẩm</label>
                                            <input type="text" class="form-control" name="book_name"
                                                placeholder="Nhập tên sản phẩm">
                                            <?php if (isset($_SESSION['error']['book_name'])) { ?> 
                                                <p class="text-danger"><?= $_SESSION['error']['book_name'] ?></p>
                                            <?php } ?>
                                        </div>

                                        <!-- 2 -->
                                        <div class="form-group col-12">
                                            <label>Tiêu đề</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Nhập tiêu đề sản phẩm">
                                            <?php if (isset($_SESSION['error']['title'])) { ?> 
                                                <p class="text-danger"><?= $_SESSION['error']['title'] ?></p>
                                            <?php } ?>
                                        </div>

                                        <!-- 3 -->
                                        <div class="form-group col-12" >
                                            <label>Tên Tác giả</label>
                                           <select class="form-control" name="author_id" id="exampleFormControlSelect1">
                                                <option selected disabled>Chọn tác giả</option>
                                               <?php foreach($listDanhMuc as $tacGia): ?>
                                                <option value="<?= $tacGia['id'] ?>"><?= $tacGia['name'] ?></option>
                                               <?php endforeach ?>
                                           </select>
                                            <?php if (isset($_SESSION['error']['author_id'])) { ?> 
                                                <p class="text-danger"><?= $_SESSION['error']['author_id'] ?></p>
                                            <?php } ?>
                                        </div>

                                        <!-- 4 -->
                                         <!-- THỂ LOẠI CẦN CODE LẠI -->
                                        <div class="form-group col-12">
                                            <label>Thể loại</label>
                                            <select class="form-control" name="genre_id" id="exampleFormControlSelect1">
                                                <option selected disabled>Chọn thể loại</option>
                                               <?php foreach($listTheLoai as $theloai): ?>
                                                <option value="<?= $theloai['id'] ?>"><?= $theloai['name'] ?></option>
                                               <?php endforeach ?>
                                           </select>
                                            <?php if (isset($_SESSION['error']['genre_id'])) { ?> 
                                                <p class="text-danger"><?= $_SESSION['error']['genre_id'] ?></p>
                                            <?php } ?>
                                        </div>

                                        <!-- 5 -->
                                        <div class="form-group col-12">
                                            <label>Ngày xuất bản</label>
                                            <input type="date" class="form-control" name="published_date"
                                                placeholder="Nhập ngày xuất bản">
                                            <?php if (isset($_SESSION['error']['published_date'])) { ?> 
                                                <p class="text-danger"><?= $_SESSION['error']['published_date'] ?></p>
                                            <?php } ?>
                                        </div>

                                        <!-- 12 -->
                                        <div class="form-group col-12">
                                            <label>Giá</label>
                                            <input type="text" class="form-control" name="price"
                                                placeholder="Nhập Giá sản phẩm">
                                            <?php if (isset($_SESSION['error']['price'])) { ?> 
                                                <p class="text-danger"><?= $_SESSION['error']['price'] ?></p>
                                            <?php } ?>
                                        </div>

                                        <!-- 7 -->
                                        <div class="form-group col-12">
                                            <label>Ảnh</label>
                                            <input type="file" class="form-control" name="image">
                                            <?php if (isset($_SESSION['error']['image'])) { ?> 
                                                <p class="text-danger"><?= $_SESSION['error']['image'] ?></p>
                                            <?php } ?>
                                        </div>
                                        <!-- 8 -->
                                        <div class="form-group col-12">
                                            <label>Mô Tả</label>
                                            <!-- <textarea name="description" id="" class="form-control" placeholder="Nhập mô tả"></textarea> -->
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                        <!-- 9 -->
                                         <!-- SAU BỔ SUNG TIẾP -->
                                        <!-- <div class="form-group col-12" >
                                            <label>Trạng Thái</label>
                                           <select class="form-control" name="" id="exampleFormControlSelect1">
                                                <option selected disabled>Chọn tác giả sản phẩm</option>
                                                <option value="1">Còn bán</option>
                                                <option value="2">Dừng bán</option>
                                           </select>
                                            <?php if (isset($_SESSION['error'][''])) { ?> 
                                                <p class="text-danger"><?= $_SESSION['error'][''] ?></p>
                                            <?php } ?>
                                        </div> -->

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