<x-main :title="$title" :active="$active" :print="$print">
    <x-slot:css>
    </x-slot:css>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4>Data Pribadi</h4>
                    <table>
                        <tr>
                            <th>Nomor Rekam Medis</th>
                            <td> : {{ $patient->pt_norm }}</td>
                        </tr>
                        <tr>
                            <th>Nama Pasien</th>
                            <td> : {{ $patient->pt_name }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td> : {{ $patient->pt_address }}</td>
                        </tr>
                        <tr>
                            <th>Kelurahan</th>
                            <td> : {{ $patient->pt_kelurahan }}</td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <td> : {{ $patient->pt_kecamatan }}</td>
                        </tr>
                        <tr>
                            <th>Kota</th>
                            <td> : {{ $patient->pt_city }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Tanggal Lahir</th>
                            <td> : {{ $patient->pt_hometown }},
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $patient->pt_dateofbirth)->isoFormat('DD MMMM Y') }}
                            </td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>:
                                {{ $patient->pt_religion == '1'
                                    ? 'Islam'
                                    : ($patient->pt_religion == '2'
                                        ? 'Katolik'
                                        : ($patient->pt_religion == '3'
                                            ? 'Kristen'
                                            : ($patient->pt_religion == '4'
                                                ? 'Hindu'
                                                : ($patient->pt_religion == '5'
                                                    ? 'Budha'
                                                    : ($patient->pt_religion == '6'
                                                        ? 'Konghucu'
                                                        : 'Lainnya'))))) }}
                            </td>
                        </tr>
                        <tr>
                            <th>Golongan Darah</th>
                            <td>:
                                {{ $patient->pt_blood_type == '1'
                                    ? 'A'
                                    : ($patient->pt_blood_type == '2'
                                        ? 'B'
                                        : ($patient->pt_blood_type == '3'
                                            ? 'AB'
                                            : ($patient->pt_blood_type == '4'
                                                ? 'O'
                                                : 'RHESYS'))) }}
                            </td>
                        </tr>
                        <tr>
                            <th>No. Telepon</th>
                            <td> : {{ $patient->pt_phone }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:
                                {{ $patient->pt_status == '1'
                                    ? 'Kawin'
                                    : ($patient->pt_status == '2'
                                        ? 'Belum Kawin'
                                        : ($patient->pt_status == '3'
                                            ? 'Duda'
                                            : 'Janda')) }}
                            </td>
                        </tr>
                        <tr>
                            <th>Pendidikan</th>
                            <td>:
                                {{ $patient->pt_education == '1'
                                    ? 'Tidak Sekolah'
                                    : ($patient->pt_education == '2'
                                        ? 'TB-TK'
                                        : ($patient->pt_education == '3'
                                            ? 'SD'
                                            : ($patient->pt_education == '4'
                                                ? 'SMP'
                                                : ($patient->pt_education == '5'
                                                    ? 'SMA/SMK'
                                                    : ($patient->pt_education == '6'
                                                        ? 'Diploma'
                                                        : ($patient->pt_education == '7'
                                                            ? 'Strata 1'
                                                            : ($patient->pt_education == '8'
                                                                ? 'Strata 2'
                                                                : ($patient->pt_education == '9'
                                                                    ? 'Strata 3'
                                                                    : 'Lainnya')))))))) }}
                            </td>
                        </tr>
                        <tr>
                            <th>Pekerjaan</th>
                            <td> : {{ $patient->pt_profession }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Data Keluarga</h4>
                    <table>
                        <tr>
                            <th>Nama Keluarga</th>
                            <td> : {{ $patient_fam->ptf_name }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:
                                {{ $patient_fam->ptf_relation == '1'
                                    ? 'Anak'
                                    : ($patient_fam->ptf_relation == '2'
                                        ? 'Orang Tua'
                                        : ($patient_fam->ptf_relation == '3'
                                            ? 'Suami'
                                            : ($patient_fam->ptf_relation == '4'
                                                ? 'Istri'
                                                : ($patient_fam->ptf_relation == '5'
                                                    ? 'Wali'
                                                    : 'YBS')))) }}
                            </td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td> : {{ $patient_fam->ptf_address }}</td>
                        </tr>
                        <tr>
                            <th>Kelurahan</th>
                            <td> : {{ $patient_fam->ptf_kelurahan }}</td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <td> : {{ $patient_fam->ptf_kecamatan }}</td>
                        </tr>
                        <tr>
                            <th>Kota</th>
                            <td> : {{ $patient_fam->ptf_city }}</td>
                        </tr>
                        <tr>
                            <th>No. Telepon</th>
                            <td> : {{ $patient_fam->ptf_phone }}</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan</th>
                            <td> : {{ $patient_fam->ptf_profession }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-slot:js>
    </x-slot:js>
</x-main>
