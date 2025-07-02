<?php 
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        if(isset($_POST["kontrol_ad"]))
            $kontrol_ad=$_POST["kontrol_ad"];
        if(isset($_POST["kontrol_kod"]))
            $kontrol_kod=$_POST["kontrol_kod"];

        include "connection.php";
        $call_query= $bdconnection->query("SELECT * FROM gumus_musteri_tablo where musteri_id=$kontrol_kod;");
        $record=$call_query->fetch();
        
        
        $add=$record["musteri_ad"];    //**********************************************************/
        $musteri_id=$record["musteri_id"];

        $a=new DateTime($record["musteri_giris_tarih"]);
        $b=new DateTime($record["musteri_cikis_tarih"]);
        $interval = $a->diff($b);

        if($kontrol_ad==$add && $kontrol_kod==$musteri_id)
        { ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Gumus Otel</title>
                    <link rel="stylesheet" href="css/gumus_rez_durum.css">
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
                                

                                <div>
                                <section>
                                                <div class="rez-body">
                                                    <form action="gumus_otel_kontrol_update_html.php" method="post">
                                                        <div>
                                                            <h3 class="rez-head">Rezervasyon Durum</h3>
                                                            <p class="rez-under-head">Bu sizin rezervasyon durumunuzdur. İptal etmek istiyorsanız kırmızı iptal butonuna tıklayın veya bazı değişiklikler yapmak istiyorsanız güncelleme için sarı butona tıklayın.</p>
                                                        </div>
                                                        <table>
                                                        <tr>
                                                                <td class="table-col1">KOD</td>
                                                                <td class="tablo-col2"><?php echo $record["musteri_id"]; ?></td>
                                                                <input type="hidden" name="hidden_kod" value="<?php echo $record['musteri_id']; ?>">
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
                                                            <tr>
                                                                <td>
                                                                    <a href="http://localhost/gezi_tanitim_turizm_herberi/web_site/Gumus_otel_anasafya.html.php" 
                                                                    style="text-decoration: none; background-color:blue; color:white; padding:3px 20px; margin:20px 0 0 10px;">TAMAM</a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                            
                                                    </form>

                                                </div>


                                            </section>
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



            
<?php        }
        else{
            echo "<script>
            alert('Girilen ad ve kod mevcut değil');
            window.location.href = 'http://localhost/gezi_tanitim_turizm_herberi/web_site/Gumus_otel_anasafya.html.php';
            </script>";
            exit();
        }
    }

?> 