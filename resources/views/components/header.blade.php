<header id="page-topbar">
    <div class="navbar-header">
        <div class="navbar-brand-box d-flex align-items-left">
            <a href="index.html" class="logo">
                <span>
                    Sistem Informasi Rekam Medis
                </span>
            </a>
            <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex align-items-center">
            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn header-item waves-effect waves-light" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('images/users/avatar-3.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-sm-inline-block ml-1">Donald M.</span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        <span>Profile</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        <span>Log Out</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
