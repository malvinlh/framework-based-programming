<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="container mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-center">Daftar Dosen</h1>

        <div class="mb-4 flex justify-between">
            <a href="{{ route('dosen.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Tambah Dosen</a>
        </div>

        @if (session('success'))
            <p class="mb-4 text-green-500">{{ session('success') }}</p>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border border-gray-300">Nama</th>
                        <th class="px-4 py-2 border border-gray-300">Email</th>
                        <th class="px-4 py-2 border border-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dosen as $d)
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">{{ $d->nama }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $d->email }}</td>
                        <td class="px-4 py-2 border border-gray-300">
                            <a href="{{ route('dosen.edit', $d->id) }}" class="text-blue-600 hover:underline mr-4">Edit</a>
                            <form action="{{ route('dosen.destroy', $d->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
