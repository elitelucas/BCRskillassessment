<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Caffeine Safety Check</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/check.css') }}">

</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="container">
            @if ($rest < 0)
                <div class="alert alert-danger fade show">
                    Danger! You have consumed over safe limit (500mg).
                </div>
            @elseif($rest==0)
                <div class="alert alert-warning">
                    <strong>Warning!</strong> You haven't consumed over safe limit(500mg) but can not have more
                    "{{ $drinkinfo->name }}".
                </div>
            @elseif($rest>0)
                <div class="alert alert-success  fade show">
                    Still safe. You can still have {{ $rest }} servings of "{{ $drinkinfo->name }}".
                </div>
            @endif
            <a href="/">
                <button type="button" class="btn btn-link">Back</button></a>
        </div>
    </div>
</body>

</html>
