<?php
include "connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["iptal"]))
    {
        /**********************************************************calling musteri id from database  */
        if(isset($_POST["hidden_kod"]))
            $hidden_kod=$_POST["hidden_kod"];




        /*****************************************************************deleting data from database */
        $sil_query=$bdconnection->prepare("DELETE FROM gumus_musteri_tablo where musteri_id=?");
        $sil=$sil_query->execute(array($hidden_kod));
        if($sil)
        {
            echo "<script>
            alert('Rezervasyonunuz Başarıyla Iptal Edildi');
            window.location.href = 'http://localhost/gezi_tanitim_turizm_herberi/web_site/Gumus_otel_anasafya.html.php';
            </script>";
            exit();
        }
    }
    if(isset($_POST["gunceleme"]))
    {
        if(isset($_POST["hidden_kod"]))
            $hidden_kod=$_POST["hidden_kod"];
        $call_query= $bdconnection->query("SELECT * FROM gumus_musteri_tablo where musteri_id=$hidden_kod;");
        $record=$call_query->fetch();
    ?>  
                      
       <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Guncelleme</title>
            <link rel="stylesheet" href="css/update_1_.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        </head>
        <body>
            <!--L'en-tête -->
            <header>
                <div class="header-div">
                    <img src="resimler/logo.png" alt="" class="resim1"> 
                <div class="head-div">
                    <h3 class="header-h"> Gezi tanıtım sitesi, turizm rehberi</h3><br>
                    <p class="header-p">En güzel destinasyonları keşfetme rehberiniz</p>
                </div> 
                </div>
            </header>
            <!--L'en-tête  end-->
            <!----------------------------------------------------Navigation--------------------------------------------->
            <nav>
                <a href="hakkinda.html">Hakkında</a>
                <a href="bize_ulasim.html">bize Ulaşım</a>
                <a href="etkileyen.html">etkinlik</a>
                <a href="http://localhost/gezi_tanitim_turizm_herberi/web_site/konaklama_anasayfa_html.php" class="selected">Konaklama</a>
                <a href="varis_noktasi.html">varış noktası</a> 
            </nav>
            <!---------------------------------------------------Navigation end------------------------------------------>
            
            <!--------------------------------------------------section----------------------------------------->
        <section>
            <div class="dash-board">

                <div class="side">
                    <a class="side-1 selected-r" href="">Rezervasyon</a><br>
                    

                    <p>Rezervasyon yaptığınız odada değişiklik yapabilirsiniz.
                    
                    <span style="color: red">ancak rezervasyon kodu değişmeyecek ! </span></p>
                </div>

                <div class="main-dash-content">
                    <form action="gumus_otel_kontrol_update_.php" method="post">
                        <table class="table-icerik">
                                <tr>
                                    <td class="t-d">KOd</td>
                                    <td class="t-i"><input type="text" name="" value="<?php echo $record["musteri_id"]?>" readonly></td>
                                    <input type="hidden" name="hidden_kod" value="<?php echo $record['musteri_id']; ?>">
                                </tr>
                                <tr>
                                    <td class="t-d">Giris Tarih</td>
                                    <td class="t-d">Cikis Tarih</td>
                                </tr>
                                <tr>
                                    <td class="t-i"><input type="date" name="giris_tarih" value="<?php echo $record["musteri_giris_tarih"]?>" required></td>
                                    <td class="t-i"><input type="date" name="cikis_tarih" value="<?php echo $record["musteri_cikis_tarih"]?>" required></td>
                                </tr>
                                <tr>
                                    <td class="t-d">Adiniz</td>
                                    <td class="t-i"><input type="text" name="ad" value="<?php echo $record["musteri_ad"]?>" required></td>
                                </tr>
                                <tr>
                                    <td class="t-d">Soyadiniz</td>
                                    <td class="t-i"><input type="text" name="soyad" value="<?php echo $record["musteri_soyad"]?>" required></td>
                                </tr>
                                <tr>
                                    <td class="t-d">Telefon</td>
                                    <td class="t-i"><input type="number" name="telefon" value="<?php echo $record["musteri_telefon"]?>" required></td>
                                </tr>
                                <tr>
                                    <td class="t-d">E-posta</td>
                                    <td class="t-i"><input type="email" name="eposta" value="<?php echo $record["musteri_eposta"]?>" required></td>
                                </tr>
                            
                                
                                <tr>
                                    <td class="t-d">TC kimlik </td>
                                    <td class="t-i"><input type="number" name="kimlik" value="<?php echo $record["musteri_kimlik"]?>" required></td>
                                </tr>
                                <tr>
                                    <td class="t-d">Dogum Tarih</td>
                                    <td class="t-i"><input type="date" name="dogum_tarih" value="<?php echo $record["musteri_dogum_tarih"]?>" required></td>
                                </tr>
                                <tr>
                                    <td class="t-d">Adres</td>
                                    <td class="t-i"><input type="text" name="adres" value="<?php echo $record["musteri_adres"]?>" required></td>
                                </tr>
                                <tr>
                                    <td class="t-d">Cinsiyet</td>
                                    <td class="t-radio">
                                        <input class="t-radio-r" type="radio" name="cinsiyet" value="erkek" required >erkek
                                        <input type="radio" name="cinsiyet" value="kadin" required>kadin
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td class="t-i button" colspan="2"><input type="submit" name="Güncelleme_db" value="Güncelleme"></td>
                                </tr>
                        </table>
                    </form>
                    

                </div>

            </div>
        </section>

            <!----------------------------------------------------Pied de page (footer)----------------------------------->
            <footer>
                <div class="footer-container">
                    <!-- Section Mentions légales -->
                    <div class="footer-section">
                        <h3>BİZE ULAŞIM</h3>
                        <ul>
                            <li><a href="mailto:contact@voyages.com">contact@voyages.com</a></li>
                            <li><a href="tel:+11234567890">905060314629</a></li>
                        </ul>
                    </div>
            
                    <!-- Section Contact -->
                    <div class="footer-section">
                        <h3>VARIŞ NOKTASI</h3>
                        <ul>
                            <li><a href="varis_noktasi.html">Şehir</a></li>
                            <li><a href="varis_noktasi.html">Köyler</a></li>
                        </ul>
                    </div>
                    <!-- Section Contact -->
                    <div class="footer-section">
                        <h3>ETKINLIK</h3>
                        <ul>
                            <li><a href="dogal.html">Doğal</a></li>
                            <li><a href="parklar.html">Parki</a></li>
                            <li><a href="parklar.html">Araba Kiralamak</a></li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <h3>KONAKLAMA</h3>
                        <ul>
                            <li><a href="oteller_ana_sayfa.html.php">Hoteller</a></li>
                            <li><a href="yurtlar_anasayfa_html.php">Yurtlar</a></li>
                        </ul>
                    </div>
            
                    <!-- Section Réseaux sociaux -->
                    <div class="footer-section">
                        <h3>Medya sosyal</h3>
                        <ul>
                            <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
                            <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
                            <li><a href="https://www.twitter.com" target="_blank">Twitter</a></li>
                            <li><a href="https://www.linkedin.com" target="_blank">LinkedIn</a></li>
                        </ul>
                    </div>
            
                    <!-- Section Newsletter -->
                    
                </div>
            
                <div class="footer-bottom">
                    <p>&copy; 2024 Seyahat ve Maceralar - Tüm hakları saklıdır.</p>
                </div>
                <div class="back-to-top">
                    <a href="#top">Başa dön</a>
                </div>
            </footer>
            
        </body>
        </html>




   <?php }
}
?>
