<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-22">{{ $title }}</h4>
            @if ($active != 'dashboard')
                <div class="btn-group" role="group">
                    @if ($active != 'patients' && $active != 'polyclinics')
                        <button type="button" class="btn btn-primary waves-effect" title="Tambah Data" data-toggle="modal"
                            data-target="#addData">
                            <i class="fas fa-plus"></i>
                        </button>
                    @else
                        <a role="button" class="btn btn-primary waves-effect" href="{{ route($active . '.create') }}"
                            title="Tambah Data">
                            <i class="fas fa-plus"></i>
                        </a>
                    @endif
                    @if ($active == 'patients')
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn waves-effect waves-light" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Cari Data">
                                <i class="fas fa-search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3" action="{{ route('patients.search') }}" method="POST">
                                    @csrf
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="Cari Data Pasien"
                                                name="search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                    @if ($print == 'yes')
                        <a href="{{ route($active . '.report.pdf') }}" role="button"
                            class="btn btn-danger waves-effect" title="Laporan PDF">
                            <i class="fas fa-file-pdf"></i>
                        </a>
                        <a href="{{ route($active . '.report.excel') }}" role="button"
                            class="btn btn-success waves-effect" title="Laporan Excel">
                            <i class="fas fa-file-excel"></i>
                        </a>
                    @endif
                    <a href="{{ route($active . '.deleted') }}" role="button" class="btn btn-secondary waves-effect"
                        title="Data Dihapus">
                        <i class="fas fa-archive"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
