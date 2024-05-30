<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <!-- Tambahkan link ke Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-red-200">
<div class="container mx-auto mt-10">
    <div class="flex">
        <!-- Tabel Produk -->
        <div class="w-2/3 pr-4 ">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-pink-800 text-white">
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Nama Produk</th>
                        <th class="py-2 px-4 border-b">Deskripsi Produk</th>
                        <th class="py-2 px-4 border-b">Harga Produk</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nama as $index => $item )
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $index + 1}}</td>
                        <td class="py-2 px-4 border-b">{{ $item}}</td>
                        <td class="py-2 px-4 border-b">{{ $desc[$index]}}</td>
                        <td class="py-2 px-4 border-b">{{ $harga[$index]}}</td>
                        <td class="py-2 px-4 border-b">
                            <form action="{{ route('produk.delete', $id[$index])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700" onclick="return confirm('Are you sure you want to delete {{ $item}}?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Form Input Produk -->
        <div class="w-96 bg-pink-800 p-6 shadow-lg fixed right-10 top-20 rounded-3xl">
            <h1 class="text-2xl font-bold mb-4 text-white text-center">Input Produk</h1>
            <form method="POST" action="{{ route('produk.simpan')}}" class="bg-rose-100">
            @csrf
                <div class="mb-4 bg-rose-100">
                    <label for="nama" class="block text-white">Nama:</label>
                    <input type="text" id="nama" name="nama" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block text-white">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" class="w-full p-2 border border-gray-300 rounded mt-1"></textarea>
                </div>
                <div class="mb-4">
                    <label for="harga" class="block text-white">Harga:</label>
                    <input type="number" id="harga" name="harga" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-800">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
