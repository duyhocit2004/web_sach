<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm</title>
</head>
<body>
    <h1>Kết quả tìm kiếm</h1>
    
    <?php if (!empty($listSanPham)) : ?>
        <ul>
            <?php foreach ($listSanPham as $product) : ?>
                <li><?php echo htmlspecialchars($product['book_name']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Không tìm thấy sản phẩm nào.</p>
    <?php endif; ?>
</body>
</html>
