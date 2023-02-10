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
                            <th>Nama Klinik</th>
                            <th>Nama Dokter</th>
                            <th>Hari</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="highlight">{{ $schedule->clinic->cl_name }}</td>
                                <td class="highlight">{{ $schedule->doctor->dr_name }}</td>
                                <td>{{ $schedule->dcs_day == '1' ? 'Senin' :
                                ($schedule->dcs_day == '2' ? 'Selasa' :
                                ($schedule->dcs_day == '3' ? 'Rabu' :
                                ($schedule->dcs_day == '4' ? 'Kamis' :
                                ($schedule->dcs_day == '5' ? 'Jumat' :
                                ($schedule->dcs_day == '6' ? 'Sabtu' : 'Minggu'
                                ))))) }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $schedule->dcs_start)->isoFormat('HH:mm') }} - {{ \Carbon\Carbon::createFromFormat('H:i:s', $schedule->dcs_end)->isoFormat('HH:mm') }}</td>
                                <td>{{ $schedule->dcs_is_active == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-4">
                                        <button type="button" class="border-0 bg-transparent text-warning"
                                                title="Ubah Data" data-toggle="modal" data-target="#editDoctors"
                                                data-id="{{ $schedule->dcs_code }}">
                                            <i class="feather-edit"></i>
                                        </button>
                                        <form action="{{ route('schedules.destroy', $schedule->dcs_code) }}"
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
                    <h5 class="modal-title" id="addDataTitle">Tambah Data Jadwal Dokter</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" action="{{ route('doctors.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="doctor_id">Nama Dokter</label>
                            <select class="form-control" name="doctor_id">
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->dr_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="clinic_id">Nama Klinik</label>
                            <select class="form-control" name="clinic_id">
                                @foreach($clinics as $clinic)
                                    <option value="{{ $clinic->id }}">{{ $clinic->cl_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dcs_day">Hari</label>
                            <select class="form-control" name="dcs_day">
                                    <option value="1">Senin</option>
                                    <option value="2">Selasa</option>
                                    <option value="3">Rabu</option>
                                    <option value="4">Kamis</option>
                                    <option value="5">Jumat</option>
                                    <option value="6">Sabtu</option>
                                    <option value="7">Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dr_name">Waktu Mulai</label>
                            <input type="time" class="form-control" name="dcs_start" required>
                            <div class="invalid-feedback">Waktu Mulai Harus Diisi</div>
                        </div>
                        <div class="form-group">
                            <label for="dr_name">Waktu Selesai</label>
                            <input type="time" class="form-control" name="dcs_end" required>
                            <div class="invalid-feedback">Waktu Selesai Harus Diisi</div>
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
