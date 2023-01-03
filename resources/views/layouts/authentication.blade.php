<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <section style="background-color: #3A4F7A;">
        <div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">@yield('name')</h1>
                    </div>
                    @yield('form-card')
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</body>

</html>
