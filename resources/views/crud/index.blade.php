<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <a href="/create">Tambah</a>
            <div>
                <form action="{{ route('cari') }}">
                    <input type="text" name="cari">
                    <button type="submit">cari</button>
                </form>
            </div>
        </div>
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>PRODI</th>
                    <th>KELAS</th>
                    <th>ANGKATAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->angkatan }}</td>
                    <td>
                        <a href="/edit/{{ $item->idM }}">Edit</a>
                        <a href="/delete/{{ $item->idM }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>