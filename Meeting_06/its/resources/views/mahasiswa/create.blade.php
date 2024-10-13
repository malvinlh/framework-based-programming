<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Tambah Mahasiswa</h1>

        <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Mahasiswa:</label>
                <input type="text" name="nama" id="nama" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="nim" class="block text-sm font-medium text-gray-700">NRP:</label>
                <input type="text" name="nim" id="nim" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="dosen" class="block text-sm font-medium text-gray-700">Dosen Pembimbing:</label>
                <select name="dosen_id" id="dosen" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach($dosen as $d)
                        <option value="{{ $d->id }}">{{ $d->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</body>
</html>
