
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramada Otel</title>
    <link rel="stylesheet" href="css/cimenler_2_rezerv_.css">
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
     <!--------------------------------------------------section-------------------------------------------------->
    <div id="section-div">
    <div class="side">
                    <h3>Rezervasyon Durum</h3>
                    <p style="margin-top:80px;">Rezervasyon durumunuzu ve kodunuzu görmek için <span style="color:blue">lütfen adınızı doğru giriniz</span>.</p>
                </div>
            <div class="kontrol-div">
                <form action="ramada_2_rezerv_html.php" method="post">
                    <div>
                        <?php 
                        include "connection.php";
                        $call_query= $bdconnection->query("SELECT * FROM ramada_musteri_tablo ORDER BY musteri_id DESC ");
                        $record=$call_query->fetch();
                        
                        
                        $add=$record["musteri_ad"];    //**********************************************************/
                        $soyadd=$record["musteri_soyad"];

                        
                        ?>
                        <p class="kontrol-p">
                            <div class="kontrol-dv1">
                                <span>Adiiniz</span><?php echo substr($add,0,2) ."******".substr($add,-2); ?>
                                <input class="kontrol-input" type="text" name="ad_1">
                            </div>
                            <div class="kontrol-dv1">
                                <span>Soyadiniz</span> <?php echo substr($soyadd,0,2) ."******".substr($soyadd,-2); ?>
                                <input class="kontrol-input" type="text" name="soyad_1">
                            </div>
                            <div class="kontrol-dv1"><input class="kontrol-submit" type="submit"  value="Konrtol"></div>
                        </p>
                       
                    </div>

                </form>

            </div>
                <div> 
                        <?php 
                        if ($_SERVER["REQUEST_METHOD"]=="POST")
                        {
                                    $adkod=$_POST["ad_1"];
                                    $soyadkod=$_POST["soyad_1"];
                                    $rez_tarih=$record["rezerv_tarih"];
                                    $a=new DateTime($record["musteri_giris_tarih"]);
                                    $b=new DateTime($record["musteri_cikis_tarih"]);
                                    $interval = $a->diff($b);
                                    if($adkod==$add && $soyadkod==$soyadd)
                                    {
                                        ?>
                                            <section>
                                <div class="rez-body">
                                    <form action="ramada_3_rezerv_html.php" method="post">
                                        <div>
                                            <h3 class="rez-head">Rezervasyon Durum</h3>
                                            <p class="rez-under-head">Bu sizin rezervasyon durumunuzdur. İptal etmek istiyorsanız kırmızı iptal butonuna tıklayın veya bazı değişiklikler yapmak istiyorsanız güncelleme için sarı butona tıklayın.</p>
                                        </div>
                                        <table>
                                        <tr>
                                                <td class="table-col1">KOD</td>
                                                <td class="tablo-col2"><?php echo $record["musteri_id"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="table-col1">ADINIZ</td>
                                                <td class="tablo-col2"><?php echo $record["musteri_ad"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="table-col1">ODA</td>
                                                <td class="tablo-col2"><?php echo "100" ?></td>
                                            </tr>
                                            <tr>
                                                <td class="table-col1">GIRIS TARIH</td>
                                                <td class="tablo-col2"><?php echo $record["musteri_giris_tarih"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="table-col1">GUN</td>
                                                <td class="tablo-col2"><?php echo $interval->d; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="table-col1">CIKIS TARIH</td>
                                                <td class="tablo-col2"><?php echo $record["musteri_cikis_tarih"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="table-col1">ODEME DURUM</td>
                                                <td class="tablo-col2"><?php echo "ODEDI" ?></td>
                                            </tr>
                                            <tr>
                    
                                                <td><input class="iptal" type="submit" name="iptal" value="IPTAL"></td>
                                                <td><input class="guncel" type="submit" name="gunceleme" value="GUNCELLEME"></td>
                                            </tr>
                                            <td>
                                                    <a href="http://localhost/gezi_tanitim_turizm_herberi/web_site/ramada_otel_anasayfa_html.php" 
                                                       style="text-decoration: none; background-color:blue; color:white; padding:3px 20px; margin:20px 0 0 10px;">TAMAM</a>
                                            </td>
                                        </table>
                                            
                                    </form>

                                </div>


                            </section>


                            <?php 
                            }
                            else
                            {
                                ?>
                                    <script>alert('Verilen Isimler Yanlis!');</script>
                            <?php
                            }

                        }
                        else
                        { ?>
                            
                    <?php  
                    }
                    ?>
                </div>

    </div>


    
       



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