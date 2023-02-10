<x-main :title="$title" :active="$active">
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
                                <th>Nama Klinik</th>
                                <th>Posisi</th>
                                <th>Waktu Hapus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clinics as $clinic)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="highlight">{{ $clinic->cl_name }}</td>
                                    <td>{{ $clinic->cl_position }}</td>
                                    <td>{{ $clinic->deleted_at }}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-4">
                                            <a role="button" class="border-0 bg-transparent text-warning mr-2"
                                                title="Kembalikan Data"
                                                href="{{ route('clinics.restore', $clinic->cl_slug) }}"
                                                onclick="return confirm('Yakin Ingin Mengembalikan Data Ini?')">
                                                <i class="feather-delete"></i>
                                            </a>
                                            <a role="button" class="border-0 bg-transparent text-danger"
                                                title="Hapus Permanen Data"
                                                href="{{ route('clinics.permanent-delete', $clinic->cl_slug) }}"
                                                onclick="return confirm('Yakin Ingin Menghapus Permanen Data Ini?')">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
    </x-slot:js>
</x-main>
