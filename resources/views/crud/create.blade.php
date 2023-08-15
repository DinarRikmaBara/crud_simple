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
        <form action="{{ route('create') }}" method="POST">
        <table>
                @csrf
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    Prodi
                </td>
                <td>
                    <select name="idP" id="">
                        @foreach ($prodi as $item)
                            <option value="{{ $item->idP }}">{{ $item->prodi }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                    <select name="idK" id="">
                        @foreach ($kelas as $item)
                            <option value="{{ $item->idK }}">{{ $item->kelas }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Angkatan
                </td>
                <td>

                    <select name="idA" id="">
                        @foreach ($angkatan as $item)
                            <option value="{{ $item->idA }}">{{ $item->angkatan }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><a href="/">Kembali</a></td>
                <td><button type="submit">Tambah</button></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>