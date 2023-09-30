<?php include('header.php');

include("db_conn.php");

$id_auta = $_GET['id_auta'];

//write query 
$sql = "SELECT * FROM auta WHERE id_auta= $id_auta";

//make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$cars = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);



foreach ($cars as $car) {
    $id_auta = $car['id_auta'];
    $marka = $car['marka'];
    $tip = $car['tip'];
    $model = $car['model'];
    $kod_motora = $car['kod_motora'];
    $zapremina = $car['zapremina'];
    $snaga = $car['snaga'];
    $gorivo = $car['gorivo'];
    $vrsta_mjenjaca = $car['vrsta_mjenjaca'];
    $kod_mjenjaca = $car['kod_mjenjaca'];
    $brzina = $car['brzina'];
    $pogon = $car['pogon'];
    $godina = $car['godina'];
    $eu_standard = $car['eu_standard'];
    $boja = $car['boja'];
    $slike = array(
        $car['slika1'],
        $car['slika2'],
        $car['slika3'],
        $car['slika4'],
        $car['slika5'],
        $car['slika6'],
        $car['slika7'],
        $car['slika8'],
        $car['slika9'],
        $car['slika10'],
    );

    echo <<<HTML


 <!-- site__body -->
 <div class="site__body">
     <div class="block-space block-space--layout--before-footer"></div>
     <div class="block-split">
         <div class="container">
             
                 <div class="block-split__item block-split__item-content col-auto">
                     <div class="product product--layout--sidebar">
                         <div class="product__body">
                             <div class="product__card product__card--one"></div>
                             <div class="product__card product__card--two"></div>
                             <div class="product-gallery product-gallery--layout--product-sidebar product__gallery" data-layout="product-sidebar">
                                 <div class="product-gallery__featured">
                                     <button type="button" class="product-gallery__zoom">
                                         <svg width="24" height="24">
                                             <path d="M15,18c-2,0-3.8-0.6-5.2-1.7c-1,1.3-2.1,2.8-3.5,4.6c-2.2,2.8-3.4,1.9-3.4,1.9s-0.6-0.3-1.1-0.7c-0.4-0.4-0.7-1-0.7-1s-0.9-1.2,1.9-3.3c1.8-1.4,3.3-2.5,4.6-3.5C6.6,12.8,6,11,6,9c0-5,4-9,9-9s9,4,9,9S20,18,15,18z M15,2c-3.9,0-7,3.1-7,7s3.1,7,7,7s7-3.1,7-7S18.9,2,15,2z M16,13h-2v-3h-3V8h3V5h2v3h3v2h-3V13z" />
                                         </svg>
                                     </button>
                                     <div class="owl-carousel">
HTML;
    foreach ($slike as $slika) {
        if (!empty($slika)) {
            echo <<<HTML
                                                    <a class="image image--type--product" href="$slika" target="_blank" data-width="" data-height="">
                                                        <div class="image__body">
                                                            <img class="image__tag" src="$slika" alt="$marka $tip">
                                                        </div>
                                                    </a>
HTML;
        }
    }
    echo <<<HTML

                                     </div>
                                 </div>
                                 <div class="product-gallery__thumbnails">
                                     <div class="owl-carousel">
HTML;
    foreach ($slike as $slika) {
        if (!empty($slika)) {
            echo <<<HTML
                                                <div class="product-gallery__thumbnails-item image image--type--product">
                                                    <div class="image__body">
                                                        <img class="image__tag" src="$slika" alt="$marka $tip">
                                                    </div>
                                                </div>
HTML;
        }
    }
    echo <<<HTML
                           
                                     </div>
                                 </div>
                             </div>
                             <div class="product__header">
                                 <h1 class="product__title" style="text-align: center; font-size: 45px;">$marka | $tip</h1>
                             </div>
                             <div class="product__info">
                                 <div class="product__info-card">
                                     <div class="product__info-body">
                                         <div class="product__prices-stock">
                                             <div class="product__prices">
                                                 <div class="product__price product__price--current">ID: $id_auta</div>
                                             </div>
                                         </div>
                                         <div class="product__meta">
                                             <table>
                                                 <tr>
                                                     <th>Model:</th>
                                                     <td>$model</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Godište:</th>
                                                     <td>$godina</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Kod motora:</th>
                                                     <td>$kod_motora</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Zapremina:</th>
                                                     <td>$zapremina</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Snaga:</th>
                                                     <td>$snaga</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Kod_mjenjaca:</th>
                                                     <td>$kod_mjenjaca</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Vrsta mjenjaca:</th>
                                                     <td>$vrsta_mjenjaca</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Brzina:</th>
                                                     <td>$brzina</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Pogon:</th>
                                                     <td>$pogon</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Eu standard:</th>
                                                     <td>$eu_standard</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Boja:</th>
                                                     <td>$boja</td>
                                                 </tr>
                                             </table>
                                         </div>
                                     </div>
                                     <div class="product__actions">
                                         <div class="product__actions-item product__actions-item--wishlist">
                                             <button class="btn btn-primary btn-lg btn-block" style="border-radius: 5px;">Dodaj u listu želja</button>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product__shop-features shop-features">
                                     <ul class="shop-features__list">
                                         <li class="shop-features__item">
                                             <div class="shop-features__item-icon">
                                                 <img style="height: 35px;" src="/AutoTarget/images/icon/fast-shipping.png" alt="Brza dostava">
                                             </div>
                                             <div class="shop-features__info">
                                                 <div class="shop-features__item-title">Brza dostava</div>
                                                 <div class="shop-features__item-subtitle">Širom regiona</div>
                                             </div>
                                         </li>
                                         <li class="shop-features__divider" role="presentation"></li>
                                         <li class="shop-features__item">
                                             <div class="shop-features__item-icon">
                                                 <img style="height: 35px; padding: 0px 15px;" src="/AutoTarget/images/icon/Support.png" alt="Podrška">
                                             </div>
                                             <div class="shop-features__info">
                                                 <div class="shop-features__item-title">Podrška korisnicima</div>
                                                 <div class="shop-features__item-subtitle">Pozovite naše agente</div>
                                             </div>
                                         </li>
                                         <li class="shop-features__divider" role="presentation"></li>
                                         <li class="shop-features__item">
                                             <div class="shop-features__item-icon">
                                                 <img style="height: 35px; padding: 0px 10px;" src="/AutoTarget/images/icon/save-20-small.png" alt="Ušteda">
                                             </div>
                                             <div class="shop-features__info">
                                                 <div class="shop-features__item-title">Ekonomičnost</div>
                                                 <div class="shop-features__item-subtitle">Uštedite Vaš novac</div>
                                             </div>
                                         </li>
                                         <li class="shop-features__divider" role="presentation"></li>
                                         <li class="shop-features__item">
                                             <div class="shop-features__item-icon">
                                                 <img style="height: 40px; padding: 0px 10px;" src="/AutoTarget/images/icon/guarantee-certificate.png" alt="Garancija">
                                             </div>
                                             <div class="shop-features__info">
                                                 <div class="shop-features__item-title">Garancija</div>
                                                 <div class="shop-features__item-subtitle">Garancija na sve dijelove</div>
                                             </div>
                                         </li>
                                         <li class="shop-features__divider" role="presentation"></li>
                                     </ul>
                                 </div>
                                 <div class="product__shop-features shop-features">
                                    <p style="margin-bottom: 5px; display: flex; justify-content: center; font-size: 30px; padding-top: 10px; animation: imageChange 1.5s infinite alternate;"><strong>Pošaljite upit</strong><img src="\AutoTarget\images\icon\curve-down-arrow.png" alt="Strelica" style="width: 30px; padding-top: 20px;"></p>
                                    <div class="btn-area d-flex flex-column gap-3 justify-content-between align-items-center" style="padding: 0px 10px 10px 10px;">
                                        <a href="viber://chat?number=%2B381616060061" class="btn btn-primary viber-scale" style="width: 100%;background-color: #665CAC;border-color: #665CAC;font-weight: bold; margin-bottom: 20px; border-radius: 5px; line-height: 25px!important;"><span class="fab fa-viber"></span> Viber</a>
                                        <a href="https://api.whatsapp.com/send?phone=%2B381616060061" class="btn btn-primary wp-scale" style="width: 100%;background-color: #25D366;border-color: #25D366;font-weight: bold; margin-bottom: 10px; border-radius: 5px; line-height: 25px!important;"><span class="fab fa-whatsapp"></span> Whatsapp</a>
                                        <a href="tel:+381616060061" class="btn btn-primary poziv-scale" style="margin-top: -10px;width: 100%;background-color: #ffc107;border-color: #ffc107;font-weight: bold; margin-top:10px; border-radius: 5px; line-height: 25px!important;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"></path>
                                            </svg>Pozovi nas
                                        </a>
                                    </div>
                                 </div>
                             </div>
                             <div class="product__tabs product-tabs product-tabs--layout--sidebar">
                                 <div class="product-tabs__content">
                                     <div class="product-tabs__pane" id="product-tab-specification">
                                         <div class="spec">
                                             <div class="spec__disclaimer">
                                                 Opis dijela ili neke osnove upute kako da nas kontaktiraju kako da nam kazu sta traze. Mozda dodati dugme da na klik salju link
                                                 proizvoda  na whatsapp ili viber.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="block-space block-space--layout--divider-nl"></div>
                     <div class="block block-products-carousel" data-layout="grid-5">
                         <div class="container">
                             <div class="section-header">
                                 <div class="section-header__body">
                                     <h2 class="section-header__title">Artikli koji odgovaraju automobilu - <i style="color: grey; font-weight: 200;"> Pošaljite upit!</i></h2>
                                     <div class="section-header__spring"></div>
                                     <div class="section-header__arrows">
                                         <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                                             <button class="arrow__button" type="button"><svg width="7" height="11">
                                                     <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                 </svg>
                                             </button>
                                         </div>
                                         <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                                             <button class="arrow__button" type="button"><svg width="7" height="11">
                                                     <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                 </svg>
                                             </button>
                                         </div>
                                     </div>
                                     <div class="section-header__divider"></div>
                                 </div>
                             </div>
                             <div class="block-products-carousel__carousel">
                                 <div class="block-products-carousel__carousel-loader"></div>
                                 <div class="owl-carousel">
 HTML;
    include("fetch_dio_po_autu.php");
    echo <<<HTML
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="block-space block-space--layout--before-footer"></div>
                 </div>
         </div>
     </div>
     
 </div>
 <!-- site__body / end -->

 HTML;
}
include('footer.php');
