<table>
    <thead>
        <tr>
            <th>No</th>
            {!! $norm == '1' ? '<th>Nomor Rekam Medis</th>' : '' !!}
            {!! $name == '1' ? '<th>Nama Pasien</th>' : '' !!}
            {!! $address == '1' ? '<th>Alamat</th>' : '' !!}
            {!! $kelurahan == '1' ? '<th>Kelurahan</th>' : '' !!}
            {!! $kecamatan == '1' ? '<th>Kecamatan</th>' : '' !!}
            {!! $city == '1' ? '<th>Kota</th>' : '' !!}
            {!! $hometown == '1' ? '<th>Kota Lahir</th>' : '' !!}
            {!! $dateofbirth == '1' ? '<th>Tanggal Lahir</th>' : '' !!}
            {!! $religion == '1' ? '<th>Agama</th>' : '' !!}
            {!! $blood_type == '1' ? '<th>Gol Darah</th>' : '' !!}
            {!! $phone == '1' ? '<th>No. Telepon</th>' : '' !!}
            {!! $status == '1' ? '<th>Status</th>' : '' !!}
            {!! $education == '1' ? '<th>Pendidikan</th>' : '' !!}
            {!! $profession == '1' ? '<th>Pekerjaan</th>' : '' !!}
            {!! $famname == '1' ? '<th>[Keluarga] Nama</th>' : '' !!}
            {!! $famrelation == '1' ? '<th>[Keluarga] Relasi</th>' : '' !!}
            {!! $famaddress == '1' ? '<th>[Keluarga] Alamat</th>' : '' !!}
            {!! $famkelurahan == '1' ? '<th>[Keluarga] Kelurahan</th>' : '' !!}
            {!! $famkecamatan == '1' ? '<th>[Keluarga] Kecamatan</th>' : '' !!}
            {!! $famcity == '1' ? '<th>[Keluarga] Kota</th>' : '' !!}
            {!! $famphone == '1' ? '<th>[Keluarga] No. Telepon</th>' : '' !!}
            {!! $famprofession == '1' ? '<th>[Keluarga] Pekerjaan</th>' : '' !!}
            {!! $created == '1' ? '<th>Tanggal Data</th>' : '' !!}
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                {!! $norm == '1' ? '<td>' . $item->pt_norm . '</td>' : '' !!}
                {!! $name == '1' ? '<td>' . $item->pt_name . '</td>' : '' !!}
                {!! $address == '1' ? '<td>' . $item->pt_address . '</td>' : '' !!}
                {!! $kelurahan == '1' ? '<td>' . $item->pt_kelurahan . '</td>' : '' !!}
                {!! $kecamatan == '1' ? '<td>' . $item->pt_kecamatan . '</td>' : '' !!}
                {!! $city == '1' ? '<td>' . $item->pt_city . '</td>' : '' !!}
                {!! $hometown == '1' ? '<td>' . $item->pt_hometown . '</td>' : '' !!}
                {!! $dateofbirth == '1' ? '<td>' . $item->pt_dateofbirth . '</td>' : '' !!}
                {!! $religion == '1' ? '<td>' . $item->pt_religion . '</td>' : '' !!}
                {!! $blood_type == '1' ? '<td>' . $item->pt_blood_type . '</td>' : '' !!}
                {!! $phone == '1' ? '<td>' . $item->pt_phone . '</td>' : '' !!}
                {!! $status == '1' ? '<td>' . $item->pt_status . '</td>' : '' !!}
                {!! $education == '1' ? '<td>' . $item->pt_education . '</td>' : '' !!}
                {!! $profession == '1' ? '<td>' . $item->pt_profession . '</td>' : '' !!}
                {!! $famname == '1' ? '<td>' . $item->patient_family->ptf_name . '</td>' : '' !!}
                {!! $famrelation == '1' ? '<td>' . $item->patient_family->ptf_relation . '</td>' : '' !!}
                {!! $famaddress == '1' ? '<td>' . $item->patient_family->ptf_address . '</td>' : '' !!}
                {!! $famkelurahan == '1' ? '<td>' . $item->patient_family->ptf_kelurahan . '</td>' : '' !!}
                {!! $famkecamatan == '1' ? '<td>' . $item->patient_family->ptf_kecamatan . '</td>' : '' !!}
                {!! $famcity == '1' ? '<td>' . $item->patient_family->ptf_city . '</td>' : '' !!}
                {!! $famphone == '1' ? '<td>' . $item->patient_family->ptf_phone . '</td>' : '' !!}
                {!! $famprofession == '1' ? '<td>' . $item->patient_family->ptf_profession . '</td>' : '' !!}
                {!! $created == '1'
                    ? '<td>' . \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->isoFormat('DD MMMM Y') . '</td>'
                    : '' !!}
            </tr>
        @endforeach
    </tbody>
</table>
