<!DOCTYPE html>
<html>
<head>
    <title>Blog | Panel</title>
    <link rel="icon" href="images/blog.png">
    <!--https://www.w3schools.com/css/tryit.asp?filename=trycss_table_fancy-->
<style>
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td, #customers th {
    border: 1px solid #5e548e;
    padding: 8px;
  }

  #customers tr:nth-child(even){background-color: lightyellow;}

  #customers tr:hover {background-color: rgb(254, 254, 199);}

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #243176;
    color: #e0b1cb;
  }
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon Numarası</th>
    <th>E-Mail Adresi</th>
    <th>Konu Başlığı</th>
    <th>Mesaj</th>
  </tr>



<?php

session_start();

if($_SESSION["user"]=="") //veri olmadığını varsayalım yani kullanıcı izinsiz girdi varsay 
{
  echo "<script>window.location.href='out.php'</script>"; //otomatik çkış yapılacak js kodu sayesinde

}

else //düzgün girşi yaptıysa 
{

  echo"Kullanıcı Adınız: ".$_SESSION['user']."<br>";
  echo"<a href='out.php' style='text-decoration: none;'> CIKIS YAP </a> <br><br><br>";  

  include("connection.php"); //bağlandı

  $sec="Select * From contact"; //contact tablosundan seç tümünü

  $sonuc=$baglan->query($sec);

  if($sonuc->num_rows>0) //veritabanında verimiz varsa bu işleme geçicek
  {
    while($cek=$sonuc->fetch_assoc())//fetch_assoc fonk sayesinde tablodaki verileri alıyoruz cek dizisine atıyoruz
    {
      echo "
            <tr>
              <td>".$cek['adsoyad']."</td>
              <td>".$cek['telefon']."</td>
              <td>".$cek['email']."</td>
              <td>".$cek['konu']."</td>
              <td>".$cek['mesaj']."</td>
            </tr>
    
          ";
    }
  }

  else{ //eger veritabannda veri yoksa
    echo "Veritabanında kayıtlı veri bulunamamıştır.";
  }

}


?>


 
</table>

</body>
</html>


