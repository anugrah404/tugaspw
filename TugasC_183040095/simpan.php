<?php 

require 'functions.php';
$nilai = query ("SELECT * FROM nilai");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hasil Input</title>
  <style>
    .container {
      max-width: 550px;
      padding: 20px;
      background-color: grey;
      border: 1px solid black;
      margin: auto;
      text-align: center;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    button a {
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
  <h1>DATA NILAI MAHASISWA</h1>
    <table border="1" cellspacing="0" cellpadding="10">
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Nilai 1</th>
        <th>Nilai 2</th>
        <th>Nilai 3</th>
        <th>Rata Rata</th>
        <th>Keterangan</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach($nilai as $lai) : ?>

      <tr>
        <td><?= $lai['nis']; ?></td>
        <td><?= $lai['nama']; ?></td>
        <td><?= $lai['nilai1']; ?></td>
        <td><?= $lai['nilai2']; ?></td>
        <td><?= $lai['nilai3']; ?></td>
        <td><?= $lai['rata']; ?></td>
        <td><?= $lai['keterangan']; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <button>
      <a href="input.php">Kembali</a>
    </button>
  </div>
</body>
</html>