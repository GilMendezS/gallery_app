<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('/images/logo.png')}}" width="150" height="60" alt="Cuadros Bethel">
      Cuadros Bethel Montejo
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
          <a class="nav-link" href="{{url('/')}}"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ Request::path() == 'gallery' ? 'active' : '' }}">
          <a class="nav-link" href="{{route('gallery')}}"><i class="fa fa-image"></i> Galería</a>
        </li>
        <li class="nav-item {{ Request::path() == 'about' ? 'active' : '' }}">
          <a class="nav-link" href="{{route('about')}}"><i class="fa fa-info"></i> Acerca de</a>
        </li>
        <li class="nav-item {{ Request::path() == 'contact' ? 'active' : '' }}">
          <a class="nav-link " href="{{route('contact')}}"><i class="fa fa-paper-plane"></i> Contacto</a>
        </li>
      </ul>
    </div>
  </nav>