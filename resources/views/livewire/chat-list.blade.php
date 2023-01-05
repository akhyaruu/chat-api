<div style="position: relative; height: 447px;" class="overflow-auto">
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


        @if (is_array($chatList) || is_object($chatList))
        @foreach ($chatList as $item)
        <li class="p-2 border-bottom">
            <a wire:click="chat({{ $item['phone_number'] }})" style="cursor: pointer"
                class="d-flex justify-content-between">
                <div class="d-flex flex-row">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                            alt="avatar" class="d-flex align-self-center me-3" width="60">
                        <span class="badge bg-success badge-dot"></span>
                    </div>
                    <div class="pt-1">
                        <p class="fw-bold mb-0">{{ $item['name'] }}</p>
                        <p class="small text-muted">
                            {{ strlen($item['content']) > 20 ? substr($item['content'],0,20)."..." : $item['content'] }}
                        </p>
                    </div>
                </div>
                <div class="pt-1">
                    <p class="small text-muted mb-1">{{ date('d M', strtotime($item['created_at'].'01')) }}</p>
                </div>
            </a>
        </li>
        @endforeach
        @endif



    </ul>
</div>
