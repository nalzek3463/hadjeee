<?php

include("db_conn.php");

$auta = 'SELECT * FROM auta ORDER BY id DESC';
$auta1 = mysqli_query($conn, $auta);
$product_cars = mysqli_fetch_all($auta1, MYSQLI_ASSOC);

mysqli_free_result($auta1);
mysqli_close($conn);


foreach ($product_cars as $product_car) {

$id = $product_car['id'];
$marka = $product_car['marka'];
$tip = $product_car['tip'];
$kod_motora = $product_car['kod_motora'];
$zapremina = $product_car['zapremina'];
$snaga = $product_car['snaga'];
$gorivo = $product_car['gorivo'];
$vrsta_mjenjaca = $product_car['vrsta_mjenjaca'];
$kod_mjenjaca = $product_car['kod_mjenjaca'];
$brzina = $product_car['brzina'];
$pogon = $product_car['pogon'];
$godina = $product_car['godina'];
$eu_standard = $product_car['eu_standard'];
$boja = $product_car['boja'];
$slika1 = $product_car['slika1'];
$slika2 = $product_car['slika2'];
$slika3 = $product_car['slika3'];
$slika4 = $product_car['slika4'];
$slika5 = $product_car['slika5'];
$slika6 = $product_car['slika6'];
$slika7 = $product_car['slika7'];

echo <<<HTML
    <div class="block-products-carousel__column">
        <div class="block-products-carousel__cell">
            <div class="product-card product-card--layout--grid">
                <div class="product-card__image">
                    <div class="image image--type--product">
                        <a href="product-full.html" class="image__body">
                            <img class="image__tag" src="$slika1" alt="$marka $tip">
                        </a>
                    </div>
                </div>
                <div class="product-card__info">
                <div class="product-card">
                    <div class="input-group" style="display: block!important;">
                        <a href="product-full.html" style="font-weight: bold; color: black!important; display: flex; justify-content: center; align-items: center;"> $marka $tip </a>  
                        <p class="w-50" style="font-size: 14px; padding-top: 10px; padding-left: 20px; color: gray;">
                            <i class="fas fa-chevron-circle-right" style="color: #fbaa00!important;"></i> <b>Godina:</b> $godina
                        </p> 
                        <p class="w-70" style="font-size: 14px; padding-left: 20px; color: gray;">
                            <i class="fas fa-chevron-circle-right" style="color: #fbaa00!important;"></i> <b>Zapremina:</b> $zapremina 
                        </p>
                        <p class="w-70" style="font-size: 14px; padding-left: 20px; color: gray;">
                            <i class="fas fa-chevron-circle-right" style="color: #fbaa00!important;"></i> <b>Snaga:</b> $snaga
                        </p>
                        <p class="w-70" style="font-size: 14px; padding-left: 20px; color: gray;">
                            <i class="fas fa-chevron-circle-right" style="color: #fbaa00!important;"></i><b> Gorivo:</b> $gorivo
                        </p>
                    </div> 
                </div>    
                </div>
                <div class="product-card__footer">
                    <div class="input-group">
                    <a class="btn btn-creative w-50 wp-scale" onclick="link_wa('https://api.whatsapp.com/send?phone=%2B38763044884&amp;text=Pozdrav,%20zanima%20me%20cijena%20za%20sljedeći%20artikal:%20https://autotarget.ba/trazi.php?artikal=693173&amp;marka=&amp;tip=&amp;nazivdijela=&amp;katbroj=&amp;str=1', '693173')" style="background-color:#25D366!important;color:white; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg> 
                        <span style="font-size: 13px;"> Whatsapp</span>
                    </a>
                    <a class="btn btn-creative w-50 viber-scale" onclick="link_vib('viber://chat?number=%2B38763044884', '693173')" style="background-color:#665CAC;color:white; border-top-right-radius: 5px; border-bottom-right-radius: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path d="M444 49.9C431.3 38.2 379.9.9 265.3.4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9.4-85.7.4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9.4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9.6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4.7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5.9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9.1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7.5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1.8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/>
                        </svg>
                        <span style="font-size: 13px;"> Viber</span>
                    </a>
                    </div>
                    <div class="input-group">
                        <a class="btn btn-creative btn-warning w-100 poziv-scale" onclick="link_tel('tel:%2B38763044884', '693173')" style="margin-top:10px; color: white; border-radius: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                            </svg>
                            Pozovi nas
                        </a>
                    </div> 
                </div>
            </div>
        </div>
     </div>
HTML;
} ?>