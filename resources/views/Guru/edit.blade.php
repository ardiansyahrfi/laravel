<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Guru</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f4f6f8; margin:0; }
        .edit-container {
            max-width: 480px;
            margin: 50px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
            padding: 36px 32px 32px 32px;
        }
        .edit-header {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 24px;
        }
        .edit-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #6a8cff 0%, #7f53ff 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 28px;
            box-shadow: 0 2px 8px rgba(122,122,255,0.12);
        }
        .edit-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
        }
        .edit-form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        label { font-weight: bold; color: #333; }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #e3eafc;
            border-radius: 6px;
            font-size: 1rem;
        }
        .edit-btn {
            padding: 12px 0;
            background: #ffc107;
            color: #333;
            border: none;
            border-radius: 32px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background 0.2s, color 0.2s;
        }
        .edit-btn:hover { background: #d39e00; color: #fff; }
        .back-link {
            display: inline-block;
            margin-bottom: 18px;
            color: #2d6cff;
            text-decoration: none;
            font-weight: 600;
        }
        .back-link:hover { text-decoration: underline; }
        .error { color: #dc3545; font-size: 14px; }
    </style>
</head>
<body>
    <div class="edit-container">
        <a href="{{ route('guru.index') }}" class="back-link">&larr; Kembali</a>
        <div class="edit-header">
            <div class="edit-icon">
                <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="14" cy="14" r="14" fill="url(#paint0_linear)"/><path d="M14 15c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.97 0-6 1.49-6 3.5V20h12v-1.5c0-2.01-3.03-3.5-6-3.5z" fill="#fff"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="28" y2="28" gradientUnits="userSpaceOnUse"><stop stop-color="#6a8cff"/><stop offset="1" stop-color="#7f53ff"/></linearGradient></defs></svg>
            </div>
            <div class="edit-title">Edit Guru</div>
        </div>
        <form action="{{ route('guru.update', $guru->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')
            <label for="nip">NIP</label>
            <input type="text" name="nip" id="nip" value="{{ old('nip', $guru->nip) }}" required>
            @error('nip')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="nama_guru">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama_guru" value="{{ old('nama_guru', $guru->nama_guru) }}" required>
            @error('nama_guru')
                <div class="error">{{ $message }}</div>
            @enderror



            <button type="submit" class="edit-btn">Update Guru</button>
        </form>
    </div>
</body>
</html>
