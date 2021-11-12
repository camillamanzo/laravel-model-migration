<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <main>

        <div class="container">
            <div class="row">
                @forelse ($packages as $package)
                    <div class="col-4">
                        <h2>City: {{$package->city}}</h2>
                        <h3>Price: {{$package->price}}</h3>
                        <hr>
                    </div>
                @empty
                <h2>There are no available packages.</h2>
            @endforelse
            </div>
        </div>
    </main>
</body>
</html>