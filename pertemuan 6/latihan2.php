<?php
/* 
    Iqbal Nuryana
203040149
https://github.com/iqbal2273/pw2021_203040149.git
    Pertemuan 6( 24 Februari 2021 )
    Materi Minggu ini mempelajari mengenai Associative Array
*/
?>

<?php
// $mahasiswa = [
//     ["Iqbal N", "203040149", "TIF", "japrut@gmail.com."],
//     ["Sumile", "203040152", "TI", "LRtI@gmail.com"],
//     ["Duki", "203040153", "TM", "SWtM@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Iqbal Nuryana", 
        "nrp" => "203040149",
        "email" => "japrut@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "index.jpg"
    ],
    [
        "nama" => "Japrutq", 
        "nrp" => "203042017",
        "email" => "jaay@gmail.com",
        "jurusan" => "Teknik Arc.",
        "gambar" => "index.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>  
    <li>Jurusan : <?= $mhs["email"]; ?></li>
    <li>Email : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>