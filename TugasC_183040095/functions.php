<?php 

$conn = mysqli_connect("localhost", "root", "", "uas_183040095");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$nilai1 = htmlspecialchars($data["nilai1"]);
    $nilai2 = htmlspecialchars($data["nilai2"]);
    $nilai3 = htmlspecialchars($data["nilai3"]);
    $rata = htmlspecialchars($data["rata"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $hasil  = $nilai1+$nilai2+$nilai3;
    $rata = ($hasil / 3);

    if($rata>=59){
        $keterangan = ("Lulus");
    }else {
        $keterangan = ("Tidak Lulus");
    }
	$query = "INSERT INTO nilai
				VALUES
			  ('$nis', '$nama', '$nilai1', '$nilai2', '$nilai3', '$rata', '$keterangan')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

?>