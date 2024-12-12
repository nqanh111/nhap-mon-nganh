document.getElementById("paymentForm").addEventListener("submit", function(event) {
    event.preventDefault();
  
    // Lấy dữ liệu từ form
    const name = document.getElementById("name").value;
    const address = document.getElementById("address").value;
    const phone = document.getElementById("phone").value;
    const product = document.getElementById("product").value;
    const unitPrice = parseFloat(document.getElementById("unitPrice").value);
    const quantity = parseInt(document.getElementById("quantity").value);
  
    // Tính toán số tiền phải thanh toán
    const totalPrice = unitPrice * quantity;
    document.getElementById("totalPrice").textContent = totalPrice.toLocaleString('vi-VN');
  
    // Lấy phương thức thanh toán đã chọn
    const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
  
    // Hiển thị thông báo
    alert(`Thông tin thanh toán:
      Họ và tên: ${name}
      Địa chỉ: ${address}
      Số điện thoại: ${phone}
      Sản phẩm: ${product}
      Số tiền: ${totalPrice.toLocaleString('vi-VN')} VNĐ
      Phương thức thanh toán: ${getPaymentMethod(paymentMethod)}`);
  });
  
  // Hàm chuyển đổi phương thức thanh toán
  function getPaymentMethod(method) {
    switch (method) {
      case "momo":
        return "MoMo";
      case "internetBanking":
        return "Internet Banking";
      case "cashOnDelivery":
        return "Thanh toán khi nhận hàng";
      default:
        return "";
    }
  }
  