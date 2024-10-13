<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p>Pilih salah satu untuk melanjutkan:</p>

    <div>
        <a href="{{ route('dosen.index') }}">
            <button>Dosen</button>
        </a>
        <a href="{{ route('mahasiswa.index') }}">
            <button>Mahasiswa</button>
        </a>
    </div>
</body>
</html>
