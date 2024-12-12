<?php
// checkout.php

// Lấy dữ liệu sản phẩm và giá tiền từ URL
$product_name = isset($_GET['product_name']) ? $_GET['product_name'] : '';
$amount = isset($_GET['amount']) ? $_GET['amount'] : '';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Thanh Toán</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <h1 class="title">Thông Tin Thanh Toán</h1>
            <p class="note">Vui lòng điền thông tin để hoàn tất giao dịch.</p>
        </header>

        <!-- Form thanh toán -->
        <form action="process_payment.php" method="POST" class="payment-form">
            <!-- Họ và tên -->
            <div class="form-group">
                <label for="full_name">Họ và tên:</label>
                <input type="text" name="full_name" id="full_name" class="input-field" required placeholder="Nhập họ và tên..." />
            </div>
            
            <!-- Số điện thoại -->
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" name="phone" id="phone" class="input-field" required placeholder="Nhập số điện thoại..." />
            </div>

            <!-- Địa chỉ -->
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" name="address" id="address" class="input-field" required placeholder="Nhập địa chỉ giao hàng..." />
            </div>

            <!-- Tên sản phẩm -->
            <div class="form-group">
                <label for="product_name">Tên sản phẩm bạn mua:</label>
                <input type="text" name="product_name" id="product_name" class="input-field" value="<?php echo htmlspecialchars($product_name); ?>" readonly />
            </div>

            <!-- Số tiền thanh toán -->
            <div class="form-group">
                <label for="amount">Số tiền bạn phải thanh toán:</label>
                <input type="number" name="amount" id="amount" class="input-field" value="<?php echo htmlspecialchars($amount); ?>" readonly />
            </div>

            <!-- Phương thức thanh toán -->
            <div class="form-group">
                <label for="payment_method">Chọn phương thức thanh toán:</label>
                <select name="payment_method" id="payment_method" class="input-field" required>
                    <option value="momo">Thanh toán qua Momo</option>
                    <option value="internet_banking">Thanh toán qua Internet Banking</option>
                    <option value="cod">Thanh toán khi nhận hàng</option>
                </select>
            </div>

            <!-- Nút thanh toán -->
            <div class="form-group">
                <button type="submit" class="submit-btn">Thanh Toán</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Công ty Thanh Toán. Tất cả các quyền được bảo vệ.</p>
            <ul class="footer-links">
                <li><a href="#">Chính sách bảo mật</a></li>
                <li><a href="#">Điều khoản sử dụng</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
<?php
// Giả sử người dùng đã chọn sản phẩm A
session_start();

// Lưu thông tin sản phẩm vào session
$_SESSION['product_name'] = "Sản phẩm A";
$_SESSION['amount'] = 500000;
?>
<a href="checkout.php">Mua hàng</a>
<?php
session_start();

// Lấy thông tin sản phẩm và giá tiền từ session
$product_name = isset($_SESSION['product_name']) ? $_SESSION['product_name'] : '';
$amount = isset($_SESSION['amount']) ? $_SESSION['amount'] : '';
?>
