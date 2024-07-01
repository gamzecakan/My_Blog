<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> bu da olur icon için -->
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <!--owl carousel indirdik blog kartları arasında kaydırma olsun diye bunu slider da yapabilrdim şimdilik boyle olsun-->
    <link rel="icon" href="images/blog.png">
    <link rel="stylesheet" href="style.css">
    <title>Gamze Çakan | Kişisel Blog</title>
</head>

<body>

    <section id="menu">
        <div id="logo">Gamze <i class="fas fa-heart icon"></i></div>

        <nav>
            <a href="index.html"><i class="fas fa-home icon"></i>Anasayfa</a>
            <!--icon diye class ta belirtiyorum ki biçimlendirme kolay olsun-->
            <a href="#about"><i class="fas fa-info icon"></i>Hakkımda</a>
            <a href="#blog"><i class="fas fa-dice icon"></i>Portfolyo</a>
            <a href="blogs.php"><i class="fas fa-user icon"></i>Blog</a>
            <a href="#contact"><i class="fas fa-link icon"></i>İletişim</a>
        </nav>
    </section>

    <section id="homepage">
        <div id="picture"></div>
        <div id="content">
            <h2>My Blog</h2>
            <i class="fas fa-code icon"></i>
            <p>Herkese merhaba! Bu kişisel blog sayfası sizlere bir fikir bana da bu yaşlarımdaki bakış açımı anımsatacak fikirlerle dolu olucak. Ben kendi zevklerime öncelik vererek 
                bunu yapıyorum: sevdiğim filmler, kitaplar, şarkılar, danslar... Beğenip beğenmemek sana kalmış, fikrini belirtmeyi unutmaa!!! </p>
        </div>
    </section>

    <section id="about">
        <h3>Hakkımda</h3>
        <i class="fas fa-code icon"></i>
        <div class="container">
            <div id="left">
                <h5 id="h5left">
                    Gamze ÇAKAN <br><br> <i>~Yazılım Mühendisliği Öğrencisi</i><!--altGr+ü-->
                </h5>
            </div>
            <div id="right">
                <p id="pfirst">Ben Gamze Çakan. Ağrı'nın Doğubeyazıt ilçesinde doğdum ve Balıkesir merkezde büyüdüm.
                    23 Eylül 2002 doğumluyum. Haliyle de şuan yirmi bir yaşındayım.<br> Doğuş Üniversitesi yazılım mühendisliği bölümü 3.
                    sınıf
                    öğrencisiyim.
                    Kısacası şuan okul, ders, ödev, proje, cart curtla ilgileniyorum.<br>  </p>
            </div>

            <img src="images/coding.jpg" alt="" width="1200" height="auto" class="img-about mt100">
            <!-- <div id="about_pic"></div> -->

            <p id="pend"> Biraz daha kendimden bahsetmem gerekirse; <br>
                Okumayı, müzik dinlemeyi, sanatı, çizimi, dans etmeyi çok severim. Genelde vaktimi beni mutlu eden
                şeylere
                harcarım.
                Ayrıca voleybolu eskisi kadar oynamasam da hala ilgilendiğim ve sevdiğim bi' spor türü. Satranç oynamayı
                da
                çok severim.
                Çok olmasa da ara sıra vaktimi dizi ve film izlemeye ayırırım.
                Bu yazı adı üstünde hakkımda birkaç bilgiyi barındıran bir yazı olmalıydı.
                Ancak ne kadar kendimi anlatmaya çalışırsam bi’ o kadar da yetersiz kalacağım.
                Çünkü kendi hakkımda dahi yeterli bilgiye sahip sayılmam. Benliğimde keşfedeceğim birçok özellik ve
                yetenek
                var.
                Şimdilik anlatacaklarım bu kadar. <br> Hoşça kalınnn!!!</p>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <h3>Blog</h3>
            <i class="fas fa-code icon"></i>
            <br><br>
            <!--buradaki özellikleri de owl carousel sitesinden aldık-->
            <div class="owl-carousel owl-theme">
                <div class="cards item" data-merge=1.7> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                    <img src="images/hobbies/kitap.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Kitap Okuma</h5>
                </div>
            
                <div class="cards item" data-merge=1.7>
                    <img src="images/hobbies/müzik.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Müzik Dinleme</h5>
                </div>

                <div class="cards item" data-merge=1.7>
                    <img src="images/hobbies/film.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Film İzleme</h5>
                </div>

                <div class="cards item" data-merge=1.7>
                    <img src="images/hobbies/dans.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Dans </h5>
                </div>


            </div>

        </div>
    </section>

    <br><br><br>
    <section id="blog">
        <h3 class="g_user">Portfolyo</h3>

        <div class="profile-container">
            <div class="profile-info">
                <img src="images/Gamze.jpg" alt="" class="img-fluid oval"
                    style="box-shadow: 0 0 10px 7px rgba(34, 216, 232, 0.5);">
                <h4>Gamze ÇAKAN</h4>
                <p><i>Doğuş Üniversitesi "Yazılım Mühendisliği" 3.sınıf öğrencisi , Yeeyyy <i class="fas fa-hand-holding-heart"></i></i></p>
            </div>
            <div class="me_icon">
                <ul class="social-icons">
                    <li><span>Instagram:</span> <i class="fab fa-instagram account"></i></li>
                    <li><span>Linkedin:</span> <i class="fab fa-linkedin account"></i></li>
                    <li><span>GitHub:</span> <i class="fab fa-github account"></i></li>
                    <li><span>Mail:</span> <i class="fab fa-google-plus-g account"></i></li>
                    <li><span>WhatsApp:</span> <i class="fab fa-whatsapp account"></i></li><br><br>
                    <li><span><a href="portfolio.html"><i class="fas fa-hand-point-right"></i>Portfolyomu görmek için tıkla!</a></span></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h3>İletişim</h3>
            <i class="fas fa-code icon"></i>
            <br><br>
            <form action="index.php" method="post">
            <div id="contact_design">
                <div id="form">
                    <div id="form_left">
                        <input type="text" name="isim" placeholder="Ad-Soyad" required class="form-style">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-style">
                    </div>
                    <div id="form_right">
                        <input type="email" name="email" placeholder="E-mail Adresi" required class="form-style">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-style">
                    </div>

                    <textarea name="mesaj" id="" cols="30" placeholder="Eklemek istediğiniz mesajı giriniz..." rows="10"
                        required class="form-style"></textarea>
                    <br><br>
                    <input type="submit" value="Gönder">
                </div>
                <div id="adress">
                    <h4 id="adress_title">Adres Bilgileri: </h4>
                    <p class="padress">Dudullu OSB Mah.</p>
                    <p class="padress">Nato Yolu Cad.</p>
                    <p class="padress">Doğuş Üniversitesi</p>
                    <p class="padress">Ümraniye / İstanbul</p>
                    <p class="padress">Tel: 444 79 97</p>
                    <p class="padress">E-Mail: 202103011023@dogus.edu.tr</p>
                </div>
            </div>
            </form>
        </div>
        <br><br><br><br><br>
        <footer>
            <div id="footer">&copy; 2024 | Gamze ÇAKAN
                <p>Tüm Hakları Saklıdır</p>
            </div>

            <br><br>

            <div class="social_footer">
                <ul>
                    <li><i class="fab fa-instagram account"></i></li>
                    <li><i class="fab fa-linkedin account"></i></li>
                    <li><i class="fab fa-github account"></i></li>
                    <li><i class="fab fa-google-plus-g account"></i></li>
                    <li><i class="fab fa-whatsapp account"></i></li>
                </ul>
            </div>


            <a href="#menu"><i class="fas fa-caret-up" id="up"></i></a>
        </footer>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!--bunu jquery cdn den aldım direkt-->
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>

