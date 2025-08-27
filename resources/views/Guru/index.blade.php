

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Guru</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f4f6f8; margin:0; }
        .guru-container {
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
            padding: 40px 36px 32px 36px;
        }
        .guru-header {
            display: flex;
            align-items: center;
            gap: 24px;
            margin-bottom: 32px;
        }
        .guru-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #6a8cff 0%, #7f53ff 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 36px;
            box-shadow: 0 2px 8px rgba(122,122,255,0.12);
        }
        .guru-title {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
        }
        .guru-status {
            margin-left: auto;
            background: #e3eafc;
            color: #2d6cff;
            padding: 8px 24px;
            border-radius: 24px;
            font-weight: 600;
            font-size: 1.1rem;
        }
        .guru-actions {
            display: flex;
            gap: 16px;
            margin-bottom: 24px;
        }
        .guru-btn {
            padding: 12px 28px;
            border-radius: 32px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            color: #fff;
            background: #28a745;
            border: none;
            transition: background 0.2s;
            box-shadow: 0 2px 8px rgba(40,167,69,0.10);
        }
        .guru-btn:hover { background: #1e7e34; }
        .siswa-btn {
            background: #2d6cff;
        }
        .siswa-btn:hover { background: #1a4bb3; }
        .guru-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }
        .guru-table th, .guru-table td {
            border: 1px solid #e3eafc;
            padding: 12px;
            text-align: center;
        }
        .guru-table th {
            background: #f8f9fa;
            font-weight: 600;
        }
        .guru-table tr td:first-child {
            font-weight: bold;
            color: #2d6cff;
        }
        .action-btn {
            padding: 8px 18px;
            border-radius: 24px;
            font-size: 0.95rem;
            font-weight: 600;
            border: none;
            margin: 0 2px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .edit-btn { background: #ffc107; color: #333; }
        .edit-btn:hover { background: #d39e00; color: #fff; }
        .delete-btn { background: #dc3545; color: #fff; }
        .delete-btn:hover { background: #a71d2a; }
        .alert {
            margin-bottom: 18px;
            padding: 10px;
            border-radius: 4px;
            background: #d4edda;
            color: #155724;
        }
        @media (max-width: 900px) {
            .guru-container { padding: 18px 6vw; }
            .guru-header { flex-direction: column; gap: 12px; }
        }
    </style>
</head>
<body>
    <div class="guru-container">
        <div class="guru-header">
            <div class="guru-icon">
                <svg width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="18" cy="18" r="18" fill="url(#paint0_linear)"/><path d="M18 19c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.97 0-6 1.49-6 3.5V26h12v-1.5c0-2.01-3.03-3.5-6-3.5z" fill="#fff"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="36" y2="36" gradientUnits="userSpaceOnUse"><stop stop-color="#6a8cff"/><stop offset="1" stop-color="#7f53ff"/></linearGradient></defs></svg>
            </div>
            <div class="guru-title">Sistem Manajemen Guru</div>
            <div class="guru-status">Aktif</div>
        </div>
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        <div class="guru-actions">
            <a href="{{ route('guru.create') }}" class="guru-btn">+ Tambah Guru Baru</a>
            <a href="{{ route('siswas.index') }}" class="guru-btn siswa-btn">Kelola Siswa</a>
        </div>
        <table class="guru-table">
            <thead>
                <tr>
                    <th># ID</th>
                    <th>NIP</th>
                    <th>NAMA GURU</th>
                    <th>PASSWORD</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $guru)
                <tr>
                    <td>#{{ $guru->id }}</td>
                    <td>{{ $guru->nip }}</td>
                    <td>{{ $guru->nama_guru }}</td>
                    <td>{{ $guru->password }}</td>
                    <td>
                        <a href="{{ route('guru.edit', $guru->id) }}" class="action-btn edit-btn">Edit</a>
                        <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-btn delete-btn" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
