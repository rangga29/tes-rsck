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
                                <th>NOREG</th>
                                <th>Pasien</th>
                                <th>Klinik</th>
                                <th>Dokter</th>
                                <th>Cara Datang</th>
                                <th>Tanggungan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($polyclinics as $polyclinic)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $polyclinic->rcl_noreg }}</td>
                                    <td class="highlight">{{ $polyclinic->patient->pt_name }}</td>
                                    <td>{{ $polyclinic->clinic->cl_name }}</td>
                                    <td>{{ $polyclinic->doctor->dr_name }}</td>
                                    <td>{{ $polyclinic->rcl_cara_datang == '1'
                                        ? 'Datang Sendiri'
                                        : ($polyclinic->rcl_cara_datang == '2'
                                            ? 'Rujukan Luar'
                                            : ($polyclinic->rcl_cara_datang == '3'
                                                ? 'Rujukan Puskesmas'
                                                : 'Rujukan RS Lain')) }}
                                    </td>
                                    <td>{{ $polyclinic->rcl_tanggungan == '1'
                                        ? 'Umum/Pribadi'
                                        : ($polyclinic->rcl_tanggungan == '2'
                                            ? 'Instansi'
                                            : ($polyclinic->rcl_tanggungan == '3'
                                                ? 'Asuransi'
                                                : 'Personil/Karyawan')) }}
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-4">
                                            <a role="button" class="border-0 bg-transparent text-warning mr-2"
                                                title="Ubah Data Pasien"
                                                href="{{ route('polyclinics.edit', $polyclinic->rcl_noreg) }}">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <form action="{{ route('polyclinics.destroy', $polyclinic->rcl_noreg) }}"
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
