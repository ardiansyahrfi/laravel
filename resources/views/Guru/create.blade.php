<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; }
        .container { max-width: 400px; margin: 40px auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); padding: 32px 24px; }
        h2 { text-align: center; color: #333; }
        form { display: flex; flex-direction: column; gap: 16px; }
        label { font-weight: bold; }
        input[type="text"] { padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        .btn { padding: 10px 0; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .btn:hover { background: #0056b3; }
        .back-link { display: block; margin-bottom: 18px; color: #007bff; text-decoration: none; }
        .back-link:hover { text-decoration: underline; }
        .error { color: #dc3545; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <a href="/" class="back-link">&larr; Kembali</a>
        <h2>Tambah Guru</h2>
        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <label for="nip">NIP</label>
            <input type="text" name="nip" id="nip" value="{{ old('nip') }}" required>
            @error('nip')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="nama_guru">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama_guru" value="{{ old('nama_guru') }}" required>
            @error('nama_guru')
                <div class="error">{{ $message }}</div>
            @enderror



            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
</body>
</html>

</body>
</html>
