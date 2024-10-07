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
                            <h1>Sửa thông tin: <?= $sanPham['book_name'] ?></h1>
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
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin sản phẩm</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <form action="<?= BASE_URL_ADMIN . '?act=sua-san-pham' ?>" method="post" enctype="multipart/form-data">

                            <div class="card-body">
                                <!-- 1 -->
                                <div class="form-group">
                                    <input type="hidden" name="sanpham_id" value="<?= $sanPham['id'] ?>">
                                    <label for="book_name">Tên sản phẩm</label>
                                    <input type="text" id="book_name" name="book_name" class="form-control"
                                        value="<?= $sanPham['book_name'] ?>">
                                </div>
                                <!-- 2 -->
                                <div class="form-group">
                                    <label for="book_name">Tiêu đề sản phẩm</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="<?= $sanPham['title'] ?>">
                                </div>
                                <!-- 3 -->
                                <div class="form-group">
                                    <label for="inputStatus">Tên tác giả</label>
                                    <select id="inputStatus" name="author_id" class="form-control custom-select">
                                        <?php foreach ($listDanhMuc as $tacGia): ?>
                                            <option <?= $tacGia['id'] == $sanPham['author_id'] ? 'selected' : '' ?>
                                                value="<?= $tacGia['id']; ?>"><?= $tacGia['name']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>


                                <!-- 4 -->
                                <div class="form-group">
                                    <label for="inputStatus">Thể loại</label>
                                    <select id="inputStatus" name="genre_id" class="form-control custom-select">
                                        <?php foreach ($listTheLoai as $theLoai): ?>
                                            <option <?= $theLoai['id'] == $sanPham['genre_id'] ? 'selected' : '' ?>
                                                value="<?= $theLoai['id']; ?>"><?= $theLoai['name']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <!-- 5 -->
                                <div class="form-group">
                                    <label for="published_date">Ngày xuất bản</label>
                                    <input type="date" id="published_date" name="published_date"
                                        class="form-published_date" value="<?= $sanPham['published_date'] ?>">
                                </div>
                                <!-- 6 -->
                                <div class="form-group">
                                    <label for="price">Giá sản phẩm</label>
                                    <input type="number" id="price" name="price" class="form-control"
                                        value="<?= $sanPham['price'] ?>">
                                </div>
                                <!-- 7 -->
                                <div class="form-group">
                                    <label for="image">Ảnh sản phẩm</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                                <!-- 8 -->
                                <div class="form-group">
                                    <label for="description">Mô tả sản phẩm</label>
                                    <textarea id="description" name="description" class="form-control" rows="4"><?= $sanPham['description'] ?></textarea>
                                </div>  
                                <!-- 9 -->
                                <div class="form-group">
                                    <label for="quantity">Số lượng sản phẩm</label>
                                    <input type="number" id="quantity" name="quantity" class="form-control"
                                        value="<?= $sanPham['quantity'] ?>">
                                </div>
                                        
                            </div>
                            <!-- /.card-body -->
                             <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Sửa thông tin</button>
                             </div>
                        </div>
                        </form>
                        <!-- /.card -->
                    </div>
                </div>
            <!-- /.content -->


        </div>
         <!-- footer -->
 <?php require_once '../admin/view/playout/footer.php' ?>
    <!-- end_footer -->
 
<!-- jQuery -->
<?php require_once '../admin/view/playout/js.php' ?>

</body>

</html>