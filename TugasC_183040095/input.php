<?php 

require 'functions.php';

if( isset($_POST["submit"]) ) {
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'simpan.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'simpan.php';
			</script>
		";
	}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input</title>
  <style>
    .container {
      width: 400px;
      background-color: grey;
      border: 1px solid black;
      margin: auto;
      text-align: center;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      }
  </style>
</head>
<body>
  <div class="container">
    <h1>FORM DATA MAHASISWA</h1>
    <form action="" method="post">
      <table cellspacing="5" cellpadding="10">
        <tr>
          <td>
            <label for="nis">NIS : </label>
            <input type="text" name="nis" id="nis" maxlength="9">
          </td>
        </tr>
        <tr>
          <td>
            <label for="nis">Nama : </label>
            <input type="text" name="nama" id="nama">
          </td>
        </tr>
        <tr>
          <td>
            <label for="nis">Nilai 1 : </label>
            <input type="text" name="nilai1" id="nilai1">
          </td>
        </tr>
        <tr>
          <td>
            <label for="nis">Nilai 2 : </label>
            <input type="text" name="nilai2" id="nilai2">
          </td>
        </tr>
        <tr>
          <td>
            <label for="nis">Nilai 3 : </label>
            <input type="text" name="nilai4" id="nilai4">
          </td>
        </tr>
        <tr>
          <td>
            <button type="submit" name="submit">Simpan</button>
          </td>
          <td>
            <button type="submit" name="submit">Batal</button>
          </td>
        </tr>
      </table>
    </form>
  </div>  
</body>
</html>