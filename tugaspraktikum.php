<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            height: 36px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        br {
            clear: both;
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
    <h2>Tugas Praktikum</h2>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="lname">Agama:</label>
        <input type="text" id="agama" name="agama"><br><br>
        <label for="jabatan">Jabatan :</label>
        <select name="jabatan" id="jabatan">
            <option value="Manager">Manager</option>
            <option value="Asisten">Asisten</option>
            <option value="Kabag">Kabag</option>
            <option value="Staff">Staff</option>
        </select><br><br>
        <label for="status">Status :</label>
        <select name="status" id="status">
            <option value="menikah">Menikah</option>
            <option value="Belum Menikah">Belum Nikah</option>
        </select><br><br>
        <label for="jumlah">Jumlah anak :</label>
        <input type="number" id="jumlah" name="jumlah"><br><br>
        <input type="submit" value="submit">
    </form>
    <br>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $agama = $_POST["agama"];
            $jabatan = $_POST["jabatan"];
            $status = $_POST["status"];
            $jumlah = $_POST["jumlah"];

            echo "<h2>Informasi Pegawai</h2>";
            echo "Nama Pegawai = $nama<br>";
            echo "Agama = $agama<br>";
            echo "Jabatan = $jabatan<br>";
            echo "Status = $status<br>";

            if ($status == "menikah") {
                echo "Jumlah anak = $jumlah<br>";
            }
        }
    ?>
</body>
</html>
