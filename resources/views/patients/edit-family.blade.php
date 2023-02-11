<x-main :title="$title" :active="$active" :print="$print">
    <x-slot:css>
    </x-slot:css>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('patients.update-family', $patient->pt_norm) }}"
                        method="POST" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-md-2" for="ptf_name">Nama Keluarga</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('ptf_name') is-invalid @enderror"
                                    name="ptf_name" value="{{ old('ptf_name', $patient_fam->ptf_name) }}" required>
                                @error('ptf_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="ptf_relation">Status</label>
                            <div class="col-md-10">
                                <select class="form-control" name="ptf_relation">
                                    <option value="1"
                                        {{ old('ptf_relation', $patient_fam->ptf_relation) == '1' ? 'selected' : '' }}>
                                        Anak
                                    </option>
                                    <option value="2"
                                        {{ old('ptf_relation', $patient_fam->ptf_relation) == '2' ? 'selected' : '' }}>
                                        Orang Tua
                                    </option>
                                    <option value="3"
                                        {{ old('ptf_relation', $patient_fam->ptf_relation) == '3' ? 'selected' : '' }}>
                                        Suami
                                    </option>
                                    <option value="4"
                                        {{ old('ptf_relation', $patient_fam->ptf_relation) == '4' ? 'selected' : '' }}>
                                        Istri
                                    </option>
                                    <option value="5"
                                        {{ old('ptf_relation', $patient_fam->ptf_relation) == '5' ? 'selected' : '' }}>
                                        Wali
                                    </option>
                                    <option value="6"
                                        {{ old('ptf_relation', $patient_fam->ptf_relation) == '6' ? 'selected' : '' }}>
                                        YBS
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="ptf_address">Alamat</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('ptf_address') is-invalid @enderror"
                                    name="ptf_address" value="{{ old('ptf_address', $patient_fam->ptf_address) }}"
                                    required>
                                @error('ptf_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="ptf_kelurahan">Kelurahan</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('ptf_kelurahan') is-invalid @enderror"
                                    name="ptf_kelurahan"
                                    value="{{ old('ptf_kelurahan', $patient_fam->ptf_kelurahan) }}" required>
                                @error('ptf_kelurahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="ptf_kecamatan">Kecamatan</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('ptf_kecamatan') is-invalid @enderror"
                                    name="ptf_kecamatan"
                                    value="{{ old('ptf_kecamatan', $patient_fam->ptf_kecamatan) }}" required>
                                @error('ptf_kecamatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="ptf_city">Kota</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('ptf_city') is-invalid @enderror"
                                    name="ptf_city" value="{{ old('ptf_city', $patient_fam->ptf_city) }}" required>
                                @error('ptf_city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="ptf_phone">No. Telepon</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('ptf_phone') is-invalid @enderror"
                                    name="ptf_phone" value="{{ old('ptf_phone', $patient_fam->ptf_phone) }}" required>
                                @error('ptf_phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="ptf_profession">Pekerjaan</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('ptf_profession') is-invalid @enderror"
                                    name="ptf_profession"
                                    value="{{ old('ptf_profession', $patient_fam->ptf_profession) }}" required>
                                @error('ptf_profession')
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
