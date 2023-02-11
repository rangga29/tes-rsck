<x-main :title="$title" :active="$active" :print="$print">
    <x-slot:css>
    </x-slot:css>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('patients.update', $patient->pt_norm) }}"
                        method="POST" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_name">Nama Pasien</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pt_name') is-invalid @enderror"
                                    name="pt_name" value="{{ old('pt_name', $patient->pt_name) }}" required>
                                @error('pt_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_address">Alamat</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pt_address') is-invalid @enderror"
                                    name="pt_address" value="{{ old('pt_address', $patient->pt_address) }}" required>
                                @error('pt_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_kelurahan">Kelurahan</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pt_kelurahan') is-invalid @enderror"
                                    name="pt_kelurahan" value="{{ old('pt_kelurahan', $patient->pt_kelurahan) }}"
                                    required>
                                @error('pt_kelurahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_kecamatan">Kecamatan</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pt_kecamatan') is-invalid @enderror"
                                    name="pt_kecamatan" value="{{ old('pt_kecamatan', $patient->pt_kecamatan) }}"
                                    required>
                                @error('pt_kecamatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_city">Kota</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pt_city') is-invalid @enderror"
                                    name="pt_city" value="{{ old('pt_city', $patient->pt_city) }}" required>
                                @error('pt_city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_hometown">Kota Lahir</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pt_hometown') is-invalid @enderror"
                                    name="pt_hometown" value="{{ old('pt_hometown', $patient->pt_hometown) }}"
                                    required>
                                @error('pt_hometown')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_dateofbirth">Tanggal Lahir</label>
                            <div class="col-md-10">
                                <input type="date" class="form-control @error('pt_dateofbirth') is-invalid @enderror"
                                    name="pt_dateofbirth" value="{{ old('pt_dateofbirth', $patient->pt_dateofbirth) }}"
                                    required>
                                @error('pt_dateofbirth')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_religion">Agama</label>
                            <div class="col-md-10">
                                <select class="form-control" name="pt_religion">
                                    <option value="1"
                                        {{ old('pt_religion', $patient->pt_religion) == '1' ? 'selected' : '' }}>
                                        Islam
                                    </option>
                                    <option value="2"
                                        {{ old('pt_religion', $patient->pt_religion) == '2' ? 'selected' : '' }}>
                                        Katolik
                                    </option>
                                    <option value="3"
                                        {{ old('pt_religion', $patient->pt_religion) == '3' ? 'selected' : '' }}>
                                        Kristen
                                    </option>
                                    <option value="4"
                                        {{ old('pt_religion', $patient->pt_religion) == '4' ? 'selected' : '' }}>
                                        Hindu
                                    </option>
                                    <option value="5"
                                        {{ old('pt_religion', $patient->pt_religion) == '5' ? 'selected' : '' }}>
                                        Budha
                                    </option>
                                    <option value="6"
                                        {{ old('pt_religion', $patient->pt_religion) == '6' ? 'selected' : '' }}>
                                        Konghucu
                                    </option>
                                    <option value="7"
                                        {{ old('pt_religion', $patient->pt_religion) == '7' ? 'selected' : '' }}>
                                        Lainnya
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_blood_type">Golongan Darah</label>
                            <div class="col-md-10">
                                <select class="form-control" name="pt_blood_type">
                                    <option value="1"
                                        {{ old('pt_blood_type', $patient->pt_blood_type) == '1' ? 'selected' : '' }}>A
                                    </option>
                                    <option value="2"
                                        {{ old('pt_blood_type', $patient->pt_blood_type) == '2' ? 'selected' : '' }}>B
                                    </option>
                                    <option value="3"
                                        {{ old('pt_blood_type', $patient->pt_blood_type) == '3' ? 'selected' : '' }}>AB
                                    </option>
                                    <option value="4"
                                        {{ old('pt_blood_type', $patient->pt_blood_type) == '4' ? 'selected' : '' }}>O
                                    </option>
                                    <option value="5"
                                        {{ old('pt_blood_type', $patient->pt_blood_type) == '5' ? 'selected' : '' }}>
                                        RHESYS
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_phone">No. Telepon</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pt_phone') is-invalid @enderror"
                                    name="pt_phone" value="{{ old('pt_phone', $patient->pt_phone) }}" required>
                                @error('pt_phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_status">Status</label>
                            <div class="col-md-10">
                                <select class="form-control" name="pt_status">
                                    <option value="1"
                                        {{ old('pt_status', $patient->pt_status) == '1' ? 'selected' : '' }}>Kawin
                                    </option>
                                    <option value="2"
                                        {{ old('pt_status', $patient->pt_status) == '2' ? 'selected' : '' }}>Belum
                                        Kawin
                                    </option>
                                    <option value="3"
                                        {{ old('pt_status', $patient->pt_status) == '3' ? 'selected' : '' }}>Duda
                                    </option>
                                    <option value="4"
                                        {{ old('pt_status', $patient->pt_status) == '4' ? 'selected' : '' }}>Janda
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_education">Pendidikan</label>
                            <div class="col-md-10">
                                <select class="form-control" name="pt_education">
                                    <option value="1"
                                        {{ old('pt_education', $patient->pt_education) == '1' ? 'selected' : '' }}>
                                        Tidak
                                        Bersekolah</option>
                                    <option value="2"
                                        {{ old('pt_education', $patient->pt_education) == '2' ? 'selected' : '' }}>
                                        TB-TK
                                    </option>
                                    <option value="3"
                                        {{ old('pt_education', $patient->pt_education) == '3' ? 'selected' : '' }}>SD
                                    </option>
                                    <option value="4"
                                        {{ old('pt_education', $patient->pt_education) == '4' ? 'selected' : '' }}>SMP
                                    </option>
                                    <option value="5"
                                        {{ old('pt_education', $patient->pt_education) == '5' ? 'selected' : '' }}>
                                        SMA/SMK
                                    </option>
                                    <option value="6"
                                        {{ old('pt_education', $patient->pt_education) == '6' ? 'selected' : '' }}>
                                        Diploma
                                    </option>
                                    <option value="7"
                                        {{ old('pt_education', $patient->pt_education) == '7' ? 'selected' : '' }}>
                                        Strata 1
                                    </option>
                                    <option value="8"
                                        {{ old('pt_education', $patient->pt_education) == '8' ? 'selected' : '' }}>
                                        Strata 2
                                    </option>
                                    <option value="9"
                                        {{ old('pt_education', $patient->pt_education) == '9' ? 'selected' : '' }}>
                                        Strata 3
                                    </option>
                                    <option
                                        value="10 {{ old('pt_education', $patient->pt_education) == '10' ? 'selected' : '' }}">
                                        Lainnya
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pt_profession">Pekerjaan</label>
                            <div class="col-md-10">
                                <input type="text"
                                    class="form-control @error('pt_profession') is-invalid @enderror"
                                    name="pt_profession" value="{{ old('pt_profession', $patient->pt_profession) }}"
                                    required>
                                @error('pt_profession')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-slot:js>
    </x-slot:js>
</x-main>
