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
    <link rel="stylesheet" href="blogs.css">
    <title>Blog | Gamze Çakan</title>
</head>

<body>

    <section id="menu">
        <div id="logo">Gamze <i class="fas fa-heart icon"></i></div>

        <nav>
            <a href="index.php"><i class="fas fa-home icon"></i>Anasayfa</a>
            <!--icon diye class ta belirtiyorum ki biçimlendirme kolay olsun-->
            <a href="index.php#about"><i class="fas fa-info icon"></i>Hakkımda</a>
            <a href="index.php#blog"><i class="fas fa-dice icon"></i>Portfolyo</a>
            <a href="blogs.php"><i class="fas fa-user icon"></i>Blog</a>
            <a href="index.php#contact"><i class="fas fa-link icon"></i>İletişim</a>
        </nav>
    </section>

    <section id="portfolio">
        <div class="container">
            <h3>Blog</h3>
            <i class="fas fa-code icon"></i>
            <br><br>
            <!--buradaki özellikleri de owl carousel sitesinden aldık-->
            <div class="owl-carousel owl-theme">
                <div class="cards item" data-merge=1.7> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                    <a href="#book"><img src="images/hobbies/kitap.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Kitap Okuma</h5></a>
                </div>

                <div class="cards item" data-merge=1.7>
                    <a href="#music"><img src="images/hobbies/müzik.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Müzik Dinleme</h5></a>
                </div>

                <div class="cards item" data-merge=1.7>
                    <a href="#film"><img src="images/hobbies/film.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Film İzleme</h5></a>
                </div>

                <div class="cards item" data-merge=1.7>
                    <a href="#dancing"><img src="images/hobbies/dans.jpg" alt="" class="img-fluid">
                    <h5 class="cardtitle">Dans </h5></a>
                </div>


            </div>

        </div>
    </section>

    <section id="music">
        <div class="title">
            <h1>Müzik</h1>
            <i class="fas fa-music icon"></i><br><br>
            <img src="images/hobbies/müzik.jpg" alt="" width="450px" height="400px"><br>
            <span><a href="#portfolio">Blog</a></span>
            <span> / Müzik</span> <br><br>
            <p>Her birini ayrı sevdiğim, dinlerken büyük keyif aldığım bu müziklerden umarım siz de kendinize göre parçalar bulursunuz. O zaman keyifli dinlemeler!</p>
        </div>
        
        <div class="parts">
            <div class="part">
                <h2>Mary Jane | Bülbülüm Altın Kafeste</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QBwdzOE9KB8?si=9c9vl_JjmNZDhikE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <p>Aşırı dinlendirici bir sese sahip, şarkı - ses uyumu çokseelll...</p>

            </div>
            
            <div class="part">
                <h2>Can Bonomo | Kara Konular</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VrttVAX3HSM?si=9fqUUxl98ssvAz_S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <p>Konser sonrası öğrendiğim bağıra çağıra söylemelik şarkı...</p>
            </div>
    
            <div class="part">
                <h2>Ryan Mack | Only Human</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/i7A_iWQbz6w?si=Gc7XEIUFZxuvYEsH&amp;start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <p>Sadece insan olduğunu hatırla, boşver...</p>
            </div>
    
            <div class="part">
                <h2>Konuya Fransız | Hallice Halim</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/z4xDiY99MBw?si=watVemx2x7wA2-gp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <p>Aç bunu , koy kafanı yat ... </p>
            </div>
        </div>

    </section>

    <section id="book" style="background-color:#f6f6f6 ;">
        <div class="title">
            <br><h1>Kitap</h1>
            <i class="fas fa-book icon"></i><br><br>
            <img src="images/hobbies/kitap.jpg" alt="" width="450px" height="400px"><br>
            <span><a href="#portfolio">Blog</a></span>
            <span> / Kitap</span> <br><br>
            <p>Her birini ayrı sevdiğim, okurken büyük keyif aldığım, bazen ağladığım, bazen güldüğüm, ayıklamakta çok zorlandığım kitaplar... Sizlere de fikir olması dileğiyle!!!</p>
        </div>
    

        <div class="owl-carousel owl-theme">
            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">Sabahattin Ali |<br> Kürk Mantolu Madonna</h5>
                <img src="images/book/1.jpg" alt="" class="img-fluid"><br>
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">Johann Wolfgang Von Goethe |<br> Genç Werther'in Acıları</h5>
                <img src="images/book/2.jpg" alt="" class="img-fluid"><br>
            </div>


            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">Antoine de Saint-Exupéry |<br> Küçük Prens </h5>
                <img src="images/book/3.jpg" alt="" class="img-fluid"><br>
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">Jack London |<br> Yıldız Gezgini</h5>
                <img src="images/book/4.png" alt="" class="img-fluid"><br>
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">Franz Kafka |<br> Dönüşüm</h5>
                <img src="images/book/5.png" alt="" class="img-fluid"><br>
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">Stefan Zweig |<br> Satranç</h5>
                <img src="images/book/6.png" alt="" class="img-fluid"><br>
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">John Steinbeck |<br> Fareler ve İnsanlar</h5>
                <img src="images/book/7.jpg" alt="" class="img-fluid"><br>
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">Albert Camus |<br> Yabancı</h5>
                <img src="images/book/8.jpg" alt="" class="img-fluid">
            </div>
         
    
        </div><br>
    </section>

    <section id="film">
        <div class="title">
            <h1>Film</h1>
            <i class="fas fa-film icon"></i><br><br>
            <img src="images/hobbies/film.jpg" alt="" width="450px" height="400px"><br>
            <span><a href="#portfolio">Blog</a></span>
            <span> / Film</span> <br><br>
            <p>Her birini ayrı sevdiğim, izlerken büyük keyif aldığım, bazen ağladığım, bazen güldüğüm, ayıklamakta çok zorlandığım filmler... Keyifli seyirler!!!</p>
        </div>


        <div class="owl-carousel owl-theme">
            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">SUITS</h5>
                <img src="images/film/1.jpg" alt="">
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">FRIENDS</h5>
                <img src="images/film/2.jpg" alt="">
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">NOW YOU SEE ME</h5>
                <img src="images/film/3.jpg" alt="">
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">DIVERGENT</h5>
                <img src="images/film/4.jpg" alt="">
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">IN TIME</h5>
                <img src="images/film/5.jpg" alt="">
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">THE FAUT IN OUR STARS</h5>
                <img src="images/film/6.jpg" alt="">
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">LA LA LAND</h5>
                <img src="images/film/7.jpg" alt="">
            </div>

            <div class="blog-cards item" data-merge=1.3> <!--data-merge=1.5 ögenin daha fazla yer kaplaması için-->
                <h5 class="cardtitle">ME BEFORE YOU</h5>
                <img src="images/film/8.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="dancing" style="background-color:#f6f6f6 ;">
        <div class="title">
            <br><h1>Dans</h1>
            <i class="fas fa-star icon"></i><br><br>
            <img src="images/hobbies/dans.jpg" alt="" width="450px" height="400px"><br>
            <span><a href="#portfolio">Blog</a></span>
            <span> / Dans</span> <br><br>
            <p>Her birini ayrı sevdiğim, izlerken büyük keyif aldığım, harcadığınız zamana değeceğini düşündüğüm danslar... Keyifli Seyirler!!!</p>
        </div>
    
        <div class="parts">
            <a href="vals.php">
            <div class="dance">
                <h2>VALS</h2>
                <img src="images/dance/vals.jpg" alt="">
                <p>Vals,<strong>3/4 zamanlı bir Avusturya</strong> dansıdır. En belirgin özelliği, çiftlerin birbirine sıkıca tutunup bir nokta çevresinde dönerek dans etmeleridir.</p>
            </div>
            </a>
            
            <div class="dance">
                <h2>TANGO</h2>
                <img src="images/dance/tango.jpg" alt="">
                <p>Özünde <strong>derin bir melankoli barındıran, dramatik duygular aşılayan ve keskin hareketleri olan</strong> tango, 19.yy'ın sonlarına doğru Buenos Aires ve Montevideo'da ortaya çıkmıştır.</p>
            </div>
    
            <div class="dance">
                <h2>RUMBA</h2>
                <img src="images/dance/rumba.jpg" alt="">
                <p><strong>Yavaş ve zor bir dans türüdür.</strong> Bu dansta kalça hareketleri belirgindir. Uluslararası Latin Amerikan dans yarışmalarında sergilenir. </p>
            </div>
    
            <div class="dance">
                <h2>SALSA</h2>
                <img src="images/dance/salsa.jpg" alt="">
                <p>Salsa dansı partnerli yapılan, kökeni Kuba'ya dayanan bir Latin dansıdır. Bu dans, Latin müzikleri ile yapılan, <strong>hareketli ve coşkulu bir dans türüdür</strong>. </p>
            </div>
    
            <div class="dance">
                <h2>SWING</h2>
                <img src="images/dance/swing.jpg" alt="">
                <p> Amerika'da caz çağının yaşandığı 1920'lerde ortaya çıkan, <strong>temellerinde salınım hareketini barındıran</strong> Swing, dansçının akışkan ve ritmik hareketleriyle ortaya çıkar.</p>
            </div>
    
            <div class="dance">
                <h2>TWIST</h2>
                <img src="images/dance/twist.jpg" alt="">
                <p>60'lar öncesi popüler olan, çiftlerin birbirine dokunmasıyla ünlü<strong>"touch"</strong> adlı dans şekli dans mı yoksa jimnastik mi tartışması yaratan <strong>"twist"</strong> adına bırakmıştır.</p>
            </div>
        </div>
        <br><br><br><br><br>
        <hr>
        <footer>
            <div class="social_footer">
                <ul>
                    <li><i class="fab fa-instagram account"></i></li>
                    <li><i class="fab fa-linkedin account"></i></li>
                    <li><i class="fab fa-github account"></i></li>
                    <li><i class="fab fa-google-plus-g account"></i></li>
                    <li><i class="fab fa-whatsapp account"></i></li>
                </ul>
            </div><br>
            <div class="copy"> &copy;2024 | Gamze Çakan </div>
            <a href="#menu"><i class="fas fa-caret-up" id="click"></i></a>

        </footer>
        <hr>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<!--bunu jquery cdn den aldım direkt-->
<script src="owl/owl.carousel.min.js"></script>
<script src="owl/script.js"></script>
</body>
</html>