<?php
$servername = "172.18.0.2";
$username = "root";
$password = "root"; 
$dbname = "Redlock";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, password) VALUES ('John', 'Doe')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "<br>";
        echo "Nama: " . $row["Nama"] . "<br>";
        echo "Alamat: " . $row["Alamat"] . "<br>";
        echo "Jabaran: " . $row["Jabatan"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
