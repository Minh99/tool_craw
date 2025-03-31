<style>
        #intro {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 2rem;
            z-index: 9999;
        }
        #meta-logo {
            width: 50%;
            height: auto;
        }
    </style>
<div id="intro">
        <img id="meta-logo" src="/img/loadingLogo.gif" alt="Meta Logo">
    </div>

    <script>
        // Ẩn intro sau 2 giây khi trang đã tải xong
        window.onload = () => {
            setTimeout(() => {
                document.getElementById('intro').style.display = 'none';
            }, 5000); // 2 giây
        };
    </script>