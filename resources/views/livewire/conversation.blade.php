<div class="col-md-6 col-lg-7 col-xl-8">

    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            @if ($user)
            <a class="navbar-brand">{{ $user['name'] }}</a>
            @endif
        </div>
    </nav>

    <div id="conversations" class="pt-3 pe-3 overflow-auto" style="position: relative; height: 400px;">

        @if (is_array($chat) || is_object($chat))
        @foreach ($chat as $item)
        @if ($item['sender_id'] == Auth::id())
        <div class="d-flex flex-row justify-content-end">
            <div>
                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">{{ $item['content'] }}</p>
                <p class="small me-3 mb-3 rounded-3 text-muted">
                    {{ date('h:i A', strtotime($item['created_at'])) }} |
                    {{ date('D', strtotime($item['created_at'])) }}
                    @if ($item['status'] == 'unread')
                    <i class="fa-solid fa-check"></i>
                    @else
                    <i class="fa-solid fa-check-double"></i>
                    @endif
                </p>
            </div>
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1"
                style="width: 45px; height: 100%;">
        </div>
        @else
        <div class="d-flex flex-row justify-content-start">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp" alt="avatar 1"
                style="width: 45px; height: 100%;">
            <div>
                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">{{ $item['content'] }}
                </p>
                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">
                    {{ date('h:i A', strtotime($item['created_at'])) }} |
                    {{ date('D', strtotime($item['created_at']))}}
                </p>
            </div>
        </div>
        @endif
        @endforeach

        @else
        <div class="alert alert-info" role="alert">
            Belum ada percakapan. Mulai percakapan dengan mencari atau menambahkan nomor baru.
        </div>
        @endif




    </div>


    @if (is_array($chat) || is_object($chat))
    <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
        <input wire:keydown.enter="submit" wire:model.defer="messageText" type="text"
            class="form-control form-control-md" id="message-input" placeholder="Ketik pesan..." autocomplete="off"
            required>
        <a style="cursor: pointer;" wire:click="submit" class="ms-3"><i class="fas fa-paper-plane"></i></a>
    </div>
    @endif
</div>
