<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #FBBC04" >
    <div class="container">
        <a class="navbar-brand" href="/posts"><img src="{{ URL::to('/img/Logo White.png') }}" height="30 px">RESTRY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link {{ (Request::is('posts')) ? 'active' : '' }}" href="/posts">Utama</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('category') ? 'active' : '' }}" href="/category">Kategori</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang Kami</a>
                        </li>
                    </ul>
        
                    @guest
                    <ul class="navbar-nav" >
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">AKUN</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="/user"><i class="bi bi-person-fill"></i> Profile</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="/favorit"><i class="bi bi-heart-fill"></i> Favorit</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>     
                                <li>
                                    <a href="/login" class="dropdown-item {{ (Request::is('login')) ? 'active' : '' }}">
                                    <i class="bi bi-box-arrow-in-right"></i> Login</a>
                                </li>     
                            </ul>
                        </li> 
                    </ul>
                    @endguest

                    @auth
                    <ul class="navbar-nav ms-auto" >
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Selamat Datang, {{ auth()->user()->name }}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="/user"><i class="bi bi-person-fill"></i> Profile</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>  
                                @can('admin')
                                <li>
                                    <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Administrator</a>
                                </li>
                                <li><hr class="dropdown-divider"></li
                                @endcan
                                <li>
                                    <a class="dropdown-item" href="/favorit"><i class="bi bi-heart-fill"></i> Favorit</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>  
                                <li>
                                    <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                    </form>
                                </li>          
                            </ul>
                        </li> 
                    </ul>
                    @endauth
        </div>
    </div>
</nav>