</html>


<?php
    include("connection.php");

    //isset() fonksiyonu bir değişkenin var olupp olmadığını kontrol eder, null? tüm alanların verileri tamsa kod çalışmaya devam eder.

    if(isset($_POST["isim"], $_POST["tel"], $_POST["email"], $_POST["konu"], $_POST["mesaj"])) //isset ile name kısımlarında veri var mı diye kontrol ettim
    {
        //form alanındaki verileri değişkene atayalım

        $adsoyad=$_POST["isim"];
        $telefon=$_POST["tel"];
        $email=$_POST["email"];
        $konu=$_POST["konu"];
        $mesaj=$_POST["mesaj"]; 
        
        //veriler contact tablosuna eklensin

        $ekle="INSERT INTO contact (adsoyad, telefon, email, konu, mesaj) VALUES 
        ('".$adsoyad."', '".$telefon."', '".$email."', '".$konu."', '".$mesaj."')";

        
        //query() Sql sorgusnu çalıştırır ve boolean değeri döndürür, sorgu başarılıysa true...
        if($baglan->query($ekle)===TRUE)
        {
            echo "<script>alert('Mesajınız başarılı bir şekilde iletilmiştir.')</script>";
        }

        else{
            echo "<script>alert('Mesajınız gönderilirken bir hata oluştu.')</script>";
        }
    }

    
    
    //php kalsöründen php.ini text ini açtık
    //burada port,sendmail_from, sendmail_path değiştirildi
    //sendmail.ini ye geldik
    //server ini , port, username, password unu değiştiricez 
    //smtp2 şifresi için google hesabımı yönetemedim. dolayısıyla auto_password ü değişemedim

    // if($_SERVER["REQUEST_METHOD"]=="POST"){
    //     $adsoyad=$_POST["isim"];
    //     $email=$_POST["email"];
    //     $konu=$_POST["konu"];
    //     $mesaj=$_POST["mesaj"]; 

    //     $to="gmzcknfrt4@gmail.com";
    //     $headers="Form $email";
    //     if(mail($to,$konu,$mesaj,$headers)){
    //         echo "E-mail gönderildi.";
    //     }
    //     else{
    //         echo "E-mail gönderilemedi.";
    //     }

    // }

   


?>