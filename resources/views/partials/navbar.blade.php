<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">RIKZA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ( $tittle === 'Home') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $tittle === 'About') ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $tittle === 'Gallery') ? 'active' : ''}}" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $tittle === 'Contacts') ? 'active' : ''}}" href="/contacts">Contacts</a>
        </li>       
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route ('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('register')}}">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>