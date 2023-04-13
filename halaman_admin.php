<?php 
    $siswa = [
        [
            "id" => "1",
            "foto" => "https://th.bing.com/th/id/OIP.dWPn2C5RGGSsER_exf5YwgHaFj?pid=ImgDet&rs=1",
            "nama" => "Inoru Akhmad",
            "alamat" => "Simo magerejo 14/2",
            "no" => "08768390201"
        ],
        [
            "id" => "2",
            "foto" => "https://th.bing.com/th/id/OIP.dWPn2C5RGGSsER_exf5YwgHaFj?pid=ImgDet&rs=1",
            "nama" => "Athillah Firmansyah",
            "alamat" => "Manukan Kulon",
            "no" => "086748107560"
        ],
        [
            "id" => "3",
            "foto" => "https://th.bing.com/th/id/OIP.dWPn2C5RGGSsER_exf5YwgHaFj?pid=ImgDet&rs=1",
            "nama" => "Alifia Cahyani",
            "alamat" => "Arica indonesia",
            "no" => "086574810944"
        ],
        [
            "id" => "4",
            "foto" => "https://th.bing.com/th/id/OIP.dWPn2C5RGGSsER_exf5YwgHaFj?pid=ImgDet&rs=1",
            "nama" => "Yosua Abriel",
            "alamat" => "Simo gunung barat tol",
            "no" => "084431778909"
        ],
    ];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - www.malasngoding.com</title>
    <style>
        a, input{
            margin-top: 30px;
            margin-left: 10px;
        }

    </style>
</head>
<body>
	<?php 
    require('./koneksi.php');
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>


    
</body>
</html>