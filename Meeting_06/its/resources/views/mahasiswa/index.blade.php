<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">

    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center">Daftar Mahasiswa</h1>

        <div class="flex justify-end mb-4">
            <a href="{{ route('mahasiswa.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Tambah Mahasiswa</a>
        </div>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Nama</th>
                        <th class="py-3 px-4 text-left">NRP</th>
                        <th class="py-3 px-4 text-left">Dosen Pembimbing</th>
                        <th class="py-3 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($mahasiswa as $m)
                    <tr class="border-b">
                        <td class="py-3 px-4">{{ $m->nama }}</td>
                        <td class="py-3 px-4">{{ $m->nim }}</td>
                        <td class="py-3 px-4">{{ $m->dosen->nama }}</td>
                        <td class="py-3 px-4">
                            <a href="{{ route('mahasiswa.edit', $m->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded ml-2">Hapus</button>
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
