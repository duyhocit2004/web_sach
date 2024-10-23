<?php
require 'vendor/autoload.php'; 

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
class PaymentOrdersController{


    function createPaymentRequest() {
        $partnerCode = "YOUR_PARTNER_CODE"; // Thay thế bằng Partner Code của bạn
        $accessKey = "YOUR_ACCESS_KEY"; // Thay thế bằng Access Key của bạn
        $secretKey = "YOUR_SECRET_KEY"; // Thay thế bằng Secret Key của bạn
        $orderId = time();
        $redirectUrl = "http://yourwebsite.com/success.php"; // URL quay lại sau khi thanh toán thành công
        $ipnUrl = "http://yourwebsite.com/ipn.php"; // URL để nhận thông báo
        $amount = 10000; // Số tiền thanh toán (đơn vị VNĐ)
        $orderInfo = "Thanh toán đơn hàng #" . $orderId;
    
        $requestId = time();
        $requestType = "captureWallet";
    
        // Tạo thông tin yêu cầu
        $rawHash = "partnerCode=$partnerCode&accessKey=$accessKey&requestId=$requestId&amount=$amount&orderId=$orderId&orderInfo=$orderInfo&redirectUrl=$redirectUrl&ipnUrl=$ipnUrl";
        $signature = hash_hmac('sha256', $rawHash, $secretKey);
    
        $data = [
            "partnerCode" => $partnerCode,
            "accessKey" => $accessKey,
            "requestId" => $requestId,
            "amount" => $amount,
            "orderId" => $orderId,
            "orderInfo" => $orderInfo,
            "redirectUrl" => $redirectUrl,
            "ipnUrl" => $ipnUrl,
            "signature" => $signature,
            "requestType" => $requestType
        ];
    
        $jsonData = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://test-payment.momo.vn/gw_payment/transactionProcessor");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json;charset=UTF-8",
            "Content-Length: " . strlen($jsonData)
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    
        $response = curl_exec($ch);
        curl_close($ch);
    
        return json_decode($response, true);
        
    }
    
    public function checkpayment(){
        $response = createPaymentRequest();
        if (isset($response['payUrl'])) {
            // Chuyển hướng người dùng đến URL thanh toán
            header("Location: " . $response['payUrl']);
            exit();
        } else {
            echo "Có lỗi xảy ra: " . $response['message'];
        }
        
    }

}