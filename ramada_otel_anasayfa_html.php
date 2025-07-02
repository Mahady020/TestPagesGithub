<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramada Otel</title>
    <link rel="stylesheet" href="css/ramada_otel_anasayfa.css">
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

     <!-------------------------------------------section---------------------------------------------------------------------->
<section>
    <div class="otelkart">
        <h2 class="kart-head">Rezervasyon Yaptir</h2>
        <div class="odalar">
            <img src="resimler/ramada_oda1.jpg" class="oda-resim" alt="">
            <h3 class="oda-tip">İki Yataklı Oda</h3>
            <p class="oda-fiyat">Fiyat : 3.500 TL</p>
            <p class="oda-fiyat" style="color:black; font-size:smaller">ücretsiz kahvaltı, <br> wifi internet, TV Kanalları<br>balkon</p>
            <form class="form-b-i" action="ramada_1_rezerv_html.php" method="post">
                    <input class="form-buton" type="submit" name="oda_7" value="Rezerv">
            </form>
        </div>


        <div class="odalar">
            <img src="resimler/ramada_oda2.jpg" class="oda-resim" alt="">
            <h3 class="oda-tip">Suit Oda</h3>
            <p class="oda-fiyat">Fiyat : 1.500 TL</p>
            <p class="oda-fiyat" style="color:black; font-size:smaller">ücretsiz kahvaltı, <br> wifi internet, <br>TV Kanalları</p>
            <form class="form-b-i" action="ramada_1_rezerv_html.php" method="post">
                    <input class="form-buton" type="submit" name="oda_8" value="Rezerv">
            </form>
        </div>


        <div class="odalar">
        <img src="resimler/ramada_oda3.jpg" class="oda-resim" alt="">
        <h3 class="oda-tip">Kraliçe Oda</h3>
        <p class="oda-fiyat">Fiyat : 9.000 TL</p>
        <p class="oda-fiyat" style="color:black; font-size:smaller">Hoş Geldiniz Atıştırmalıkları veya Meyveler, ücretsiz kahvaltı,Kahve ve Çay <br> wifi internet, TV Kanalları<br>Mini buzdolabı</p>
        <form class="form-b-i" action="ramada_1_rezerv_html.php" method="post">
                    <input class="form-buton" type="submit" name="oda_9" value="Rezerv">
            </form>
        </div>
        <div class="kontrol-odalar">
            <h3 class="oda-tip">Rezervasyon durumunuzu kontrol etmek için adınızı ve rezervasyon kodunuzu girin</h3>
            <form class="kontrol" action="ramada_otel_kontrol_html.php" method="post">
                <span class="kontrol-txt">Adınızı</span>
                <input class="kontrol-input" type="text" name="kontrol_ad">
                <span class="kontrol-txt">Kodunuzu</span>
                <input class="kontrol-input" type="number" name="kontrol_kod">
                <p>
                    <input class="kontrol-submit" type="submit" value="Kontrol">
                </p>
            </form>
        </div>

    </div>
</section>

    
<!--------------------------------------------Section des destinations resim end -------------------------------->




    <!--Pied de page (footer)-->
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