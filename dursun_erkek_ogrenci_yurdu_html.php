<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dursun Keleş Erkek Öğrenci Yurdu</title>
    <link rel="stylesheet" href="css/dursun_erkek_ogrenci_yurdu.css">
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
    <!-----------------------------------section------------------------------------------------->
        <section>
            <div class="yurt-kontayner">
                <h3 class="yurt-ad">Dursun Erkek Öğrenci Yurdu</h3>
                <div class="yurt-resimler">
                    <img src="resimler/dursun_yurt.jpg" class="yurt-resim" alt="">
                </div>
                <div class="yurt-ozellikle">
                    <div class="yurt-li">
                        <li>
                            
                            <ul class="yu-h 0" onclick="toggleMenu('divo')"><button class="yurt-li-buton">Yurt özellikler</button></ul>
                            <ul class="yu-h y" onclick="toggleMenu('divy')"><button class="yurt-li-buton">Yorumlar</button></ul>
                            <ul class="yu-h i" onclick="toggleMenu('divil')"><button class="yurt-li-buton">Iletisim</button></ul>
                        </li>
                    </div>
                    
                    <div class="yurt-p" >

                        <div class="ozellikle content" id="divo">
                        <h3 class="four-li">Yurt özellikler</h3>
                           <ul>
                            <li><i class="fa-solid fa-check"></i> Sicak Su(24 saat)</li>
                            <li><i class="fa-solid fa-check"></i> Internet</li>
                            <li><i class="fa-solid fa-check"></i> Güvenlik Hizmeti</li>
                            <li><i class="fa-solid fa-check"></i> Kahvaltı (Ücretsiz)</li>
                            <li><i class="fa-solid fa-check"></i> Kahvaltı açık büfe seçmelidir</li>
                            <li><i class="fa-solid fa-check"></i> Öğle Yemeği (Ücretsiz)</li>
                            <li><i class="fa-solid fa-check"></i>Oda Tipleri: 4 Kişilik <br>Oda tipleri: 5 Kişilik<br>Oda tipleri: 6 Kişilik</li>
                            <li><i class="fa-solid fa-check"></i> Çamaşır Odası</li>
                           </ul>

                        </div>
                        <form action="dursun_db_.php" method="post">
                                <div class="yorumlar content" id="divy">
                            <h3 class="four-li">Yorumlar</h3>
                                <div class="inputBox">
                                <input class="yu-input" type="text" name="ad_soyad" required="required">
                                <span>Ad Soyad</span>
                                </div>
                                <div class="inputBox">
                                    <input class="yu-input" type="email" name="eposta" required="required">
                                    <span>E-Posta</span>
                                </div>
                                <div class="inputBox">
                                    <textarea name="mesaj" class="text-yu-input" id="" rows="5" cols="20" ></textarea>
                                    <span class="textareaspan">mesajiniz</span>
                                </div>
                                <div class="inputBox">
                                    <input class="yu-input yurt-gonder" type="submit" value="Gönder">
                                </div>
                            
                            </div>
                        </form>
                        

                        <div class="iletisim content" id="divil">
                        <h3 class="four-li">Iletisim</h3>
                            <p class="iletisim-p">Adres:Bağlarbaşı mahallesi, Recep Tayyip Erdoğan Bulvarı, no: 41
                                Merkez / Gümüşhane
                            </p>
                            <p class="iletisim-p">Tel: 0506 125 3748</p>
                            
                            <div class="aytas-map">
                              <iframe class="a-m" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.674584561993!2d39.503236375868816!3d40.43820407143615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40651a2a95da8235%3A0xffdb9dd7ef4bae19!2sDursun%20Kele%C5%9F%20Erkek%20%C3%96%C4%9Frenci%20Yurdu!5e0!3m2!1sen!2str!4v1734262633436!5m2!1sen!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        

                    </div>
                </div>

            </div>

        </section>




      <!-------------------------------------------Pied de page (footer)------------------------------------------->
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
    <script>
       let lastdiv=null;

       function toggleMenu(divId)
       {
         const current=document.getElementById(divId);

         if( lastdiv && lastdiv!= current)
         {
            lastdiv.classList.remove('open');
         }
         if(!current.classList.contains('open'))
         {
            current.classList.add('open');
            lastdiv=current;
         }
         else
         {
            current.classList.remove('open');
            lastdiv=null;
         }
       }
    </script>
</body>
</html>