@extends('master2')

@section('title', 'Database Karyawan')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Karyawan</h3>
    <br />
    <br />
@endsection

@section('konten')
    <table border="1" class="table table-strip table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td style="text-transform: uppercase">{{ $p->namalengkap }}</td>
                <td>{{ $p->divisi }}</td>
                <td style="text-transform: lowercase">{{ $p->departemen }}</td>
                <td>
                    <a href="/eas/delete/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br><br>
    <a href="/eas/insert" class="btn btn-primary">Tambah Karyawan Baru</a>

    {{ $karyawan->links() }}
@endsection
