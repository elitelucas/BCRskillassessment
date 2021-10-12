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

    <link rel="stylesheet" href="{{asset('css/input.css')}}">

</head>

<body>
    <form action="/check" method="POST">
        @csrf
        <div class="flex-center position-ref full-height">
            <div class="container">
                <div class="plans">
                    <div class="title">Choose your favorite drink</div>
                    @foreach ($drinks as $drink)
                        <label class="plan basic-plan" for="{{ $drink->id }}">
                            <input type="radio" name="drink" id="{{ $drink->id }}" value="{{ $drink->id }}"
                                required />
                            <div class=" plan-content">
                                <img loading="lazy" src="{{ asset('images/' . $drink->id . '.jpg') }}" alt="" />
                                <div class="plan-details">
                                    <span>{{ $drink->name }}</span>
                                    <p>{{ $drink->description }}</p>
                                </div>
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="nametag">
                <div class="nt_header">
                    <h1>I consumed</h1>
                </div>
                <div class="nt_name">
                    <input type="number" name="consumption" placeholder="" min=0 required>
                </div>
                <div class="nt_header">
                    <h1>serving(s)</h1>
                </div>
            </div>
            <button type="submit" class="btn btn-success nextbutton">>> Check safety</button>
        </div>
    </form>
</body>

</html>
