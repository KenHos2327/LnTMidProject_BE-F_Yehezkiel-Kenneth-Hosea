<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #555;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        .actions {
            text-align: center;
            margin-bottom: 20px;
        }
        .add-link {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .add-link:hover {
            background-color: #0056b3;
        }
        .delete-button {
            background-color: #dc3545;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .delete-button:hover {
            background-color: #c82333;
        }
        .edit-button {
            background-color: #28a745;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .edit-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Data Karyawan</h2>
    <div class="actions">
        <a class="add-link" href="{{ route('employee.create') }}">Tambah Karyawan Baru</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee) 
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->age }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->number }}</td>
                    <td>
                        <a href="{{ route('employee.edit', ['employee' => $employee]) }}" class="edit-button">Edit</a>
                        <form method="post" action="{{ route('employee.annihilate', ['employee' => $employee]) }}" style="display: inline-block;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="delete-button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
