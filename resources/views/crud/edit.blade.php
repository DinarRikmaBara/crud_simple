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
        @foreach ($data as $item1)
            
        <form action="{{ route('update',$item1->idM) }}" method="POST">
        <table>
                @csrf
                @method('PUT')
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value={{ $item1->nama }}>
                </td>
            </tr>
            <tr>
                <td>
                    Prodi
                </td>
                <td>
                    <select name="idP" id="">
                        <option  value="{{ $item1->idP }}">{{ $item1->prodi }}</option>

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

                        <option  value="{{ $item1->idK }}">{{ $item1->kelas }}</option>

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
                        <option  value="{{ $item1->idA }}">{{ $item1->angkatan }}</option>

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
        @endforeach
    </div>
</body>
</html>