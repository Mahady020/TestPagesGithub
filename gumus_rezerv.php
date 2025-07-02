<?php
if($_SERVER["REQUEST_METHOD"]="POST")
{
   $ad= $_POST["ad"];
   $soyad= $_POST["soyad"];
   $telefon= $_POST["telefon"];
   $eposta= $_POST["eposta"];
   $kimlik= $_POST["kimlik"];
   $dogum_tarih= $_POST["dogum_tarih"];
   $adres= $_POST["adres"];
   $cinsiyet=$_POST["cinsiyet"];
   $giris_tarih=$_POST["giris_tarih"];
   $cikis_tarih=$_POST["cikis_tarih"];

   $bugun_tarih_2= new DateTime();
   $db_bugun=$bugun_tarih_2->format("d.m.y H:i:s");




  try {
    require_once "connection.php";
    
    
    /*-------------------------------------------18 yasinda uzeri konrtol--------------------------------------------- */
    $bugun_tarih = new DateTime();

    $girdi_tarih= new DateTime($dogum_tarih);
    $kontrol = $bugun_tarih->diff($girdi_tarih);
    if($kontrol->y >=18)
    {
        $bd_dogum_tarih=$dogum_tarih;
    }
    else
    {
    
        echo "<script>
        alert('(18) yaşının altındasınız');
        window.location.href = 'http://localhost/gezi_tanitim_turizm_herberi/web_site/Gumus_otel_anasafya.html.php';
        </script>";
        exit();
        
    }   



    /*--------------------------------------------kadin ve erkek kontrol------------------------------------------------------ */
    if($cinsiyet=="erkek")
    {
    $db_cinsiyet="E";
    } 
    else
    {
    $db_cinsiyet="K";
    }  

    /*-------------------------------------------giris ve cikis tarih farkli ------------------------------------------------- */

    
        if($cikis_tarih>$giris_tarih)
        { 
        $bd_giris_tarih=$giris_tarih;
        $bd_cikis_tarih=$cikis_tarih;
        //$bd_giris_tarih_iki=$bd_giris_tarih;
        
        }
        else
        {
            echo "<script>
            alert('çıkış tarihi giriş tarihinden büyük veya ona eşit olmalıdır !');
            window.location.href = 'http://localhost/gezi_tanitim_turizm_herberi/web_site/Gumus_otel_anasafya.html.php';
            </script>";
            exit();
        }

    /**********************************************inserting data into data base************************************************* */
    $con_query=$bdconnection->prepare("INSERT INTO gumus_musteri_tablo SET
    musteri_ad= :mu_ad,
    musteri_soyad= :mu_soyad,
    musteri_telefon= :mu_telefon,
    musteri_eposta= :mu_eposta,
    musteri_kimlik= :mu_kimlik,
    musteri_dogum_tarih= :mu_dogum_tarih,
    musteri_adres= :mu_adres,
    musteri_cinsiyet= :mu_cinsiyet,
    musteri_giris_tarih= :mu_giris_tarih,
    musteri_cikis_tarih= :mu_cikis_tarih,
    rezerv_tarih =:mu_rez_tarih_saat ");

    $record_bir=$con_query->execute(array(
        "mu_ad"=> "$ad",
        "mu_soyad"=>"$soyad",
        "mu_telefon"=>"$telefon",
        "mu_eposta"=>"$eposta",
        "mu_kimlik"=>"$kimlik",
        "mu_dogum_tarih"=>"$bd_dogum_tarih",
        "mu_adres"=>"$adres",
        "mu_cinsiyet"=>"$db_cinsiyet",
        "mu_giris_tarih"=> "$giris_tarih",
        "mu_cikis_tarih"=> "$cikis_tarih",
        "mu_rez_tarih_saat"=>"$db_bugun"
    ));
    if($con_query && $record_bir)
    {
       header("location: http://localhost/gezi_tanitim_turizm_herberi/web_site/gumus_rez_durum.php");
    }
}
   catch (PDOException $e) {
     echo "NOT INSERTED<br>".$e->getMessage();
   }



} 
