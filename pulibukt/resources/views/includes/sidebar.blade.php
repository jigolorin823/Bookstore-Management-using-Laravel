<ul class="sidebar navbar-nav">
  @if (Route::has('login'))
  @auth
      @if(Auth::user()->role_id<>2)
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route ('author.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Authors</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route ('genre.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Genres</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route ('book.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Books</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route ('product.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Products</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route ('order.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Orders</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route ('payment.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Payments</span>
          </a>
        </li>
      @else
      <li class="nav-item active dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-book"></i>
         By Genre
          
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          @foreach($genres as $genre)
          <a class="dropdown-item" href="{{ route ('genre.show', ['genre_id' => $genre->id]) }}">{{ $genre->genre }}</a>
          @endforeach
        </div>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="{{ route('newreleases') }}">
          <i class="fa fa-book"></i>
            <span>New Releases</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('bestsellers') }}">
          <i class="fa fa-book"></i>
            <span>Best Sellers</span>
          </a>
        </li>
      @endif
  
  @endauth
  @else
  <li class="nav-item active dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-book"></i>
         By Genre
          
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          @foreach($genres as $genre)
          <a class="dropdown-item" href="{{ route ('genre.show', ['genre_id' => $genre->id]) }}">{{ $genre->genre }}</a>
          @endforeach
        </div>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="">
          <i class="fa fa-book"></i>
            <span>New Releases</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="">
          <i class="fa fa-book"></i>
            <span>Best Sellers</span>
          </a>
        </li>
  @endif
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li> -->
      </ul>
