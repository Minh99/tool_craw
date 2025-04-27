<?php
// Lấy địa chỉ IP của người dùng một cách chính xác
function getUserIP() {
    if (isset($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
        // IP từ ISP proxy
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // IP qua chuỗi proxy (chỉ lấy IP đầu tiên nếu có nhiều IP)
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        foreach ($ipList as $ip) {
            $ip = trim($ip); // Loại bỏ khoảng trắng thừa
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    } elseif (isset($_SERVER['REMOTE_ADDR']) && filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP)) {
        // IP mặc định từ client
        return $_SERVER['REMOTE_ADDR'];
    }

    // Nếu không xác định được IP
    return '0.0.0.0';
}

function get_nearest_timezone($cur_lat, $cur_long, $country_code = '') {
    if (!$country_code) {
        return 'Không xác định';
    }

    // Validate country code format (must be 2 letters)
    if (strlen($country_code) !== 2 || !ctype_alpha($country_code)) {
        return 'Không xác định';
    }

    try {
        $timezone_ids = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, strtoupper($country_code));
    } catch (ValueError $e) {
        return 'Không xác định';
    }

    if($timezone_ids && is_array($timezone_ids) && isset($timezone_ids[0])) {
        $time_zone = '';
        $tz_distance = 0;

        //only one identifier?
        if (count($timezone_ids) == 1) {
            $time_zone = $timezone_ids[0];
        } else {
            foreach($timezone_ids as $timezone_id) {
                $timezone = new DateTimeZone($timezone_id);
                $location = $timezone->getLocation();
                $tz_lat   = $location['latitude'];
                $tz_long  = $location['longitude'];

                $theta    = $cur_long - $tz_long;
                $distance = (sin(deg2rad($cur_lat)) * sin(deg2rad($tz_lat))) 
                + (cos(deg2rad($cur_lat)) * cos(deg2rad($tz_lat)) * cos(deg2rad($theta)));
                $distance = acos($distance);
                $distance = abs(rad2deg($distance));

                if (!$time_zone || $tz_distance > $distance) {
                    $time_zone   = $timezone_id;
                    $tz_distance = $distance;
                }
            }
        }
        return $time_zone;
    }
    return 'Không xác định';
}

// Lấy thông tin IP từ ipinfo.io
function getUserIPInfo() {
    $userIP = getUserIP();

    // Kiểm tra nếu IP là không hợp lệ
    if ($userIP === '0.0.0.0') {
        return "Không thể xác định địa chỉ IP của bạn.";
    }

    // Gọi API ipinfo.io với IP của người dùng
    $apiToken = "1272fa553e2680"; // Token API của bạn
    $url = "https://web-api.nordvpn.com/v1/ips/lookup/{$userIP}";
    
    // Sử dụng cURL để gọi API, đảm bảo đáng tin cậy hơn so với file_get_contents
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20); // Đặt timeout là 10 giây

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200 || $response === false) {
        return "Không thể lấy thông tin từ API.";
    }

    $data = json_decode($response, true);

    // Kiểm tra nếu API trả về dữ liệu hợp lệ
    if (isset($data['ip'])) {
        // Trả về thông tin IP theo định dạng yêu cầu
        return sprintf(
            "%s | %s | %s | %s | %s | %s",
            $data['ip'] ?? 'Không xác định',
            $data['city'] ?? 'Không xác định',
            $data['region'] ?? 'Không xác định',
            $data['country'] ?? 'Không xác định',
            $data['isp'] ?? 'Không xác định',
            get_nearest_timezone($data['latitude'], $data['longitude'], $data['country_code'] ?? '') ?? 'Không xác định'
        );
    } else {
        return "Không thể lấy thông tin IP.";
    }
}

// Gọi hàm và in kết quả
echo getUserIPInfo();
?>
