# Proje İsmi: My_Blog

## Proje İle İlgili Bilgiler
##### *Not: Bu proje BIM472 dersi için geliştirilmiş kişisel bir blog sitesidir.*

Proje; 'Anasayfa', 'Hakkımda', 'Portfolyo', 'Blog', 'İletişim' partlarından oluşmaktadır. 

##### *Not: Proje partları tamamen kişisel zevklerim ve bilgilerimden oluşmaktadır.'Portfolyo' partı henüz tamamlanmamıştır, artan projeler doğrultusunda eklenim yapılacaktır.*

'Blog' partı kategorilere ayrılmıştır:

- Kitap Okuma
- Müzik Dinleme
- Film İzleme
- Dans

<br>

## Kullanılan Teknolojiler
- **İstemci:**
  - **HTML/CSS:** Sayfa temel yapısını oluşturmak için ve sayfa stilini belirleyerek görsel tasarımını yapmak için kullanıldı.
  - **JavaScript:** Dinamik içerikler oluşturmak için kullanıldı.
  - **jQuery:** AJAX istekleri ve JS kütüphaneleri kullanarak hızlı ve kolay DOM manipülasyonları için kullanıldı.
  - **AJAX:** Sayfayı yenilemeden sunucudan veri almak veya sunucuya veri göndermek için kullanıldı.
- **Sunucu:**
  - **PHP:** Veritabanı işlemleri, form işleme vb. işlemleri yapmak için kullanıldı.
  - **XAMPP:** Apache web sunucusu, MySQL veritabanı ve PHP dilini içeren yerel geliştirme ortamı olarak kullanıldı.

<br>

## Özellikler

- İletişim formu üzerinden sadece sayfa admininin görüntüleyebileceği bir mesaj iletilebilir.
- 'Blog' alt kategorilerinden olan 'Dans' kategorisinin alt konu başlığı olan 'Vals' dansını yıldızlayarak oy verme ve yorum yapma yetisine sahipsiniz.
- Siz ve sizden başkalarının verdiği oyları, yaptığı yorumları ve ortalama oy değerini görüp inceleyebilme yetisine sahipsiniz.

<br>

## Hedef Kitle

#### Bireysel İçerik Tüketicileri:
- **Amaçları:** Kişisel gelişim, eğlence ve bilgi edinme.
- **Özelliklerden Faydalanacakları Alanlar:**
  - Blog içeriği üzerinden kitap önerileri, müzik ve film tavsiyeleri, dans hakkında bilgiler ve deneyimler.
- **İlgi Gösterecekleri Özellikler:**
  - Dans kategorisindeki alt başlıklar ve özellikle "Vals" dansı üzerine yapılan yorumlar ve oy verme.

#### Blog Yazarları ve İçerik Üreticileri:
- **Amaçları:** İçerik stratejilerini geliştirmek, ilham almak ve kendi bloglarına farklı içerik formatları eklemek.
- **Özelliklerden Faydalanacakları Alanlar:**
  - İletişim formu ve geri bildirim alabilme özelliği, kullanıcı yorumları ve oy ortalamalarını görüntüleme.
- **İlgi Gösterecekleri Özellikler:**
  - Bloglama süreçlerini yönetmek ve okuyucu geri bildirimlerini değerlendirmek için iletişim ve geri bildirim özellikleri.

<br>

## My_Blog Projesi Sayfa Görünümleri

