

<?php
require_once "connection.php";




if (isset($_POST['hata_ekle'])){
$hata_ekle=$connection->prepare("INSERT into hata SET
   hata_baslik=:hata_baslik,  
    hata_cikti=:hata_baslik,
    hata_aciklama=:hata_aciklama,
	hata_turu=:hata_turu
");
$update=$hata_ekle->execute(array(
'hata_baslik'=>$_POST['hata_baslik'],
'hata_cikti'=>$_POST['hata_cikti'],
'hata_aciklama'=>$_POST['hata_aciklama'],
'hata_turu'=>$_POST['hata_turu']

));
if($update){
Header("Location:../../index.php?islem=basarili");
}
else{
Header("Location:../../index.php?islem=basarisiz");
}}

?>