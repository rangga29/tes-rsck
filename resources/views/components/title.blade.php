<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-22">{{ $title }}</h4>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary waves-effect" title="Tambah Data" data-toggle="modal"
                    data-target="#addClinics">
                    <i class="fas fa-plus"></i>
                </button>
                <a href="#" role="button" class="btn btn-danger waves-effect" title="Laporan PDF">
                    <i class="fas fa-file-pdf"></i>
                </a>
                <a href="#" role="button" class="btn btn-success waves-effect" title="Laporan Excel">
                    <i class="fas fa-file-excel"></i>
                </a>
                <a href="{{ route('clinics.deleted') }}" role="button" class="btn btn-secondary waves-effect"
                    title="Data Dihapus">
                    <i class="fas fa-archive"></i>
                </a>
            </div>
        </div>
    </div>
</div>
