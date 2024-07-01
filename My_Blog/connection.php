<?php //php nin açılma kapanma durumu bu

$vt_sunucu="localhost:3307";//localhost la çalışıyorum çünkü
$vt_kullanici="root";//herhanig tanımlama yapmadık standart halde
$vt_sifre="";
$vt_adi="my_blog";//veritabanımın adı


$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, 
$vt_adi); //mysqli_connect() fonksiyonu sayesinde veritabanına bağlanmaya çalışır; başarılı -> true


if(!$baglan){ //bağlanamama durumunda 
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error()); //hata mesajını versin 
}


// else{ 
//     echo("Bağlantı Başarılı"); bağlantının başarılı olduğunu gördüm kapatıyorum
// }

?>