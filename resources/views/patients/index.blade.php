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
                                <th>NORM</th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Gol Darah</th>
                                <th>No. Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $patient->pt_norm }}</td>
                                    <td class="highlight">
                                        <a class="text-dark" href="{{ route('patients.show', $patient->pt_norm) }}">
                                            {{ $patient->pt_name }}
                                        </a>
                                    </td>
                                    <td>{{ \Carbon\Carbon::now()->diffInYears($patient->pt_dateofbirth) }} Tahun</td>
                                    <td>{{ $patient->pt_blood_type == '1'
                                        ? 'A'
                                        : ($patient->pt_blood_type == '2'
                                            ? 'B'
                                            : ($patient->pt_blood_type == '3'
                                                ? 'AB'
                                                : ($patient->pt_blood_type == '4'
                                                    ? 'O'
                                                    : 'RHESYS'))) }}
                                    </td>
                                    <td>{{ $patient->pt_phone }}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-4">
                                            <a role="button" class="border-0 bg-transparent text-warning mr-2"
                                                title="Ubah Data Pasien"
                                                href="{{ route('patients.edit', $patient->pt_norm) }}">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a role="button" class="border-0 bg-transparent text-primary"
                                                title="Ubah Data Keluarga"
                                                href="{{ route('patients.edit-family', $patient->pt_norm) }}">
                                                <i class="feather-users"></i>
                                            </a>
                                            <form action="{{ route('patients.destroy', $patient->pt_norm) }}"
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
    </x-slot:js>
</x-main>
