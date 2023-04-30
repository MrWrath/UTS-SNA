<?php
$servername = "172.18.0.2";
$username = "root";
$password = "root";
$dbname = "Redlock";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) as total_user FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "Jumlah user: " . $row["total_user"];
} else {
    echo "Tidak ada user";
}

mysqli_close($conn);
?>
