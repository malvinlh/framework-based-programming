<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pusat Database Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10">
        @if (@session()->has("success"))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{session('success')}}</span>
        </div>
        @endif

        <h1 class="text-3xl font-bold text-center mb-6">Selamat Datang</h1>
        <h2 class="text-xl font-semibold text-center mb-4">Di Pusat Database Mahasiswa</h2>

        <div class="text-center mb-6">
            <a href="{{route('mahasiswa.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Buat Mahasiswa Baru
            </a>
        </div>

        <table class="min-w-full bg-white shadow-md rounded overflow-hidden border-collapse">
            <thead>
                <tr class="bg-gray-800 text-white text-left">
                    <th class="py-2 px-4">NRP</th>
                    <th class="py-2 px-4">Nama</th>
                    <th class="py-2 px-4">Alamat</th>
                    <th class="py-2 px-4">No. HP</th>
                    <th class="py-2 px-4">Jurusan</th>
                    <th class="py-2 px-4">Email</th>
                    <th class="py-2 px-4">Edit</th>
                    <th class="py-2 px-4">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $siswa)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-2 px-4">{{$siswa->nrp}}</td>
                    <td class="py-2 px-4">{{$siswa->nama}}</td>
                    <td class="py-2 px-4">{{$siswa->alamat}}</td>
                    <td class="py-2 px-4">{{$siswa->no_hp}}</td>
                    <td class="py-2 px-4">{{$siswa->jurusan}}</td>
                    <td class="py-2 px-4">{{$siswa->email}}</td>
                    <td class="py-2 px-4 text-center">
                        <a href="{{route('mahasiswa.edit', ['mahasiswa' => $siswa])}}" class="text-blue-500 hover:underline">Edit</a>
                    </td>
                    <td class="py-2 px-4 text-center">
                        <form action="{{route('mahasiswa.delete',['mahasiswa'=> $siswa])}}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data?')">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="text-red-500 hover:underline cursor-pointer">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
