

<div class="container_cart">
        <div class="left-box-bill">
            <form id="orderForm" class="order-form">
                <h2>Thông Tin Người Đặt Hàng</h2>
                <label for="fullName">Họ và Tên:</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Địa Chỉ:</label>
                <textarea id="address" name="address" rows="4" required></textarea>

                
            </form>
            

            <h2>Voucher</h2>
            <div class="voucher">
                <input type="text" id="voucherCode" name="voucherCode" placeholder="Nhập mã voucher">
                <button type="button" id="applyVoucher">Áp Dụng</button>
            </div>
        </div>
        <div class="right-box-bill">
            
            <h2>Giỏ Hàng</h2>
            <div class="order-summary">
                <h2>Tóm Tắt Giỏ Hàng</h2>
                <ul>
                    <li><span>Sản phẩm A</span><span>$50.00</span></li>
                    <li><span>Sản phẩm B</span><span>$30.00</span></li>
                    <!-- Add more items as needed -->
                </ul>
                <div class="total">Tổng Cộng: <span>$80.00</span></div>
            </div>

            <h2 class="total">Tổng Cộng: <span id="totalAmount">$0.00</span></h2>

            <h2>Phương Thức Thanh Toán</h2>
            <div class="payment-method">
                <table>
                    <tr>
                        <td>
                            <input type="radio" name="paymentMethod" id="creditCard" value="cod">
                        </td>
                        <td>
                            <label for="creditCard">Thanh toán khi nhận hàng</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="paymentMethod" id="creditCard" value="momo">
                        </td>
                        <td>
                            <label for="creditCard">Thanh toán ví điện tử</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="paymentMethod" id="creditCard" value="banktransfer">
                        </td>
                        <td>
                            <label for="creditCard">Thanh toán ngân hàng</label>
                        </td>
                    </tr>


                </table>
                
                
            </div>

            <button type="button" class="checkout-btn" id="checkoutBtn">Thanh Toán</button>
        </div>
    </div>