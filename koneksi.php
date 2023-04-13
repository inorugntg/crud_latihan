<?php 
$koneksi = mysqli_connect("localhost","root","","user_level");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
class crud{
	public static function conect()
	{
		try{
            $con=new PDO('mysql:localhost=host; dbname=user_level','root','');
        return $con;
        }catch(PDOException $error1){
            echo 'Something went wrong, it was not possible to connect you to database!'.$error1->getMessage();
        }catch(Exception $error2){
          echo 'Generic error!'.$error2->getMessage();
        }
	} 
	public static function selectData(){
		$data=array();
		$p=crud::conect()->prepare('SELECT * FROM user');
		$data=$p->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
}
?>