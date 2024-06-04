<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="/products/show">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Products
                </a>

                <a class="nav-link" href="/user">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    User
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ $user->name }}
        </div>
    </nav>
</div>