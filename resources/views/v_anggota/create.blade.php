<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$judul}}</title>
</head>

<body>
    <h3>{{ $judul }}</h3>
    <form action="{{ route ('anggota.store') }}"method="post"()>
        @csrf
        <label>Nama</label><br>
        <input type="text" name="nama" id="" value ="{{ old('nama') }}" placeholder="Masukan nama Lengkap" class="form-control @error('nama') is-invalid @enderror">
        @error('nama')
        <span class="invalid-feedback alert-danger" role="alert">
        {{ $message }}
        </span>
        @enderror
        <p><p>
        <label>HP</label><br>
        <input type="text" name="hp" id=""value ="{{ old('hp') }}" placeholder="Masukkan Nomor HP" class="form-control @error('hp') is-invalid @enderror">
        @error('hp')
        <span class="invalid-feedback alert-danger" role="alert">
        {{ $message }}
        </span>
        @enderror
        <p><p>
    <button type="submit">Simpan</button>
    <a href="{{ route('anggota.index') }}">
        <button type="button">Batal</button>
    </form>
</body>
</html>