<?php
// Veritabanı bilgileri
$servername = "localhost";
$username = "root"; // Veritabanı kullanıcı adınız
$password = ""; // Veritabanı şifreniz
$dbname = "bote2024";
$port = 3306; // Varsayılan MySQL portu
$socket = "/var/run/mysqld/mysqld.sock"; // Linux için MySQL soket dosyası

// Bağlantıyı kur ve hata kontrolü yap

    $conn = new mysqli($servername, $username, $password		);
    if ($conn->connect_error) {
        echo("Veritabanına bağlanılamadı: ");
	}
	
echo "merhaba";	
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sqlCreateDB) === TRUE) {
    echo "Veritabanı '$dbname' başarıyla oluşturuldu!<br>";
} else {
    die("Veritabanı oluşturulurken hata: " . $conn->error);

}
