

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Siswa</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f4f6f8; margin:0; }
        .siswa-container {
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
            padding: 40px 36px 32px 36px;
        }
        .siswa-header {
            display: flex;
            align-items: center;
            gap: 24px;
            margin-bottom: 32px;
        }
        .siswa-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 36px;
            box-shadow: 0 2px 8px rgba(67,233,123,0.12);
        }
        .siswa-title {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
        }
        .siswa-status {
            margin-left: auto;
            background: #e3fcec;
            color: #28a745;
            padding: 8px 24px;
            border-radius: 24px;
            font-weight: 600;
            font-size: 1.1rem;
        }
        .siswa-actions {
            display: flex;
            gap: 16px;
            margin-bottom: 24px;
        }
        .siswa-btn {
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
        .siswa-btn:hover { background: #1e7e34; }
        .guru-btn {
            background: #2d6cff;
        }
        .guru-btn:hover { background: #1a4bb3; }
        .siswa-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }
        .siswa-table th, .siswa-table td {
            border: 1px solid #e3eafc;
            padding: 12px;
            text-align: center;
        }
        .siswa-table th {
            background: #f8f9fa;
            font-weight: 600;
        }
        .siswa-table tr td:first-child {
            font-weight: bold;
            color: #28a745;
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
            .siswa-container { padding: 18px 6vw; }
            .siswa-header { flex-direction: column; gap: 12px; }
        }
    </style>
</head>
<body>
    <div class="siswa-container">
        <div class="siswa-header">
            <div class="siswa-icon">
                <svg width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="18" cy="18" r="18" fill="url(#paint1_linear)"/><path d="M18 16c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm0 2c-2.21 0-4 1.343-4 3v1.5h8V21c0-1.657-1.79-3-4-3zm6-2c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zm0 2c-1.657 0-3 .895-3 2v1.5h6V20c0-1.105-1.343-2-3-2z" fill="#fff"/><defs><linearGradient id="paint1_linear" x1="0" y1="0" x2="36" y2="36" gradientUnits="userSpaceOnUse"><stop stop-color="#43e97b"/><stop offset="1" stop-color="#38f9d7"/></linearGradient></defs></svg>
            </div>
            <div class="siswa-title">Sistem Manajemen Siswa</div>
            <div class="siswa-status">Aktif</div>
        </div>
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        <div class="siswa-actions">
            <a href="{{ route('siswas.create') }}" class="siswa-btn">+ Tambah Siswa Baru</a>
            <a href="{{ route('guru.index') }}" class="siswa-btn guru-btn">Kelola Guru</a>
        </div>
        <table class="siswa-table">
            <thead>
                <tr>
                    <th># ID</th>
                    <th>NIS</th>
                    <th>NAMA SISWA</th>
                    <th>PASSWORD</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $item)
                <tr>
                    <td>#{{ $item->id }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama_siswa }}</td>
                    <td>{{ $item->password }}</td>
                    <td>
                        <a href="{{ route('siswas.edit', $item->id) }}" class="action-btn edit-btn">Edit</a>
                        <form action="{{ route('siswas.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
