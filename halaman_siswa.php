<?php 
if(!$_POST)

$siswa = [
    [
        "id" => "1",
        "foto" => "img1.jpg",
        "nama" => "Inoru Akhmad",
        "alamat" => "Simo magerejo 14/2",
        "no" => "08768390201"
    ],
    [
        "id" => "2",
        "foto" => "img2.jpg",
        "nama" => "Athillah Firmansyah",
        "alamat" => "Manukan Kulon",
        "no" => "086748107560"
    ],
    [
        "id" => "3",
        "nama" => "Alifia Cahyani",
        "alamat" => "Arica indonesia",
        "no" => "086574810944"
    ],
    [
        "id" => "4",
        "nama" => "Yosua Abriel",
        "jenis kelamin" => "laki-laki",
        "alamat" => "Simo gunung barat tol",
        "no" => "084431778909"
    ],
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Siswa </title>
    <style>
        a, input{
                margin-top: 30px;
                margin-left: 10px;
            }
    </style>
    <link rel="stylesheet" href="table.css">
</head>
<body>
	<?php 
	session_start();
    require('koneksi.php');
    include 'conection.php';

$query = "SELECT * FROM tb_siswa;";
$sql = mysqli_query($conn, $query);
$no = 0;
    $p=crud::Selectdata();
    if(count($p)>0){
        for($i=0;$i< count($p); $i++){
           echo '<tr>';
           foreach($p[$i] as $key => $value){
            if($key!='id'){
                echo '<tr>' .$value. '</td>';
            }
        }
        echo '</tr>';
        }
    }
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Siswa</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>
    <h1>Data Siswa(admin coy)</h1>
    <table border="1" width="40%" cellspacing="0" cellpadding="10" >
        <tr>
        <thead>
          <tr>
            <th>
              <center>No.</center>
            </th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Foto Siswa</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <?php foreach ($siswa as $data) : ?>
        <tr align="center">
            <td><?= $data['id']?></td>
            <td><img width="140px" src="<?= $data["foto"];?>" alt="Foto Siswa"></td>
            <td><?= $data['nama']?></td>
            <td><a href="ujian4.php?nama=<?= $data["nama"]; ?>&alamat=<?= $data["alamat"]; ?>&no=<?= $data["no"]; ?>&foto=<?= $data["foto"]; ?>"><input type="button" value="Detail"></a></td>
            <td></td>
        </tr>
        <?php endforeach; ?>

    </table>
    <a href="ujian4.php"><input type="button" value="Logout"></a>
	
</body>
</html>