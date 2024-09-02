<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><i class="ms-3 material-icons" style="font-size:60px;color:black;">cloud</i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('service')}}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
