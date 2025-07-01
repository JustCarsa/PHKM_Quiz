@if (auth()->user()->hasRole('guru'))
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/profil" class="dropdown-item">
                        <i class="fas fa-user"></i> Profil
                    </a>

                    <a href="/gantipassword" class="dropdown-item">
                        <i class="fas fa-key"></i> Ganti Password
                    </a>

                    <a href="#" class="dropdown-item"
                        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
@else
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="/cekrole" class="navbar-brand">
                <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Laravel Quiz</span>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/cekrole" class="nav-link @yield('active-dashboard')">Dashboard</a>
                    </li>
                    @role('guru')
                        <li class="nav-item">
                            <a href="/quiz" class="nav-link @yield('active-quiz')">Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a href="/semua_murid" class="nav-link @yield('active-semua-murid')">Semua Murid</a>
                        </li>
                    @endrole

                    @role('murid')
                        <li class="nav-item">
                            <a href="/quiz/murid" class="nav-link @yield('active-quiz')">Quiz</a>
                        </li>
                    @endrole
                </ul>
            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="/profil" class="dropdown-item">
                            <i class="fas fa-user"></i> Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/gantipassword" class="dropdown-item">
                            <i class="fas fa-key"></i> Ganti Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"
                            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Keluar
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->
@endif
