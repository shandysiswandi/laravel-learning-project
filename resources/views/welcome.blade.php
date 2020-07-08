<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Laravel Intervention Image</title>
</head>

<body>
    <div class="container">

        <div class="mb-5">
            <a href="{{ route('show', ['id'=>1]) }}">Go to List</a>
        </div>

        @if (session()->has('message'))
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>{{ session()->get('message') }}</strong>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="pt-5 mt-5">
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="file">
                    <label class="custom-file-label" for="file">Choose file</label>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
