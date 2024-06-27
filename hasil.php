<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
        text-align: center;
        margin-top: 20px;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .result {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        button {
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <<div class="container">
    <h1>Hasil Diagnosa Kesehatan Mental</h1>
    <?php
    if (isset($_GET['diagnosis'])) {
        $diagnosis = $_GET['diagnosis']; 

        echo "<p class='result'>Hasil diagnosa: $diagnosis</p>";
    } else {
         echo "<p class='result'>Tidak ada hasil diagnosa yang ditemukan.</p>";
    }
    ?>
    <button onclick="location.href='halamanUtama.php'">Kembali</butto>
</div> 

</body>
</html>
