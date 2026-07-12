<?php

if (isset($_SESSION['id'])){
    $sql = "SELECT * FROM cart WHERE MaK= {$_SESSION['id']}";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows >=0) {
    ?>
    <div class="header__cart have" href="#">
        <i class="fas fa-shopping-basket"></i>
        <div class="header__cart-amount">
            <?php
            // Đếm tổng số lượng sản phẩm trong giỏ hàng
            $total_items_query = "SELECT SUM(SoLuong) AS TotalItems FROM cart WHERE MaK= {$_SESSION['id']}";
            $total_items_result = $conn->query($total_items_query);
            if ($total_items_result->num_rows > 0) {
                $total_items_row = $total_items_result->fetch_assoc();
                if ($total_items_row['TotalItems'] !== null) {
                    echo $total_items_row['TotalItems'];
                } else {
                    echo '0';
                }
            } else {
                echo '0';
            }
            
            ?>
        </div>
        <div class="header__cart-wrap">
            <ul class="order__list">
                <?php

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <li class="item-order" data-product-id="<?php echo $row['MaSP']; ?>">
                        <div class="order-wrap">
                            <a href="product.php" class="order-img">
                                <img src="<?php echo $row['HinhAnh']; ?>" alt="">
                            </a>
                            <div class="order-main">
                               <a href="product.php?id=<?php echo $row['MaSP']; ?>" class="order-main-name"><?php echo $row['TenSP']; ?></a>
                                <div class="order-main-price"><?php echo number_format($row['Gia']); ?> ₫</div>
                            </div>
                            <a href="#" class="order-close" onclick="confirmAndRemove('<?php echo $row['MaSP']; ?>')"><i class="far fa-times-circle"></i></a>
                        </div>
                    </li>
                <?php
                }
                ?>

                <script>

                    function confirmAndRemove(productId) {
                        if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')) {
                            removeProduct(productId);
                        }
                        return false; // Ngăn chặn trình duyệt thực hiện hành động mặc định của liên kết
                    }

                    function removeProduct(productId) {
                        // Gửi yêu cầu Ajax để xóa sản phẩm khỏi giỏ hàng
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', 'removeProduct.php', true);
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState == 4 && xhr.status == 200) {
                                // Xóa sản phẩm khỏi giao diện người dùng nếu xóa thành công
                                var productToRemove = document.querySelector('[data-product-id="' + productId + '"]').closest('.item-order');
                                if (productToRemove) {
                                    productToRemove.remove(); 
                                    alert(xhr.responseText); // Hiển thị thông báo
                                    location.reload(); // Load lại trang sau khi hiển thị thông báo                             

                                }
                            }
                        };
                        xhr.send('product_id=' + productId);
                    }
                </script>
            </ul>
            <!-- Tổng số tiền của giỏ hàng -->
            <div class="total-money">
                <?php
                $total_money_query = "SELECT SUM(gia * SoLuong) AS TotalMoney FROM cart WHERE MaK ={$_SESSION['id']}";
                $total_money_result = $conn->query($total_money_query);
                if ($total_money_result->num_rows > 0) {
                    $total_money_row = $total_money_result->fetch_assoc();
                    echo "Tổng cộng: " . number_format($total_money_row['TotalMoney']) . "đ";
                } else {
                    echo "Tổng cộng: 0đ";
                }
                ?>
            </div>
            <!-- Nút điều hướng -->
            <a href="cart.php" class="btn btn--default cart-btn">Xem giỏ hàng</a>
            <a href="pay.php" class="btn btn--default cart-btn orange">Thanh toán</a>
        </div>
    </div>
            
<?php
    }
}
?>