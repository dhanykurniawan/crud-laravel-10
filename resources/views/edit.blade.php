<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit student</h1>

    <a href="/student">List all student</a>

    <form action='/student/{{ $student->id }}' method='post'>
        @method('put')
        @csrf
        <table>
            <tr>
                <input type="hidden" name="id" value="{{ $student->id }}">
                <td>Nama</td>
                <td><input type="text" name="nama" value="{{ old('nama', $student->nama) }}"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur" value="{{ old('umur', $student->umur) }}"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" value="{{ old('agama', $student->agama) }}"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="{{ old('kelas', $student->kelas) }}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button>Simpan Perubahan</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
