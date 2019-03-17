<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            overflow-x: hidden;
            color: #8d9498;
            height: 100%;
        }

        .content-body {
            background-color: #ffffff;
            width: 65%;
            position: relative;
            margin: 4% auto 0;
            border-top: 10px solid #275b95;

        }

        .text-center {
            text-align: center;
            margin: auto;
        }

        .custom-title {
            font-size: 60px;
            line-height: 100px;
            font-weight: 400;
            color: #275b95;
            text-align: center;
        }

        .content {
            color: #275b95;
            font-size: 30px;
            text-align: center;
        }

        .sub-content {
            color: #000;
            font-size: 25px;
            width: 80%;
        }

        .sub-content-2 {
            color: #000;
            font-size: 20px;
            width: 80%;
        }

        .btn-redirect {
            color: #275b95;
            font-size: 24px;
        }
    </style>
</head>

<body class="img-banner">
<table class="content-body" cellpadding="20">
    <thead>
    <tr>
        <td align="center">
            <h1 class="custom-title text-center">soporte@atssalud.com</h1>
            <h3 class="content text-center">¡Saludos!</h3>
        </td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td align="center">
            <p class="sub-content text-center"><?= $content;   ?></p>
        </td>
    </tr>
    <tr>
        <td align="center">
            <p class="sub-content-2 text-center"><?= $response;   ?></p>
        </td>
    </tr>
    <tr>
        <td align="center">
            <a href="http://atssasalud.com/" class="btn-redirect text-center">atssalud.com</a>
        </td>
    </tr>
    </tbody>
</table>
</body>

</html>




