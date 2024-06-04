<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Hart Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                <li class="nav-item"><a class="nav-link {{ request()->path() == '/' ? 'active' : ''}}" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->path() == 'products' ? 'active' : ''}}" href="/products">Products</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->path() == 'about' ? 'active' : ''}}" href="#!">About</a></li>

            </ul>
            <form class="d-flex gap-2">
                <a class="btn btn-outline-dark" href="/login">
                    <i class="bi bi-person"></i>
                    Login
                </a>
                <a class="btn btn-outline-dark" href="/register">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Sign Up
                </a>
            </form>
        </div>
    </div>
</nav>