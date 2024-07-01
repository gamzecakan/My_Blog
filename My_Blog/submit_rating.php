<?php

$connect = new PDO("mysql:host=localhost:3307; dbname=my_blog", "root","");

//isset() fonk. ile rating_data dan veri gönderildi? gönderilmedi?
if(isset($_POST["rating_data"]))
{

	//data dizisine (veriler gönderildiyse eğer) bu veriler atanır
	$data = array(
		':user_name'		=>	$_POST["user_name"],
		':user_rating'		=>	$_POST["rating_data"],
		':user_review'		=>	$_POST["user_review"],
		':datetime'			=>	time()
	);

	//query ınsert ınto hazırlanan sorguyu / yorumu review_table a ekler
	$query = "
	INSERT INTO review_table 
	(user_name, user_rating, user_review, datetime) 
	VALUES (:user_name, :user_rating, :user_review, :datetime)
	";//: olrak kullanıılma sebebi yer tutucu olarak


	//connect ile oluşturulan vb bağlantısı sayesinde prepare() methodu çağırıldı
	//query e atanan veriler prepare a parametre olarak geldi
	//parametreler yani query sıkıntısız olursa statement e atandı
	$statement = $connect->prepare($query);


	//statement e atanmış olan sorgu var şuan. execute() methoduna parametre olarak data dizisindeki veriler yerleştirilir
	//prepare() sorguyu ayırır çalışmaya hazırlar
	//execute() hazırlanöış sorguyu çalıştırır ve verileri yerleştirir
	$statement->execute($data);

    echo "Oyunuz ve yorumunuz başarıyla gönderildi.";	
}

if(isset($_POST["action"]))//veri gönderild? gönderilemdi?
{
	//ortlamayı, toplam kullanımı, 5-4-3-2-1 yıldız oy kullanımını, kullanıcı yıldızlama toplam vb. değerlr ilk bşata i sıfırlansın
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();


	//review_table daki tüm yourmları tarihe göre azalan sırada
	$query = "
	SELECT * FROM review_table 
	ORDER BY review_id DESC
	";
	//PDO::FETCH_ASSOC : Sütun isimlerine indisli bir dizi döner.
	//result query sorgu sonucunu tuttu burada
	$result = $connect->query($query, PDO::FETCH_ASSOC);

	
	//foreach sayesinde vt çekilen her yorum satırı çalışıcak
	//fetc_assoc ile associative array yani ilişkisel dizi şeklinde olucakk
	//özetle result vt sorgu sonucunu tutuyor, as result tan dönen verileri ansıl alacağını
	//row ise her satırın ilişkisel dizi olrak dönceeğini ele alır
	foreach($result as $row)
	{
		$review_content[] = array(
			'user_name'		=>	$row["user_name"],
			'user_review'	=>	$row["user_review"],
			'rating'		=>	$row["user_rating"],
			'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
		);

		if($row["user_rating"] == '5')//5 var mı sayaç arttır
		{
			$five_star_review++;
		}

		if($row["user_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["user_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["user_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["user_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++; //toplam yorum sayııs her döngü sonucu artacak

		$total_user_rating = $total_user_rating + $row["user_rating"];//verilen yıldıxların toplam puanını hesspalar

	}

	$average_rating = $total_user_rating / $total_review; //toplam puanı , sayıta bölerek ort hesaplar


	//php de toplanan veriler JSON formatına dönüştürülür, kullanıcı arayüzüne gönderilir
	//JSON(JavaScript Object Notation) toplanan değerlendirme bilgilerini phpden dönüştürerek js ye göndericek
	$output = array(
		'average_rating'	=>	number_format($average_rating, 1), //bu ortalamayı 1 basamaklı olacak şeklide biçimlendirir
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,//4lü yorum sayısı
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content //tüm verileri içeren dizi
	);

	echo json_encode($output); //output dizisini json_encode() a parametre olarak gönderir
	//json_encode() fonksiyonu bu PHP yi JSON formatına dönüştürür

}
?>