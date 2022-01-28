<ul class="nav">
    <li class="nav-item">
      <a class="nav-link @if (Route::currentRouteName() === 'home') 'active' @endif" aria-current="page" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('comics.index')}}">Fumetti</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Info</a>
    </li>
  </ul>