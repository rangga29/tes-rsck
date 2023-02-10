<x-main :title="$title" :active="$active" :print="$print">
    <x-slot:css>
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/dataTables.bootstrap4.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/responsive.bootstrap4.css') }}" />
    </x-slot:css>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-hover dt-responsive nowrap" width="100%">
                        <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Dokter</th>
                            <th>No. Telepon</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="highlight">{{ $doctor->dr_name }}</td>
                                <td>{{ $doctor->dr_phone }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-4">
                                        <button type="button" class="border-0 bg-transparent text-warning"
                                                title="Ubah Data" data-toggle="modal" data-target="#editDoctors"
                                                data-id="{{ $doctor->dr_slug }}">
                                            <i class="feather-edit"></i>
                                        </button>
                                        <form action="{{ route('doctors.destroy', $doctor->dr_slug) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="border-0 bg-transparent text-danger" title="Hapus Data"
                                                    onclick="return confirm('Yakin Ingin Menghapus Data Ini?')">
                                                <i class="feather-trash-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addDataTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataTitle">Tambah Data Dokter</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" action="{{ route('doctors.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="dr_name">Nama Dokter</label>
                            <input type="text" class="form-control" name="dr_name" required>
                            <div class="invalid-feedback">Nama Dokter Harus Diisi</div>
                        </div>
                        <div class="form-group">
                            <label for="dr_phone">No. Telepon</label>
                            <input type="number" class="form-control" name="dr_phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editDoctors" tabindex="-1" role="dialog" aria-labelledby="editDoctorsTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDoctorsTitle">Ubah Data Dokter</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" action="" method="POST" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="dr_name">Nama Dokter</label>
                            <input type="text" class="form-control" name="dr_name" id="dr_name" required>
                            <div class="invalid-feedback">Nama Dokter Harus Diisi</div>
                        </div>
                        <div class="form-group">
                            <label for="dr_phone">No. Telepon</label>
                            <input type="number" class="form-control" name="dr_phone" id="dr_phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-slot:js>
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('pages/datatables.js') }}"></script>
        <script src="{{ asset('pages/validation.js') }}"></script>
    </x-slot:js>
</x-main>
