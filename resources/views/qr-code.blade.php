<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Code Generator</title>
</head>

<body>
    <h4>QR code Generate</h4>

    <br>
    {!! QrCode::size(250)->generate('learning-points.in') !!}
    {!! QrCode::format('png')->size(300)->generate('1',storage_path('qrcode/code3.png')) !!}

</body>

</html>