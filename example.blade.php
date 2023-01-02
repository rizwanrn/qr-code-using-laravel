<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(500)->generate('https://winrit.com') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>QR code with more detailed info with VCard as a PNG file</h2>
                <!-- Make sure you have already installed imagick extension for Generate image file -->
            </div>
            <div class="card-body">
                <img src="data:image/png;base64, {{ base64_encode(QrCode::style('round')->size(1000)->format('png')->eyeColor(0, 161, 205, 74, 26, 100, 37)->eyeColor(1, 161, 205, 74, 26, 100, 37)->margin(1)->eyeColor(2, 161, 205, 74, 26, 100, 37)->generate('BEGIN:VCARD
                  VERSION:4.0
                  N:Patel;Rizwan;;;Patel
                  FN:Rizwan Patel
                  EMAIL:info@winrit.com
                  EMAIL;TYPE=home:winritsoftwares@gmail.com
                  ORG:Winrit Softwares
                  TEL;TYPE=mobile:+91 0000000000
                  URL;type=pref:https://winrit.com
                  ADR:;India
                  END:VCARD')) }}">
            </div>
        </div>

    </div>
</body>
</html>
