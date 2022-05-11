<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Administrador del sistema" name="description" />
    <meta content="{{ env('PARTNER', 'Kadoo.mx') }}" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="{{ @csrf_token() }}" name="csrf-token" />
</head>

<body>
    <div id="wrapper">

        <div class="content-page">
            <div class="content">
                <div id="save-name"
                    style="width: 100%;height:100vh;display:flex;justify-content:center;align-items:center"></div>
            </div>
        </div>

    </div>
    <script src="{{ mix('js/app.js')}}"></script>

    <script src="{{ mix('js/components.js')}}"></script>
</body>

</html>