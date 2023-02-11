<x-main :title="$title" :active="$active" :print="$print">
    <x-slot:css>
    </x-slot:css>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('patients.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-2" for="pat_norm">NORM</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pat_norm') is-invalid @enderror"
                                    name="pat_norm" id="pat_norm" value="{{ old('pat_norm') }}" required>
                                @error('pat_norm')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pat_name">Nama Pasien</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pat_name') is-invalid @enderror"
                                    name="pat_name" id="pat_name" value="{{ old('pat_name') }}" readonly>
                                @error('pat_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pat_address">Alamat</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pat_address') is-invalid @enderror"
                                    name="pat_address" id="pat_address" value="{{ old('pat_address') }}" readonly>
                                @error('pat_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pat_age">Umur</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pat_age') is-invalid @enderror"
                                    name="pat_age" id="pat_age" value="{{ old('pat_age') }}" readonly>
                                @error('pat_age')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pat_phone">No. Telepon</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pat_phone') is-invalid @enderror"
                                    name="pat_phone" id="pat_phone" value="{{ old('pat_phone') }}" readonly>
                                @error('pat_phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="pat_family">Nama Keluarga</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('pat_family') is-invalid @enderror"
                                    name="pat_family" id="pat_family" value="{{ old('pat_family') }}" readonly>
                                @error('pat_family')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-md-2" for="clinic_id">Nama Klinik</label>
                            <div class="col-md-10">
                                <select class="form-control" name="clinic_id">
                                    @foreach ($clinics as $clinic)
                                        @if (old('clinic_id') == $clinic->id)
                                            <option value="{{ $clinic->id }}" selected>
                                                {{ $clinic->cl_name }}
                                            </option>
                                        @else
                                            <option value="{{ $clinic->id }}">
                                                {{ $clinic->cl_name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="doctor_id">Nama Dokter</label>
                            <div class="col-md-10">
                                <select class="form-control" name="doctor_id">
                                    @foreach ($doctors as $doctor)
                                        @if (old('doctor_id') == $doctor->id)
                                            <option value="{{ $doctor->id }}" selected>
                                                {{ $doctor->dr_name }}
                                            </option>
                                        @else
                                            <option value="{{ $doctor->id }}">
                                                {{ $doctor->dr_name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="rcl_cara_datang">Cara Datang</label>
                            <div class="col-md-10">
                                <select class="form-control" name="rcl_cara_datang">
                                    <option value="1" {{ old('rcl_cara_datang') == '1' ? 'selected' : '' }}>
                                        Datang Sendiri
                                    </option>
                                    <option value="2" {{ old('rcl_cara_datang') == '2' ? 'selected' : '' }}>B
                                    </option>
                                    <option value="3" {{ old('rcl_cara_datang') == '3' ? 'selected' : '' }}>AB
                                    </option>
                                    <option value="4" {{ old('rcl_cara_datang') == '4' ? 'selected' : '' }}>O
                                    </option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-slot:js>
        <script>
            const norm = document.querySelector('#pat_norm');
            const name = document.querySelector('#pat_name');
            const address = document.querySelector('#pat_address');
            const age = document.querySelector('#pat_age');
            const phone = document.querySelector('#pat_phone');
            const family = document.querySelector('#pat_family');

            norm.addEventListener('change', function() {
                fetch('/polyclinics/checkData?norm=' + norm.value)
                    .then(response => response.json())
                    .then(data => {
                        const { pat_name, pat_address, pat_age, pat_phone, pat_family } = data;
                        document.querySelector('#pat_name').value = pat_name;
                        document.querySelector('#pat_address').value = pat_address;
                        document.querySelector('#pat_age').value = pat_age;
                        document.querySelector('#pat_phone').value = pat_phone;
                        document.querySelector('#pat_family').value = pat_family;
                    })
            });
        </script>
    </x-slot:js>
</x-main>
