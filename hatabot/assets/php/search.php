
<?php
require_once "connection.php";

$kelime = htmlspecialchars($_POST['kelime']);
$secenek = htmlspecialchars($_POST['secenek']);

if (!empty($kelime) && $secenek==1){
	$sorgu = "SELECT * FROM hata WHERE hata_baslik LIKE :kitap";
	$sonuc = $connection->prepare($sorgu);
	$sonuc -> bindValue(":kitap",'%'.$kelime.'%');
	$sonuc -> execute();
}else if (!empty($kelime) && $secenek==2){
	$sorgu = "SELECT * FROM hata WHERE hata_cikti LIKE :kitap";
	$sonuc = $connection->prepare($sorgu);
	$sonuc -> bindValue(":kitap",'%'.$kelime.'%');
	$sonuc -> execute();
}

if ($sonuc->rowCount()!=0){
	echo ' <div class="alert alert-primary" style=" background-color: #f35b3f;"role="alert"><b style="color:white;">'.$sonuc->rowCount().' Sonuç bulundu : </b></div>';
	foreach ($sonuc as $key) {		
		echo '<div class="card mb-3">
          <div class="card-header  font-weight-bold">';
        echo $key['hata_baslik'];
        echo  '</div>
        <div class="card-body">

		<p class="card-text"><b>Hata Çıktısı : </b>';
		echo $key['hata_cikti'];
		echo '</p>

		<p class="card-text"><b>Hata Açıklaması : </b>';
		echo $key['hata_aciklama'];
		echo '</p>

			<p class="card-text"><b>Eklenme Tarihi : </b>';
		echo $key['hata_tarih'];
        echo '</p>
		
            <p class="card-text"><b>Kategori : </b>';
        echo $key['hata_turu'];
        echo '</p>

          </div>
        </div>';
	}
}else{
	echo ' <div class="alert alert-warning" role="alert">Sonuç yok...</div>';
}

?>