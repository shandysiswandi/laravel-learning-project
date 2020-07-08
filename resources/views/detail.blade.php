<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Laravel Intervention Image List</title>
</head>

<body>
    <div class="container mt-5">
        <h4 class="text-center mb-5">List of Image</h4>
        @foreach ($data as $image)
        <div class="card mb-3 shadow">
            <img height="300" src="{{ asset("img/$image") }}" class="card-img-top" alt="image">
        </div>
        @endforeach
    </div>
</body>

</html>
