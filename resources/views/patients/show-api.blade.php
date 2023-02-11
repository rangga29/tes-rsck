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
                            <td> : {{ $patient['NOMR'] }}</td>
                        </tr>
                        <tr>
                            <th>Nama Pasien</th>
                            <td> : {{ $patient['NAMA'] }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td> : {{ $patient['SEBUTANALMT'] }} {{ $patient['ALMTPASIEN'] }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td> :
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $patient['TGLLAHIR'])->isoFormat('DD MMMM Y') }}
                            </td>
                        </tr>
                        <tr>
                            <th>Nomor Kartu BPJS</th>
                            <td> : {{ $patient['BPJSCardNo'] }}</td>
                        </tr>
                        <tr>
                            <th>SSN</th>
                            <td> : {{ $patient['SSN'] }}</td>
                        </tr>
                        <tr>
                            <th>No. Telepon Rumah 1</th>
                            <td> : {{ $patient['HomePhoneNo1'] }}</td>
                        </tr>
                        <tr>
                            <th>No. Telepon Rumah 2</th>
                            <td> : {{ $patient['HomePhoneNo2'] }}</td>
                        </tr>
                        <tr>
                            <th>No. Handphone 1</th>
                            <td> : {{ $patient['MobileNo1'] }}</td>
                        </tr>
                        <tr>
                            <th>No. Handphone 2</th>
                            <td> : {{ $patient['MobileNo2'] }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-slot:js>
    </x-slot:js>
</x-main>
