<div class="container m-auto w-full">
    <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Status Pernikahan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $karyawan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td width="100px" height="100px">{{ $karyawan->name_karyawan }}</td>
                    <td width="100px" height="100px">{{ $karyawan->tanggal_lahir }}</td>
                    <td width="100px" height="100px">{{ $karyawan->alamat }}</td>
                    <td width="100px" height="100px">{{ $karyawan->status_pernikahan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
