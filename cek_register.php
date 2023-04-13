<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="register.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <?php
      require('koneksi.php');
      if(isset($_POST['register_button'])){
        $name = $_POST['name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $level=$_POST['level'];
        if(!empty($_POST['name'])&&!empty($_POST['username']) &&!empty($_POST['password'])&&!empty($_POST['level'])){
           if($password){
            $p=crud::conect()->prepare('INSERT INTO user_level(nama,username,password,level) VALUES(:n,:u,:p,:l)');
            $p->bindValue(':n',$name);
            $p->bindValue(':u',$username);
            $p->bindValue(':p',$password);
            $p->bindValue(':l',$level);
            $p->execute();
            echo 'Successfully';
           }else{
            echo 'password does not match!';
           }
        }
      }
    ?>
    <div class="form">
        <div class="title">
            register
        </div>
        <form action="" method="post">
            <input type="text" name="name" placeholder="masukan nama">
            <input type="text" name="username" placeholder="masukan username">
            <input type="text" name="password" placeholder="masukan password">
            <input type="text" name="level" placeholder="masukan level">
            <input type="submit" value="register" name="register_button">
        </form>
    </div>
</body>
</html>