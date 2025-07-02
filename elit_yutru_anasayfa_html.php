<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elit Kiz Yurdu </title>
    <link rel="stylesheet" href="css/elit_yurt_ansayfa.css">
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
                <h3 class="yurt-ad">Elit Yurt</h3>
                <div class="yurt-resimler">
                    <img src="resimler/elit_kiz_ogrenci_yurdu.jpg" class="yurt-resim" alt="">
                </div>
                <div class="yurt-ozellikle">
                    <div class="yurt-li">
                        <li>
                            <ul class="yu-h g" onclick="toggleMenu('divg')"><button class="yurt-li-buton">Hakkinda</button></ul>
                            <ul class="yu-h 0" onclick="toggleMenu('divo')"><button class="yurt-li-buton">Yurt Avantajlari</button></ul>
                            <ul class="yu-h y" onclick="toggleMenu('divy')"><button class="yurt-li-buton">Yorumlar</button></ul>
                            <ul class="yu-h i" onclick="toggleMenu('divil')"><button class="yurt-li-buton">Iletisim</button></ul>
                        </li>
                    </div>
                    
                    <div class="yurt-p" >


                        <div class="genel-bilgi content" id="divg">
                            <h3 class="four-li">Hakkinda</h3>
                            <h3 class="genel-h">Viziyonumz</h3>
                            <p class="genel-p">
                            Kaliteli ve yenilikçi hizmetlerimiz ile koşulsuz misafir memnuniyetini sağlayarak sektörümüzün öncüsü olmaktır.
                            </p>
                            <h3 class="genel-h">Misyonumuz</h3>
                            <p class="genel-p">
                            Tüm konuklarımıza aynı mükemmellikte hizmet sunmak. Sunduğumuz hizmetteki kaliteyi en üst seviyeye çıkarmak. Hizmetlerinden %100 memnun olunan bir kurum olmak.
                            </p>
                            <h3 class="genel-h">Değerlerimiz</h3> 
                            <p class="genel-p">
                                -Etik değerlere, ticaret ahlakına bağlıyız.br <br>
                                -İnsan değerine inanır ve insana yatırım yaparız. <br>
                                -Her alanda kalite bilincini yerleştirmek üzere çaba gösteririz. <br>
                                -Misafir  memnuniyetini esas alırız. 100% Misafir Memnuniyeti <br>
                                -Kalıcı konuklar edinmenin değerine inanıyor, konuklarımızla aramızdaki dostluğa uzun vadeli bakıyoruz.
                            </p>

                        </div>
                        <div class="ozellikle content" id="divo">
                        <h3 class="four-li">Yurt Avantajlari</h3>
                           <ul>
                            <li><i class="fa-solid fa-check"></i>Pansiyon kendi bünyesinde güvenlik personeli bulundurmakla beraber polis merkezinin karşısında bulunmaktadır.</li>
                            <li><i class="fa-solid fa-check"></i>Kendi yemek hanesi mevcuttur ve gün boyu temiz bir şekilde hizmet vermektedir </li>
                            <li><i class="fa-solid fa-check"></i> Migros şok a101 bim gibi büyük marketlerin yanı ıra bakkal büfe gibi alışveriş merkezlerine yürüme mesafesindedir ayrıca kıyafet ayakkabı vb alışveriş mağazalarına da yürüme mesafesindedir</li>
                            <li><i class="fa-solid fa-check"></i> Öğrenciler sıkıldıklarında Hava alabilecekleri mola verebilecekleri park vb yeşil alanlar pansiyon çevresinde bulunmaktadır</li>
                            <li><i class="fa-solid fa-xmark"></i>Gün boyu sınırsız internet bulunmaktadır ve her odada tv bulunmaktadır</li>
                            <li><i class="fa-solid fa-xmark"></i> Pansiyon genel havalandırma ve bina temizliği konusunda personel tarafından gün boyu temiz tutulmaktadır</li>
                            <li><i class="fa-solid fa-xmark"></i>Pansiyonumuzda gün boyu kamera sistemiyle korunmaktadır ayrıca güvenlik personeli mevcuttur. </li>
                            
                           </ul>

                        </div>
                        <form action="elit_bd.php" method="post">
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
                                    <input class="yu-input yurt-gonder" type="submit" value="GONDER">
                                </div>
                            
                            </div>
                        </form>
                        

                        <div class="iletisim content" id="divil">
                        <h3 class="four-li">Iletisim</h3>
                            <p class="iletisim-p">Adres : Karaer, Vakıfbank karşısında, Atatürk  Cd. D:No:50,29000 Gümuşhane
                                Merkez/Gümuşhane
                            </p>
                            <p class="iletisim-p">Tel: (0456) 213 13 33</p>
                            <p class="iletisim-p">E-Posta : info@elitkizpansiyon.com</p>
                            <div class="aytas-map">
                            <iframe class="a-m" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.7378877124233!2d39.47838897586975!3d40.458937971432846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40651b352f73342f%3A0xe63f9b69c4bc979b!2zR8O8bcO8xZ9oYW5lIEVsaXQgS8SxeiDDlsSfcmVuY2kgWXVyZHU!5e0!3m2!1sen!2str!4v1734259254746!5m2!1sen!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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