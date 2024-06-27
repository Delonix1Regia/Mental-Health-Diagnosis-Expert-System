<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>UTS-AI</title>
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

    h2 {
      text-align: center;
      margin-top: 15px;
    }

    form {
      width: 80%;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    table td label {
      display: block;
      font-weight: bold;
    }

    table td select {
      width: 100%;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ddd;
      box-sizing: border-box;
    }

    button[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <h1>Sistem Pakar Diagnosa Kesehatan Mental</h1>
  <h2>Silakan jawab pertanyaan-pertanyaan di bawah sesuai dengan keadaan sebenarnya.</h2>
  <form action="diagnosa.php" method="post">
    <table>
      <tr>
        <td>
          <label for="a1">Pertanyaan 1: Perasaan sedih yang berlangsung lebih dari dua
            minggu</label>
        </td>
        <td>
          <select name="a1" id="a1">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a2">Pertanyaan 2: Kehilangan minat atau kesenangan dalam aktivitas
            sehari-hari</label>
        </td>
        <td>
          <select name="a2" id="a2">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a3">Pertanyaan 3: Perubahan berat badan yang signifikan tanpa alasan
            yang jelas</label>
        </td>
        <td>
          <select name="a3" id="a3">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a4">Pertanyaan 4: Kesusahan tidur atau tidur terlalu banyak</label>
        </td>
        <td>
          <select name="a4" id="a4">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a5">Pertanyaan 5: Kecemasan yang berlebihan dan sulit
            dikendalikan</label>
        </td>
        <td>
          <select name="a5" id="a5">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a6">Pertanyaan 6: Serangan panik yang tiba-tiba</label>
        </td>
        <td>
          <select name="a6" id="a6">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a7">Pertanyaan 7: Perasaan tidak berharga atau bersalah yang
            berlebihan</label>
        </td>
        <td>
          <select name="a7" id="a7">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a8">Pertanyaan 8: Pikiran atau rencana bunuh diri</label>
        </td>
        <td>
          <select name="a8" id="a8">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a9">Pertanyaan 9: Perilaku obsesif terhadap makanan atau berat
            badan</label>
        </td>
        <td>
          <select name="a9" id="a9">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a10">Pertanyaan 10: Perilaku impulsif yang berbahaya</label>
        </td>
        <td>
          <select name="a10" id="a10">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a11">Pertanyaan 11: Perubahan suasana hati yang ekstrim</label>
        </td>
        <td>
          <select name="a11" id="a11">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a12">Pertanyaan 12: Halusinasi atau delusi</label>
        </td>
        <td>
          <select name="a12" id="a12">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label for="a13">Pertanyaan 13: Perasaan terisolasi atau kesulitan berinteraksi
            dengan orang lain</label>
        </td>
        <td>
          <select name="a13" id="a13">
            <option value="Ya">Ya</option>
            <option value="Tidak" selected>Tidak</option>
          </select>
        </td>
      </tr>
    </table>
    <button type="submit">Submit Diagnosa</button>
  </form>
</body>

</html>