<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <title>Chat</title>
</head>

<body>
    <section style="background-color: #3A4F7A;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                                    <div class="p-3">

                                        <!-- search component -->
                                        <div class="input-group rounded mb-3">
                                            <input id="search" type="search" class="form-control rounded"
                                                placeholder="Cari..." autocomplete="off" aria-label="search"
                                                aria-describedby="search-addon" required />
                                            <span class="input-group-text border-0" id="search-addon"
                                                style="cursor: pointer;">
                                                <i class="fas fa-search"></i>
                                            </span>
                                            <button class="btn btn-primary">
                                                <!-- ini dulu modal button -->
                                                <i class="fa-solid fa-comment-medical"></i>
                                            </button>
                                            <a href="#" class="btn btn-danger"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                            </a>
                                        </div>
                                        <!-- end search component -->

                                        <!-- form logout -->
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none"> @csrf
                                        </form>
                                        <!-- end form logout -->

                                        <!-- chat list -->
                                        <div style="position: relative; max-height: 447px;" class="overflow-auto">
                                            <ul class="list-unstyled mb-0">

                                                <!-- alert -->
                                                <li class="p-2 border-bottom">
                                                    <div class="alert alert-info" role="alert">
                                                        Nomor ditemukan. Kamu dapat memulai percakapan
                                                        dengan menekan tombol berwarna biru di atas.
                                                    </div>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <div class="alert alert-warning" role="alert">
                                                        Nomor tidak ditemukan.
                                                    </div>
                                                </li>
                                                <!-- end alert -->

                                                <li class="p-2 border-bottom">
                                                    <a href="#!" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                                    alt="avatar" class="d-flex align-self-center me-3"
                                                                    width="60">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0">Marie Horwitz</p>
                                                                <p class="small text-muted">Hello, Are you there?</p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Just now</p>
                                                            <span
                                                                class="badge bg-danger rounded-pill float-end">3</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                                                    alt="avatar" class="d-flex align-self-center me-3"
                                                                    width="60">
                                                                <span class="badge bg-warning badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0">Alexa Chung</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">5 m ago</p>
                                                            <span
                                                                class="badge bg-danger rounded-pill float-end">2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                                                                    alt="avatar" class="d-flex align-self-center me-3"
                                                                    width="60">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0">Danny McChain</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava4-bg.webp"
                                                                    alt="avatar" class="d-flex align-self-center me-3"
                                                                    width="60">
                                                                <span class="badge bg-danger badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0">Ashley Olsen</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                                                                    alt="avatar" class="d-flex align-self-center me-3"
                                                                    width="60">
                                                                <span class="badge bg-warning badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0">Kate Moss</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                                                                    alt="avatar" class="d-flex align-self-center me-3"
                                                                    width="60">
                                                                <span class="badge bg-warning badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0">Kate Moss</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- end chat list -->

                                    </div>
                                </div>

                                <!-- conversation -->
                                <div class="col-md-6 col-lg-7 col-xl-8">

                                    <nav class="navbar navbar-expand-md">
                                        <div class="container-fluid">
                                            <a class="navbar-brand" href="#">Marie Horwitz</a>
                                        </div>
                                    </nav>

                                    <div id="conversations" class="pt-3 pe-3 overflow-auto"
                                        style="position: relative; max-height: 400px;">

                                        <div class="d-flex flex-row justify-content-start">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3"
                                                    style="background-color: #f5f6f7;">Lorem
                                                    ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug
                                                    13 </p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Ut enim
                                                    ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13 <i
                                                        class="fa-solid fa-check-double"></i></p>
                                            </div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                        </div>

                                        <div class="d-flex flex-row justify-content-start">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3"
                                                    style="background-color: #f5f6f7;">Duis
                                                    aute
                                                    irure
                                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                    fugiat nulla pariatur.
                                                </p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug
                                                    13</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Nemo enim
                                                    ipsam
                                                    voluptatem quia
                                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                    magni dolores eos
                                                    qui
                                                    ratione voluptatem sequi nesciunt.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13 <i
                                                        class="fa-solid fa-check"></i></p>
                                            </div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                        </div>
                                        <div class="d-flex flex-row justify-content-end">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Nemo enim
                                                    ipsam
                                                    voluptatem quia
                                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                    magni dolores eos
                                                    qui
                                                    ratione voluptatem sequi nesciunt.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                                            </div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: 100%;">
                                        </div>

                                    </div>

                                    <!-- message component -->
                                    <div
                                        class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                                        <input type="text" class="form-control form-control-md" id="message-input"
                                            placeholder="Ketik pesan..." autocomplete="off" required>
                                        <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                                    </div>
                                    <!-- end message component -->
                                </div>
                                <!-- end conversation -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- modal new chat -->
    <div class="modal fade" id="modal-new-chat" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Tambah Chat Baru</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <input name="phone_number" type="text" class="form-control" placeholder="Masukan nomor telepon"
                            autocomplete="off" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal new chat -->

    <!-- script -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
         const messageBody = document.querySelector('#conversations');
         messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
      });
    </script>
    <!-- end script -->
</body>

</html>
