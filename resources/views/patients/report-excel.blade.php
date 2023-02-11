<x-main :title="$title" :active="$active" :print="$print">
    <x-slot:css>
    </x-slot:css>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-justified mb-3">
                        <li class="nav-item">
                            <a href="#alldata" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <i class="mdi mdi-home-variant d-lg-none d-block"></i>
                                <span class="d-none d-lg-block">Semua Data</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#separatedata" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <i class="mdi mdi-account-circle d-lg-none d-block"></i>
                                <span class="d-none d-lg-block">Data Tertentu [Tanggal Data Dibuat]</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="alldata">
                            <form action="{{ route('patients.report.excel.print', ['all']) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <label for="options" class="col-sm-2 col-form-label">Pilihan Kolom</label>
                                    <div class="col-sm-10">
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="all_column" id="all_column" value="0">
                                                <input type="checkbox" class="form-check-input" name="all_column"
                                                    id="all-all-column" value="1">
                                                <label class="form-check-label" for="all-all-column">
                                                    <span class="fw-bolder">Semua Kolom</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="norm" id="norm" value="0">
                                                <input type="checkbox" class="form-check-input" name="norm"
                                                    id="all-norm" value="1">
                                                <label class="form-check-label" for="all-norm">
                                                    Nomor Rekam Medis
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="name" id="name" value="0">
                                                <input type="checkbox" class="form-check-input" name="name"
                                                    id="all-name" value="1">
                                                <label class="form-check-label" for="all-name">
                                                    Nama Pasien
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="address" id="address" value="0">
                                                <input type="checkbox" class="form-check-input" name="address"
                                                    id="all-address" value="1">
                                                <label class="form-check-label" for="all-address">
                                                    Alamat
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="kelurahan" id="kelurahan" value="0">
                                                <input type="checkbox" class="form-check-input" name="kelurahan"
                                                    id="all-kelurahan" value="1">
                                                <label class="form-check-label" for="all-kelurahan">
                                                    Kelurahan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="kecamatan" id="kecamatan" value="0">
                                                <input type="checkbox" class="form-check-input" name="kecamatan"
                                                    id="all-kecamatan" value="1">
                                                <label class="form-check-label" for="all-kecamatan">
                                                    Kecamatan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="city" id="city" value="0">
                                                <input type="checkbox" class="form-check-input" name="city"
                                                    id="all-city" value="1">
                                                <label class="form-check-label" for="all-city">
                                                    Kota
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="hometown" id="hometown" value="0">
                                                <input type="checkbox" class="form-check-input" name="hometown"
                                                    id="all-hometown" value="1">
                                                <label class="form-check-label" for="all-hometown">
                                                    Kota Lahir
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="dateofbirth" id="dateofbirth"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="dateofbirth"
                                                    id="all-dateofbirth" value="1">
                                                <label class="form-check-label" for="all-dateofbirth">
                                                    Tanggal Lahir
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="religion" id="religion" value="0">
                                                <input type="checkbox" class="form-check-input" name="religion"
                                                    id="all-religion" value="1">
                                                <label class="form-check-label" for="all-religion">
                                                    Agama
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="bloodtype" id="bloodtype"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="bloodtype"
                                                    id="all-bloodtype" value="1">
                                                <label class="form-check-label" for="all-bloodtype">
                                                    Golongan Darah
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="phone" id="phone" value="0">
                                                <input type="checkbox" class="form-check-input" name="phone"
                                                    id="all-phone" value="1">
                                                <label class="form-check-label" for="all-phone">
                                                    No. Telepon
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="status" id="status" value="0">
                                                <input type="checkbox" class="form-check-input" name="status"
                                                    id="all-status" value="1">
                                                <label class="form-check-label" for="all-status">
                                                    Status
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="education" id="education"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="education"
                                                    id="all-education" value="1">
                                                <label class="form-check-label" for="all-education">
                                                    Pendidikan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="profession" id="profession"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="profession"
                                                    id="all-profession" value="1">
                                                <label class="form-check-label" for="all-profession">
                                                    Pekerjaan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famname" id="famname" value="0">
                                                <input type="checkbox" class="form-check-input" name="famname"
                                                    id="all-famname" value="1">
                                                <label class="form-check-label" for="all-famname">
                                                    [Keluarga] Nama
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famstatus" id="famstatus"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famstatus"
                                                    id="all-famstatus" value="1">
                                                <label class="form-check-label" for="all-famstatus">
                                                    [Keluarga] Status
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famaddress" id="famaddress"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famaddress"
                                                    id="all-famaddress" value="1">
                                                <label class="form-check-label" for="all-famaddress">
                                                    [Keluarga] Alamat
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famkelurahan" id="famkelurahan"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famkelurahan"
                                                    id="all-famkelurahan" value="1">
                                                <label class="form-check-label" for="all-famkelurahan">
                                                    [Keluarga] Kelurahan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famkecamatan" id="famkecamatan"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famkecamatan"
                                                    id="all-famkecamatan" value="1">
                                                <label class="form-check-label" for="all-famkecamatan">
                                                    [Keluarga] Kecamatan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famcity" id="famcity" value="0">
                                                <input type="checkbox" class="form-check-input" name="famcity"
                                                    id="all-famcity" value="1">
                                                <label class="form-check-label" for="all-famcity">
                                                    [Keluarga] Kota
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famphone" id="famphone" value="0">
                                                <input type="checkbox" class="form-check-input" name="famphone"
                                                    id="all-famphone" value="1">
                                                <label class="form-check-label" for="all-famphone">
                                                    [Keluarga] No. Telepon
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famprofession" id="famprofession"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famprofession"
                                                    id="all-famprofession" value="1">
                                                <label class="form-check-label" for="all-famprofession">
                                                    [Keluarga] Pekerjaan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="created" id="created" value="0">
                                                <input type="checkbox" class="form-check-input" name="created"
                                                    id="all-created" value="1">
                                                <label class="form-check-label" for="all-created">
                                                    Tanggal Data
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success me-2 fw-bolder">PRINT
                                        LAPORAN</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="separatedata">
                            <form action="{{ route('patients.report.excel.print', ['separate']) }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="firstDate" class="col-sm-2 col-form-label">Tanggal Awal</label>
                                    <div class="col-sm-10">
                                        <input type="date"
                                            class="form-control @error('firstDate') is-invalid @enderror"
                                            name="firstDate" value="{{ old('firstDate') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="lastDate" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                                    <div class="col-sm-10">
                                        <input type="date"
                                            class="form-control @error('lastDate') is-invalid @enderror"
                                            name="lastDate" value="{{ old('lastDate') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="options" class="col-sm-2 col-form-label">Pilihan Kolom</label>
                                    <div class="col-sm-10">
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="all_column" id="all_column"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="all_column"
                                                    id="separate-all-column" value="1">
                                                <label class="form-check-label" for="separate-all-column">
                                                    <span class="fw-bolder">Semua Kolom</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="norm" id="norm" value="0">
                                                <input type="checkbox" class="form-check-input" name="norm"
                                                    id="separate-norm" value="1">
                                                <label class="form-check-label" for="separate-norm">
                                                    Nomor Rekam Medis
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="name" id="name" value="0">
                                                <input type="checkbox" class="form-check-input" name="name"
                                                    id="separate-name" value="1">
                                                <label class="form-check-label" for="separate-name">
                                                    Nama Pasien
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="address" id="address" value="0">
                                                <input type="checkbox" class="form-check-input" name="address"
                                                    id="separate-address" value="1">
                                                <label class="form-check-label" for="separate-address">
                                                    Alamat
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="kelurahan" id="kelurahan"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="kelurahan"
                                                    id="separate-kelurahan" value="1">
                                                <label class="form-check-label" for="separate-kelurahan">
                                                    Kelurahan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="kecamatan" id="kecamatan"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="kecamatan"
                                                    id="separate-kecamatan" value="1">
                                                <label class="form-check-label" for="separate-kecamatan">
                                                    Kecamatan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="city" id="city" value="0">
                                                <input type="checkbox" class="form-check-input" name="city"
                                                    id="separate-city" value="1">
                                                <label class="form-check-label" for="separate-city">
                                                    Kota
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="hometown" id="hometown" value="0">
                                                <input type="checkbox" class="form-check-input" name="hometown"
                                                    id="separate-hometown" value="1">
                                                <label class="form-check-label" for="separate-hometown">
                                                    Kota Lahir
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="dateofbirth" id="dateofbirth"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="dateofbirth"
                                                    id="separate-dateofbirth" value="1">
                                                <label class="form-check-label" for="separate-dateofbirth">
                                                    Tanggal Lahir
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="religion" id="religion" value="0">
                                                <input type="checkbox" class="form-check-input" name="religion"
                                                    id="separate-religion" value="1">
                                                <label class="form-check-label" for="separate-religion">
                                                    Agama
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="bloodtype" id="bloodtype"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="bloodtype"
                                                    id="separate-bloodtype" value="1">
                                                <label class="form-check-label" for="separate-bloodtype">
                                                    Golongan Darah
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="phone" id="phone" value="0">
                                                <input type="checkbox" class="form-check-input" name="phone"
                                                    id="separate-phone" value="1">
                                                <label class="form-check-label" for="separate-phone">
                                                    No. Telepon
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="status" id="status" value="0">
                                                <input type="checkbox" class="form-check-input" name="status"
                                                    id="separate-status" value="1">
                                                <label class="form-check-label" for="separate-status">
                                                    Status
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="education" id="education"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="education"
                                                    id="separate-education" value="1">
                                                <label class="form-check-label" for="separate-education">
                                                    Pendidikan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="profession" id="profession"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="profession"
                                                    id="separate-profession" value="1">
                                                <label class="form-check-label" for="separate-profession">
                                                    Pekerjaan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famname" id="famname" value="0">
                                                <input type="checkbox" class="form-check-input" name="famname"
                                                    id="separate-famname" value="1">
                                                <label class="form-check-label" for="separate-famname">
                                                    [Keluarga] Nama
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famstatus" id="famstatus"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famstatus"
                                                    id="separate-famstatus" value="1">
                                                <label class="form-check-label" for="separate-famstatus">
                                                    [Keluarga] Status
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famaddress" id="famaddress"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famaddress"
                                                    id="separate-famaddress" value="1">
                                                <label class="form-check-label" for="separate-famaddress">
                                                    [Keluarga] Alamat
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famkelurahan" id="famkelurahan"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famkelurahan"
                                                    id="separate-famkelurahan" value="1">
                                                <label class="form-check-label" for="separate-famkelurahan">
                                                    [Keluarga] Kelurahan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famkecamatan" id="famkecamatan"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famkecamatan"
                                                    id="separate-famkecamatan" value="1">
                                                <label class="form-check-label" for="separate-famkecamatan">
                                                    [Keluarga] Kecamatan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famcity" id="famcity" value="0">
                                                <input type="checkbox" class="form-check-input" name="famcity"
                                                    id="separate-famcity" value="1">
                                                <label class="form-check-label" for="separate-famcity">
                                                    [Keluarga] Kota
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 mx-auto">
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famphone" id="famphone" value="0">
                                                <input type="checkbox" class="form-check-input" name="famphone"
                                                    id="separate-famphone" value="1">
                                                <label class="form-check-label" for="separate-famphone">
                                                    [Keluarga] No. Telepon
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="famprofession" id="famprofession"
                                                    value="0">
                                                <input type="checkbox" class="form-check-input" name="famprofession"
                                                    id="separate-famprofession" value="1">
                                                <label class="form-check-label" for="separate-famprofession">
                                                    [Keluarga] Pekerjaan
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3">
                                                <input type="hidden" name="created" id="created" value="0">
                                                <input type="checkbox" class="form-check-input" name="created"
                                                    id="separate-created" value="1">
                                                <label class="form-check-label" for="separate-created">
                                                    Tanggal Data
                                                </label>
                                            </div>
                                            <div class="col form-check form-check-inline mb-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success me-2 fw-bolder">PRINT
                                        LAPORAN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot:js>
    </x-slot:js>
</x-main>
