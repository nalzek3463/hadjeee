<?php include('header.php');

// Spajanje na MySQL bazu podataka
$servername = "localhost";
$username = "nala";
$password = "nala123";
$dbname = "autotarget";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

$id = $_GET['id'];

//write query 
$sql = "SELECT id, artikal, marka, tip, kb, kw, ccm, slika1, slika2, slika3 FROM dijelovi1 WHERE id= $id";

//make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$artikals = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);


foreach ($artikals as $artikal) {
    $id = $artikal['id'];
    $marka = $artikal['marka'];
    $tip = $artikal['tip'];
    $proizvod = $artikal['artikal'];
    $kataloskibroj = $artikal['kb'];
    $slika1 = $artikal['slika1'];
    $slika2 = $artikal['slika2'];
    $slika3 = $artikal['slika3'];
    $kw = $artikal['kw'];
    $ccm = $artikal['ccm'];

    echo <<<HTML


 <!-- site__body -->
 <div class="site__body">
     <div class="block-space block-space--layout--before-footer"></div>
     <div class="block-split block-split--has-sidebar">
         <div class="container">
             <div class="block-split__row row no-gutters">
                 <div class="block-split__item block-split__item-sidebar col-auto">
                     <div class="card widget widget-categories">
                         <div class="widget__header">
                             <h4>Filter pretraga</h4>
                         </div>
                         <div style="width: 85%; margin-left: 20px;">
                             <form action="" method="GET">
                                 <label for="part_name">Kataloški broj:</label>
                                 <input class="form-control" type="text" placeholder="Upiši kataloški broj" name="kataloski_broj" id="kataloski_broj"><br>

                                 <label for="manufacturer">Naziv artikla:</label>
                                 <input class="form-control" type="text" placeholder="Upiši naziv artikla" name="naziv_artikla" id="naziv_artikla"><br>

                                 <label for="manufacturer">Marka:</label>
                                 <select class="form-control">
                                    <option>Odaberi marku</option>
                                    <option>AUDI</option>
                                    <option>BMW</option>
                                    <option>VOLVO</option>
                                    <option>VW</option>
                                    <option>SKODA</option>
                                 </select><br><br>
                                 <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-filter">Pretraži</button>
                             </form>
                         </div>
                     </div>
                 </div>
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
                                      
                                         <a class="image image--type--product" href="http://171.22.22.137/data/slike/$slika1" target="_blank" data-width="" data-height="">
                                             <div class="image__body">
                                                 <img class="image__tag" src="http://171.22.22.137/data/slike/$slika1" alt="$proizvod">
                                             </div>
                                         </a>
                                      
                                         <a class="image image--type--product" href="http://171.22.22.137/data/slike/$slika2" target="_blank" data-width="" data-height="">
                                             <div class="image__body">
                                                 <img class="image__tag" src="http://171.22.22.137/data/slike/$slika2" alt="$proizvod">
                                             </div>
                                         </a>
                                       
                                         <a class="image image--type--product" href="http://171.22.22.137/data/slike/$slika3" target="_blank" data-width="" data-height="">
                                             <div class="image__body">
                                                 <img class="image__tag" src="http://171.22.22.137/data/slike/$slika3" alt="$proizvod">
                                             </div>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="product-gallery__thumbnails">
                                     <div class="owl-carousel">
                                         <div class="product-gallery__thumbnails-item image image--type--product">
                                             <div class="image__body">
                                                 <img class="image__tag" src="http://171.22.22.137/data/slike/$slika1" alt="$proizvod">
                                             </div>
                                         </div>
                                         <div class="product-gallery__thumbnails-item image image--type--product">
                                             <div class="image__body">
                                                 <img class="image__tag" src="http://171.22.22.137/data/slike/$slika2" alt="$proizvod">
                                             </div>
                                         </div>
                                         <div class="product-gallery__thumbnails-item image image--type--product">
                                             <div class="image__body">
                                                 <img class="image__tag" src="http://171.22.22.137/data/slike/$slika3" alt="$proizvod">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="product__header">
                                 <h1 class="product__title">$proizvod | $marka | $tip</h1>
                             </div>
                             <div class="product__info">
                                 <div class="product__info-card">
                                     <div class="product__info-body">
                                         <div class="product__prices-stock">
                                             <div class="product__prices">
                                                 <div class="product__price product__price--current">ID: $id</div>
                                             </div>
                                         </div>
                                         <div class="product__meta">
                                             <table>
                                                 <tr>
                                                     <th>Kataloški broj:</th>
                                                     <td>$kataloskibroj</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Artikal:</th>
                                                     <td>$proizvod</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Marka:</th>
                                                     <td>$marka</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Tip:</th>
                                                     <td>$tip</td>
                                                 </tr>
                                                 <tr>
                                                     <th>KW:</th>
                                                     <td>$kw</td>
                                                 </tr>
                                                 <tr>
                                                     <th>CCM:</th>
                                                     <td>$ccm</td>
                                                 </tr>
                                                 <tr>
                                                     <th>Gorivo:</th>
                                                     <td>Dizel</td>
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
                 </div>
             </div>
         </div>
     </div>
     
 </div>
 <!-- site__body / end -->

 HTML;
}
include('footer.php');
