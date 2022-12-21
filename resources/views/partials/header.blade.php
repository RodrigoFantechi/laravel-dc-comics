<header>
    <nav class="navbar navbar-expand-lg p-3">
        <div class="container">
       <a href="{{route('guest.index')}}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @foreach ($nav_links as $link)
                    <li class="nav-item my-1">
                        <div class="links ms-auto ">
                            <a class="mx-3" href="#">
                                {{ $link['text'] }}
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <section class="jumbotron"></section>
</header>