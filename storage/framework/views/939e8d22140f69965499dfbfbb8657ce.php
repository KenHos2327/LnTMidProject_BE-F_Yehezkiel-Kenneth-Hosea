<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h2>Update Karyawan</h2>
    <form method="post" action="<?php echo e(route('employee.update', ['employee' => $employee])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
       
        <label for="name">Nama Karyawan (5-20 karakter):</label><br>
        <input type="text" name="name" pattern=".{5,20}" required value="<?php echo e($employee->name); ?>"><br>

        <label for="age">Umur Karyawan (>20 tahun):</label><br>
        <input type="number" name="age" min="21" required value="<?php echo e($employee->age); ?>"><br>

        <label for="address">Alamat Karyawan (10-40 karakter):</label><br>
        <input type="text" name="address" pattern=".{10,40}" required value="<?php echo e($employee->address); ?>"><br>

        <label for="number">Nomor Telepon Karyawan (9-12 karakter, dimulai dari 08):</label><br>
        <input type="tel" name="number" pattern="[0-9]{7,10}" required value="<?php echo e($employee->number); ?>"><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-bncc\resources\views/employees/edit.blade.php ENDPATH**/ ?>