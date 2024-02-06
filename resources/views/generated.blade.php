<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(to right, #2c3e50, #bdc3c7);
" class="text-white">

    <div style="display:block;
    width:40%;
    margin:5% auto;
    text-align:center">
        <h2 align='center'>Your QR Code</h2>
        <div style="margin: 5%;">
            {{$qr}}
        </div>
        <a href="{{url('/')}}"><button type="submit" class="btn btn-primary">Back</button></a>
    </div>
</body>

</html>