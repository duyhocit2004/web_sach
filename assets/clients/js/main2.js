

var quantities = document.querySelectorAll('.quanlity1'); // Lấy tất cả các input có class là quanlity1

quantities.forEach(function(input) {
    var quantity = input.value; // Lấy giá trị của input
    console.log(quantity); 
});
// Hiển thị giá trị trong console
$('.quanlity1').on('input', function() {
    var quantity = $(this).val(); // Lấy giá trị của input hiện tại
    console.log(quantity); // Hiển thị giá trị trong console
});

