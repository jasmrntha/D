@extends('master')

@section('konten')
<form action="/formulir/proses" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>" class="form-control">Nama :
    <input type="text" name="nama" class="form-control"> <br />Alamat :
    <input type="text" name="alamat" class="form-control"> <br />
    <input type="submit" value="Simpan" class="btn btn-success">
</form>
@endsection
