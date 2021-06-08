<?php

//deklarasi alamat server
$user = "localhost";

//deklarasi username
$user = "root";

//deklarasi nama database
$namadb = "umyti";

//deklarasi password
$password = "";

//membuat koneksi kedalam database
$conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi gagal");

//membuat yang berisi query untuk menampilkan data
$result = mysqli_query($conn, "select * from teman");

//membaca isi data dari database
while ($row = mysqli_fetch_assoc($result)) {
	$json[] = $row;
}

echo json_encode($json);
mysql_close($conn);

?>