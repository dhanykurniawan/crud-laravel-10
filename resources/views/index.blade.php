<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>List Students</h1>

    <a href="/student/create">Add new student</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Agama</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->umur }}</td>
            <td>{{ $student->agama }}</td>
            <td>{{ $student->kelas }}</td>
            <td>
                <a href="/student/{{ $student->id }}/edit">Edit</a>
                <form action='/student/{{ $student->id }}' method='post'>
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('are u sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>