<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('/images/logo.jpeg')}}" width="100" height="30" alt="Cuadros Bethel">
      Cuadros Bethel Montejo
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ Request::path() == '/gallery' ? 'active' : '' }}">
          <a class="nav-link" href="{{route('gallery')}}">Galería</a>
        </li>
        <li class="nav-item {{ Request::path() == '/about' ? 'active' : '' }}">
          <a class="nav-link" href="{{route('about')}}">Acerca de</a>
        </li>
        <li class="nav-item {{ Request::path() == '/contact' ? 'active' : '' }}">
          <a class="nav-link " href="{{route('contact')}}">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>