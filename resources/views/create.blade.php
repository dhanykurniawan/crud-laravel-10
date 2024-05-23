<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create new student</h1>

    <a href="/student">List all student</a>

    <form action='/student' method='post'>
        @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button>Simpan Data</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
