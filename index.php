<!DOCTYPE html>
<html>
<head>
    <title>PHP HTML Sample</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            text-align: center;
            padding-top: 50px;
        }
        .box {
            background: white;
            padding: 20px;
            width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        h1 {
            color: #007bff;
        }
    </style>
</head>

<body>

<div class="box">
    <h1>🚀 Welcome to My PHP Website</h1>

    <p>This page is created using <b>PHP + HTML</b></p>

    <?php
        echo "<p><b>Server Name:</b> " . gethostname() . "</p>";
        echo "<p><b>Date & Time:</b> " . date("d-m-Y h:i:s A") . "</p>";
    ?>

</div>

</body>
</html>
