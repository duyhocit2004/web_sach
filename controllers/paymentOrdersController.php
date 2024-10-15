<?php
require 'vendor/autoload.php'; 

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
class PaymentOrdersController{


function execPostRequest()
{
            // Thông tin đơn hàng
        $order_id = 123; // ID đơn hàng
        $total_amount = 500000; // Tổng số tiền
        $payment_url = "http://localhost/web_ban_sach/?act=thanh-toan"; // URL thanh toán

        // Tạo QR code
        $qrCode = QrCode::create($payment_url)
            ->setSize(300);

        // Lưu QR code vào file
        $writer = new PngWriter();
        $result = $writer->write($qrCode);
       

        // Hoặc xuất ra trình duyệt
         
        // requi

    }
}