<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <title>Register</title>
</head>

<body>
    <section style="background-color: #3A4F7A;">
        <div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Register no telepon</h1>
                    </div>
                    <div class="modal-body p-5 pt-0">
                        <form action="" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="name" type="text" class="form-control rounded-3" id="input-name"
                                    placeholder="Name" autocomplete="off" required>
                                <label for="input-name">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="phone_number" type="text" class="form-control rounded-3"
                                    id="input-phone-number" placeholder="No Telepon" autocomplete="off" required>
                                <label for="input-phone-number">No. Telepon</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control rounded-3"
                                    id="input-password" placeholder="Password" autocomplete="off" required>
                                <label for="input-password">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password_confirmation" type="password" class="form-control rounded-3"
                                    id="input-password-confirmation" placeholder="Confirm Password" autocomplete="off"
                                    required>
                                <label for="input-password-confirmation">Confirm Password</label>
                            </div>
                            <button type="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">Register</button>
                        </form>
                        <hr class="my-2">
                        <h2 class="fs-6 fw-bold mb-3">Sudah register? kamu dapat login</h2>
                        <a href="#" class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</body>

</html>
