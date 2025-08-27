<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Management</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
        }
        .main-container {
            max-width: 900px;
            margin: 60px auto;
            display: flex;
            justify-content: center;
            gap: 40px;
        }
        .card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 36px 32px 32px 32px;
            flex: 1 1 0;
            min-width: 340px;
            text-align: center;
            border: 2px solid #e3eafc;
            transition: box-shadow 0.2s, border 0.2s;
        }
        .card.active {
            border: 2px solid #cfd8ff;
            box-shadow: 0 8px 32px rgba(0,0,0,0.12);
        }
        .card-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #6a8cff 0%, #7f53ff 100%);
            border-radius: 50%;
            color: #fff;
            font-size: 44px;
            box-shadow: 0 2px 8px rgba(122, 122, 255, 0.12);
        }
        .card-siswa .card-icon {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        .card-desc {
            color: #666;
            font-size: 1rem;
            margin-bottom: 28px;
        }
        .card-btn {
            display: inline-block;
            padding: 12px 32px;
            border-radius: 32px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            color: #fff;
            background: #2d6cff;
            box-shadow: 0 2px 8px rgba(45,108,255,0.10);
            transition: background 0.2s;
            border: none;
        }
        .card-siswa .card-btn {
            background: #28a745;
        }
        .card-btn:hover {
            background: #1a4bb3;
        }
        .card-siswa .card-btn:hover {
            background: #1e7e34;
        }
        @media (max-width: 900px) {
            .main-container {
                flex-direction: column;
                gap: 32px;
                max-width: 98vw;
            }
        }
    </style>
</head>
<body>
    <h1 style="text-align:center; margin-top:40px; color:#333; font-size:2.2rem; font-weight:700;">Sistem Manajemen Data</h1>
    <div class="main-container">
        <div class="card card-guru active">
            <div class="card-icon">
                <!-- Guru SVG Icon -->
                <svg width="48" height="48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="url(#paint0_linear)"/><path d="M24 25c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zm0 2c-4.418 0-8 2.239-8 5v2h16v-2c0-2.761-3.582-5-8-5z" fill="#fff"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="48" y2="48" gradientUnits="userSpaceOnUse"><stop stop-color="#6a8cff"/><stop offset="1" stop-color="#7f53ff"/></linearGradient></defs></svg>
            </div>
            <div class="card-title">Manajemen Guru</div>
            <div class="card-desc">Kelola data guru secara lengkap dengan fitur tambah, edit, hapus, dan lihat detail. Interface yang user-friendly dan modern.</div>
            <a href="{{ route('guru.index') }}" class="card-btn">&#8594; Kelola Guru</a>
        </div>
        <div class="card card-siswa">
            <div class="card-icon">
                <!-- Siswa SVG Icon -->
                <svg width="48" height="48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="url(#paint1_linear)"/><path d="M24 22c2.209 0 4-1.791 4-4s-1.791-4-4-4-4 1.791-4 4 1.791 4 4 4zm0 2c-3.314 0-6 1.343-6 3v2h12v-2c0-1.657-2.686-3-6-3zm8-2c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm0 2c-2.21 0-4 1.343-4 3v2h8v-2c0-1.657-1.79-3-4-3z" fill="#fff"/><defs><linearGradient id="paint1_linear" x1="0" y1="0" x2="48" y2="48" gradientUnits="userSpaceOnUse"><stop stop-color="#43e97b"/><stop offset="1" stop-color="#38f9d7"/></linearGradient></defs></svg>
            </div>
            <div class="card-title">Manajemen Siswa</div>
            <div class="card-desc">Kelola data siswa dengan fitur yang sama lengkapnya. Sistem yang terintegrasi dan mudah digunakan.</div>
            <a href="{{ route('siswas.index') }}" class="card-btn">&#8594; Kelola Siswa</a>
        </div>
    </div>
</body>
</html>
