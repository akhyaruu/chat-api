<div style="position: relative; max-height: 447px;" class="overflow-auto">
    <ul class="list-unstyled mb-0">

        @if ($userAvailable == 'ada')
        <li class="p-2">
            <div class="alert alert-success" role="alert">
                Nomor ditemukan. Kamu dapat memulai percakapan
                dengan menekan tombol berwarna biru di atas.
            </div>
        </li>
        @elseif ($userAvailable == 'tidak ada')
        <li class="p-2">
            <div class="alert alert-warning" role="alert">
                Nomor tidak ditemukan.
            </div>
        </li>
        @endif

        <div class="card mx-2 mb-2 bg-primary text-white">
            <div class="card-body">
                <b>Halo!</b> {{ Auth::user()->name }}
            </div>
        </div>



        <li class="p-2 border-bottom">
            <a href="#!" class="d-flex justify-content-between">
                <div class="d-flex flex-row">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                            alt="avatar" class="d-flex align-self-center me-3" width="60">
                        <span class="badge bg-success badge-dot"></span>
                    </div>
                    <div class="pt-1">
                        <p class="fw-bold mb-0">Marie Horwitz</p>
                        <p class="small text-muted">Hello, Are you there?</p>
                    </div>
                </div>
                <div class="pt-1">
                    <p class="small text-muted mb-1">Just now</p>
                    <span class="badge bg-danger rounded-pill float-end">3</span>
                </div>
            </a>
        </li>
        <li class="p-2 border-bottom">
            <a href="#!" class="d-flex justify-content-between">
                <div class="d-flex flex-row">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                            alt="avatar" class="d-flex align-self-center me-3" width="60">
                        <span class="badge bg-warning badge-dot"></span>
                    </div>
                    <div class="pt-1">
                        <p class="fw-bold mb-0">Alexa Chung</p>
                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                    </div>
                </div>
                <div class="pt-1">
                    <p class="small text-muted mb-1">5 m ago</p>
                    <span class="badge bg-danger rounded-pill float-end">2</span>
                </div>
            </a>
        </li>
        <li class="p-2 border-bottom">
            <a href="#!" class="d-flex justify-content-between">
                <div class="d-flex flex-row">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                            alt="avatar" class="d-flex align-self-center me-3" width="60">
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
                            alt="avatar" class="d-flex align-self-center me-3" width="60">
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
                            alt="avatar" class="d-flex align-self-center me-3" width="60">
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
                            alt="avatar" class="d-flex align-self-center me-3" width="60">
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
