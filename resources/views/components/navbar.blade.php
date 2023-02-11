<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item {{ $active == 'dashboard' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="mdi mdi-home-analytics"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item {{ $active == 'reg_patient' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('patients.create') }}">
                            <i class="mdi mdi-home-analytics"></i>
                            Registrasi Pasien
                        </a>
                    </li>
                    <li class="nav-item {{ $active == 'reg_clinic' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('polyclinics.create') }}">
                            <i class="mdi mdi-home-analytics"></i>
                            Registrasi Poliklinik
                        </a>
                    </li>
                    <li class="nav-item {{ $active == 'patients' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('patients.index') }}">
                            <i class="mdi mdi-home-analytics"></i>
                            Data Pasien
                        </a>
                    </li>
                    <li class="nav-item {{ $active == 'polyclinics' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('polyclinics.index') }}">
                            <i class="mdi mdi-home-analytics"></i>
                            Data Poliklinik
                        </a>
                    </li>
                    <li
                        class="nav-item dropdown {{ $active == 'clinics' || $active == 'doctors' || $active == 'schedules' || $active == 'users' ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-poll"></i>Data Master <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-charts">
                            <a href="{{ route('clinics.index') }}"
                                class="dropdown-item {{ $active == 'clinics' ? 'active' : '' }}">
                                Data Klinik
                            </a>
                            <a href="{{ route('doctors.index') }}"
                                class="dropdown-item {{ $active == 'doctors' ? 'active' : '' }}">
                                Data Dokter
                            </a>
                            <a href="{{ route('schedules.index') }}"
                                class="dropdown-item {{ $active == 'schedules' ? 'active' : '' }}">
                                Data Jadwal Dokter
                            </a>
                            <a href="charts-chartjs.html"
                                class="dropdown-item {{ $active == 'users' ? 'active' : '' }}">
                                Data User
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
