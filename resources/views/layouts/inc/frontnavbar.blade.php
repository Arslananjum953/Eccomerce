<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">E-shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('category')}}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('cart')}}">Carts</a>
          </li>
        @guest
         @if (Route::has('login'))
              <li class="nav-item">
                <a  class="nav-link" href="{{ route('login') }}" > {{ __('Login') }} </a>
              </li>
         @endif
         @if (Route::has('register'))
                <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" >{{ __('register') }}</a>
                </li>
         @endif
         @else
          <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="{{url('my-orders') }}">
                          My orders
                        </a>
                        
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          My profile
                        </a>
                        
                      </li>
                      <li>
                         <a class="dropdown-item" href="{{ route('logout') }}"   onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                         </form>
                      </li>
                  </ul>
          </li>
                          {{-- @auth
                            <a href="{{ url('/home') }}" >Home</a>
                        @else
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" >Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" >Register</a>
                        @endif
                        @endauth  --}}
                    </div>
        @endguest
 
          
        </ul>
      </div>
    </div>
  </nav>