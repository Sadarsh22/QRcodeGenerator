<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body style="background: linear-gradient(to right, #2c3e50, #bdc3c7);">

    <div style="display:block;
    width:40%;
    margin:5% auto;
    text-align:center" class="p-3 mb-2 bg-gradient-danger text-white">
        <h2 align='center'>QR Code Generator</h2>
        <form action="{{url('qrcode')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="color" class="form-control" name="color" id="color" aria-describedby="emailHelp">
                </div>

                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-success">Generate QR</button>
                </div>
            </div>
        </form>

    </div>

</body>

</html>