<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $ad_soyad = $_POST["ad_soyad"];
    $eposta = $_POST["eposta"];
    $mesaj = $_POST["mesaj"];

    $tarih_saat=new DateTime();
    $tarih_saat_db=$tarih_saat->format("d-m-y h:i:s");

    try {
        $con_query=$bdconnection->prepare("INSERT INTO elit_yorumlar_tablo SET
        yorumlar_ad_soyad = :yo_ad_soyad,
        yorumlar_mesaj = :yo_mesaj,
        yorumlar_tarih_saat = :yo_tarih_saat,
        yorumlar_e_posta = :yo_e_posta
       ");
    
        $record_bir=$con_query->execute(array(
            "yo_ad_soyad"=>"$ad_soyad",
            "yo_mesaj"=>"$mesaj",
            "yo_tarih_saat"=>"$tarih_saat_db",
            "yo_e_posta"=>"$eposta"
            ));

        if($con_query && $record_bir)
        {
             echo "<script>
                    alert('Yorumunuz başarıyla gönderildi,\\n ana sayfaya dönmek için tamam düğmesine tıklayın');
                    window.location.href = 'http://localhost/gezi_tanitim_turizm_herberi/web_site/elit_yutru_anasayfa_html.php';
                  </script>";
         
            exit();
             // header("location: http://localhost/gezi_tanitim_turizm_herberi/konaklama/elit_yutru_anasayfa_html.php");
             //die();
        }
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}


?>