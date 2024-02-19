<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="number"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Formulir Karyawan</h2>
    <form method="post" action="{{ route('employee.store') }}">
        @csrf

        <label for="name">Employee Name (5-20 characters):</label><br>
        <input type="text" name="name" pattern=".{5,20}" required><br>

        <label for="age">Employee Age (>20 years):</label><br>
        <input type="number" name="age" min="21" required><br>

        <label for="address">Employee Address (10-40 characters):</label><br>
        <input type="text" name="address" pattern=".{10,40}" required><br>

        <label for="number">Employee Phone Number (9-12 characters, starting from 08):</label><br>
        <input type="tel" name="number" pattern="[0-9]{7,10}" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>