<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Analyze</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @if($currentPage=='home') active @endif">
            <a class="nav-link" href="{{route('admin.home')}}">Home
                @if($currentPage=='home')<span class="sr-only">(current)</span>@endif
            </a>
            </li>
            <li class="nav-item @if($currentPage=='usuario') active @endif">
                <a class="nav-link" href="{{route('admin.home')}}">Usuários
                    @if($currentPage=='usuario')<span class="sr-only">(current)</span>@endif
                </a>
            </li>
        </ul>
    </div>
  </nav>