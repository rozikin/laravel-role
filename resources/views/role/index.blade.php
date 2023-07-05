<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (auth()->user()->can('create role'))
    <button type="button">tambah</button>

    @else
    <button type="button" disabled>tambah</button>

    @endif



    
</body>
</html>