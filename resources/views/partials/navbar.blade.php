
<header class="p-3 bg-white text-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none text-dark" >
                <img src="{{ URL::asset('images/logo/1.png') }}" alt="" height="70" class="px-2">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-dark">Home</a></li>
                <li><a href="/search" class="nav-link px-2 text-dark">Search</a></li>
            </ul>
    

            @auth
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu btn-outline-white" aria-labelledby="navbarDropdown">
                    @if (auth()->user()->role_id === 2)
                        <li><a class="dropdown-item" href="/update-profile/{{ auth()->user()->user_id }}">Update Profile</a></li>
                        <li><a class="dropdown-item" href="/cart">Cart</a></li>
                        <li><a class="dropdown-item" href="/transaction">Transaction History</a></li>
                    @endif

                    @if (auth()->user()->role_id === 1)
                        <li><a class="dropdown-item" href="/insert">Insert Product</a></li>
                        <li><a class="dropdown-item" href="/manage-user">Manage User</a></li>
                    @endif
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            


            @else
            <div class="text-end">
                <a href="/login"><button type="button" class="btn btn-outline-white p-2 text-dark text-right">Login</button></a>
                <a href="/register"><button type="button" class="btn btn-white">Sign-up</button></a>
            </div>
            @endauth
                
        </div>
    </div>
</header>