- **Anasayfa:**
  
  ![Ekran görüntüsü 2024-07-02 005331](https://github.com/gamzecakan/My_Blog/assets/135230687/17497ca7-99d3-49cf-be50-a252b9a74378)

  ##### *Kullanıcı, navbar bölümündeki segmentlere tıkladığında ilgili bölümdeki içeriklerle karşılaşacaktır.*

<br>
<hr>

- **Hakkımda:**

  ![Ekran görüntüsü 2024-07-02 030143](https://github.com/gamzecakan/My_Blog/assets/135230687/a3e9fd1f-1210-4b07-9896-a07da61419e8)

  ##### *Kullanıcı, sayfa sahibi hakkındaki bilgilere buradan ulaşabilir.*

<br>
<hr>

- **Portfolyo:**
  
  ![image](https://github.com/gamzecakan/My_Blog/assets/135230687/d2c06e06-d66c-4474-ab00-9fff6cea9bb3)

  ##### *Portfolyo içeriği henüz tamamlanmamıştır. Blog sahibi proje geliştirdikçe düzenlemeler yapılacaktır.*

<br>
<hr>

- **Blog:**
  
  ![image](https://github.com/gamzecakan/My_Blog/assets/135230687/6b8c871c-6b73-43e6-9a80-cf736609b2d6)

  ##### *Kullanıcı, blog kısmında bulunan 4 kategoriden ilgisini çekeni incelemek için tıklayabilir.*

<br>
<hr>

- **İletişim:**
  
  ![image](https://github.com/gamzecakan/My_Blog/assets/135230687/4d6a6d56-7bb4-42c0-8068-319100883609)

  ##### *Kullanıcı, site hakkında veya başka bir konuda site adminiyle iletişim formu aracılığıyla mesaj gönderebilir. Gönderilen mesajı sadece doğru admin girişini yapabilen biri görebilir.*

<br>

- **Admin Giriş:**
  
  ![image](https://github.com/gamzecakan/My_Blog/assets/135230687/bfafc9f7-a20b-4b72-b969-d99daf12ab6c)

  - **Admin girişi başarılı olursa:**
    
    ![image](https://github.com/gamzecakan/My_Blog/assets/135230687/464cdb62-cd06-4e7d-9154-2b94e1686fb3)

    Veritabanına da kaydedilen iletişim formundaki mesajlar görüntülenir. Admin inceleme yaptıktan sonra sol üstte bulunan 'ÇIKIŞ YAP' yazısına tıklayarak paneli kapatabilir ve tekrar 'Giriş' sayfasına yönlendirilir.

  - **Admin girişi başarısız olduğunda:**
    
    Localhost tarafından '**Kullanıcı adı, e-mail veya şifre hatalıdır.**' mesajıyla karşılaşacak ve tekrar giriş sayfasına yönlendirilecektir.

##### *Not: Sayfa sonunda klasik bir 'Footer' yapısı ve 'up' sembolü bulunmaktadır. 'up' sembolü sayesinde sayfa en aşağıdayken kullanıcılar mouse yardımı olmadan tekrar navbar kısmına çıkabilirler.*

<br>
<hr>

## Navbar'da bulunan 'Blog' sekmesine tıklayınca:

![Ekran görüntüsü 2024-07-02 033526](https://github.com/gamzecakan/My_Blog/assets/135230687/3ec4a019-0513-4139-9292-31af2ce5ca1e)

- Kullanıcı, burada bulunan kategorilerden birine tıklayarak o kategorinin alt başlıklarını görme ve inceleme fırsatı elde eder.
- Daha sonra, edindiği bu görüşü yıldızla oy vererek ve yorum yaparak sayfa adminine ve diğer kullanıcılara belirtir.
- Kullanıcının yaptığı değerlendirmeler, kullanılan oy adedi ve diğer kullanıcıların verdiği ortalama oy herkes tarafından görülebilir.
- Navbar menüsünde bulunan diğer partlara da tıklayarak sitede bulunan diğer kısımlara (Hakkımda vb.) yönlendirilir.

## Oy Verme & Yorum Yapma İşlemleri
'Dans' kategorisinde bulunan 'Vals' alt başlığını inceleyelim:

![image](https://github.com/gamzecakan/My_Blog/assets/135230687/2383f624-ba69-448f-a803-a0802e7f2b67)

- Alt başlık olan 'Vals' dansı hakkında daha detaylı açıklamalar yapılarak bilgi verilmiştir.
- Kullanıcı, 'OYUNUZLA DEĞERLENDİRİN' penceresi içindeki 'Oyunuzu kullanın' yazısının altında bulunan 'Kullan' butonuna tıklayarak değerlendirme yapabilir.
- Kullanıcı, 'Kullanıcı adı' ve 'Kullanıcı değerlendirmesi' kısmını doldurarak oyunu ve yorumunu yapar.
- Veritabanına kaydedilen bu yorum ve oy doğrultusunda toplam oyun ortalaması hesaplanır ve 'OYUNUZLA DEĞERLENDİRİN' penceresinde görüntülenir.
- Yorum yapan kullanıcının girdiği 'Kullanıcı adı'nın baş harfi kırmızı bir daire içerisinde belirtilir.
- Kullanıcının yorumu yapmış olduğu saat, yorum kutusunun sağ altında görüntülenir.

![image](https://github.com/gamzecakan/My_Blog/assets/135230687/97dacd4a-6783-4dd2-a70e-ee3ba4d999a5)

<hr>

## Dağıtım
- Projeyi yerel bilgisayarınıza klonlamak için aşağıdaki komutu terminal veya komut istemcisinde çalıştırın:
  ```bash
  git clone https://github.com/gamzecakan/My_Blog.git

- Projenin çalışabilmesi için XAMPP gibi bir geliştirme ortamı gereklidir.
  - XAMPP İndirme Sayfası'ndan XAMPP'yi indirin ve kurun.
  - Kurulum sırasında Apache web sunucusu ve MySQL veritabanı seçeneklerini işaretleyin.

- XAMPP'yi başlatın ve Apache sunucusunu ve MySQL veritabanını çalışır duruma getirin.
- Tarayıcınızda localhost üzerinde projenin çalıştığını görebilirsiniz.
