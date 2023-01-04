<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    @livewireStyles
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

                                        @livewire('search')

                                        <!-- form logout -->
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none"> @csrf
                                        </form>
                                        <!-- end form logout -->

                                        @livewire('chat-list')
                                    </div>
                                </div>

                                @livewire('conversation')

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- script -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            let container = document.querySelector('#conversations');

            window.addEventListener('DOMContentLoaded', (event) => {
                container.scrollTop = container.scrollHeight;
            })

            window.addEventListener('scrollDown', (event) => {
                Livewire.hook('message.processed', (message, component) => {
                    if (container.scrollTop + container.clientHeight + 100 < container.scrollHeight) {
                        return;
                    }
                    container.scrollTop = container.scrollHeight;
                })
                container.scrollTop = container.scrollHeight;
            })
        });
    </script>
    @livewireScripts
    <!-- end script -->
</body>

</html>
