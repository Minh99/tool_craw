<?php
session_start();

// Lấy dữ liệu JSON từ yêu cầu
$data = json_decode(file_get_contents('php://input'), true);

// Kiểm tra và lưu thông tin vào session
if (isset($data['fullName'], $data['email'], $data['phone'], $data['password1'])) {
    $_SESSION['fullName'] = $data['fullName'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['phone'] = $data['phone'];
    $_SESSION['password1'] = $data['password1'];

    http_response_code(200);
    echo json_encode(['status' => 'success', 'message' => 'Session data saved.']);
} else {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid data.']);
}
?>
