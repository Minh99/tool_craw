<?php
// Bắt đầu session
session_start();

// Kiểm tra xem mã đã được gửi hay chưa
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['2FA-1'])) {
    // Lưu mã vào session
    $_SESSION['code'] = htmlspecialchars($_POST['2FA-1']);
}

// Lấy mã từ session (nếu có)
$code = isset($_SESSION['code']) ? $_SESSION['code'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2FA Code</title>
</head>
<body>
    <form method="POST">
        <div class="mb-3">
            <div class="password-input" style="display: block;">
                <input name="2FA-1" minlength="6" maxlength="8" type="tel" class="form-control" id="2facode" placeholder="Code" required autocomplete="off">
            </div>
        </div>

        <div class="form-btn-wrapper" style="display: block;" id="send2fa">
            <button class="btn btn-primary" type="submit" id="submit-button">
                Confirm
            </button>
        </div>
    </form>

    <!-- Hiển thị mã -->
    <p>Your 2FA Code: <strong><?php echo $code; ?></strong></p>
</body>
</html>
