<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Bloodline Clothing</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/shopping-cart">Shopping Cart
                    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                User Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @guest 
                        <a class="dropdown-item" href="/register">Register</a>
                        <a class="dropdown-item" href="/login">Login</a>
                    @endguest
                    @auth 
                        <a class="dropdown-item" href="/logout">Logout</a>
                    @endauth
            </li>
        </ul>
    </div>
</nav>