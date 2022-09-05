    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="logo-icon logo">
                        <img src="<?= base_url('assets/'); ?>img/logo.svg" alt="homepage" />
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <div class="page-breadcrumb">
                            <div class="row align-items-center">
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Beranda</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumb; ?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= base_url('assets/admin/img/users/') . $user['image']; ?>" alt="user" class="profile-pic me-2"><?= $user['name']; ?> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>