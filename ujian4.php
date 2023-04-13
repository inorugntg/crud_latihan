<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a, input {
            margin-top: 30px;
            margin-left: 10px;
        }

    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10" >
            
            <tr>
                <td rowspan="3"><img width="370px" src="<?=$_GET["foto"];?>" alt="putung.jpg"></td>
                <td>Nisn</td>
                <td><?= $_GET["nisn"] ?></td>
            </tr>
            <tr>
                <td>Nama siswa</td>
                <td><?= $_GET["nama"] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $_GET["jenis_kelamin"] ?></td>
            </tr>
            <tr>
                <td>Foto Siswa</td>
                <td><?= $_GET["foto_siswa"] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $_GET["alamat"] ?></td>
            </tr>
            <tr>
                <td>Aksi</td>
                <td><?= $_GET["aksi"] ?></td>
            </tr>
    </table>
    <a href="halaman_siswa.php"><input type="button" value="Kembali coy!"></a>
</body>
</html>