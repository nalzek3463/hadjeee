<?php
//connect database
$conn = mysqli_connect('localhost', 'nala', 'nala123', 'autotarget');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
//write query 
$sql = 'SELECT artikal, kb, kw, ccm, slika1 FROM dijelovi1 ORDER BY id DESC LIMIT 10';

//make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);



?>

<?php include 'header.php'; ?>


<main>
    <div class="site__body">
        <div class="block-finder block">
            <div class="decor block-finder__decor decor--type--bottom">
                <div class="decor__body">
                    <div class="decor__start"></div>
                    <div class="decor__end"></div>
                    <div class="decor__center"></div>
                </div>
            </div>
            <div class="block-finder__image" style="background-image: url('images/finder-1903x500.jpg');"></div>
            <div class="block-finder__body container container--max--xl">
                <div class="block-finder__title">Pronađite dio za Vaše vozilo</div>
                <div class="block-finder__subtitle">Na stanju više od 200.000 autodijelova</div>
                <form class="block-finder__form">
                    <div class="block-finder__form-control block-finder__form-control--select">
                        <select name="year" aria-label="Vehicle Year">
                            <option value="none">Odaberi godinu</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                        </select>
                    </div>
                    <div class="block-finder__form-control block-finder__form-control--select">
                        <select name="make" aria-label="Vehicle Make" disabled>
                            <option value="none">Odaberi Marku</option>
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Ferrari</option>
                            <option>Ford</option>
                            <option>KIA</option>
                            <option>Nissan</option>
                            <option>Tesla</option>
                            <option>Toyota</option>
                        </select>
                    </div>
                    <div class="block-finder__form-control block-finder__form-control--select">
                        <select name="model" aria-label="Vehicle Model" disabled>
                            <option value="none">Odaberi Model</option>
                            <option>Explorer</option>
                            <option>Focus S</option>
                            <option>Fusion SE</option>
                            <option>Mustang</option>
                        </select>
                    </div>
                    <div class="block-finder__form-control block-finder__form-control--select">
                        <select name="engine" aria-label="Vehicle Engine" disabled>
                            <option value="none">Odaberi Motor</option>
                            <option>Gas 1.6L 125 hp AT/L4</option>
                            <option>Diesel 2.5L 200 hp AT/L5</option>
                            <option>Diesel 3.0L 250 hp MT/L5</option>
                        </select>
                    </div>
                    <button class="block-finder__form-control block-finder__form-control--button" type="submit">Traži</button>
                </form>
            </div>
        </div>
        <div class="block-features block block-features--layout--top-strip">
            <div class="container">
                <ul class="block-features__list">
                    <li class="block-features__item">
                        <div class="block-features__item-icon prelaz-img">
                            <img style="height: 45px;" src="/AutoTarget/images/icon/fast-shipping.png" alt="Brza dostava">
                        </div>
                        <div class="block-features__item-info">
                            <div class="block-features__item-title">Brza dostava</div>
                            <div class="block-features__item-subtitle">Širom regiona</div>
                        </div>
                    </li>
                    <li class="block-features__item">
                        <div class="block-features__item-icon prelaz-img">
                            <img style="height: 45px;" src="/AutoTarget/images/icon/Support.png" alt="Podrška">
                        </div>
                        <div class="block-features__item-info">
                            <div class="block-features__item-title">Podrška korisnicima</div>
                            <div class="block-features__item-subtitle">Pozovite naše agente</div>
                        </div>
                    </li>
                    <li class="block-features__item">
                        <div class="block-features__item-icon prelaz-img">
                            <img style="height: 45px;" src="/AutoTarget/images/icon/save-20-small.png" alt="Ušteda">
                        </div>
                        <div class="block-features__item-info">
                            <div class="block-features__item-title">Ekonomičnost</div>
                            <div class="block-features__item-subtitle">Uštedite Vaš novac</div>
                        </div>
                    </li>
                    <li class="block-features__item">
                        <div class="block-features__item-icon prelaz-img">
                            <img style="height: 45px;" src="/AutoTarget/images/icon/guarantee-certificate.png" alt="Garancija">
                        </div>
                        <div class="block-features__item-info">
                            <div class="block-features__item-title">Garancija</div>
                            <div class="block-features__item-subtitle">Garancija na sve dijelove</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="block-space block-space--layout--divider-nl"></div>
        <div class="block block-products-carousel" data-layout="grid-5">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__body">
                        <h2 class="section-header__title">Novi aritkli</h2>
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
                        <?php
                        foreach ($products as $product) {
                            $artikal = $product['artikal'];
                            $kataloskibroj = $product['kb'];
                            $slika = $product['slika1'];
                            $kw = $product['kw'];
                            $ccm = $product['ccm'];
                          
                                echo <<<HTML
                                    <div class="block-products-carousel__column">
                                    <div class="block-products-carousel__cell">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions-list">
                                                <button class="product-card__action product-card__action--quickview" type="button" aria-label="Add to wishlist">
                                                    <svg width="16" height="16">
                                                    <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="product-card__image">
                                                <div class="image image--type--product">
                                                    <a href="product-full.html" class="image__body">
                                                        <img class="image__tag" src="http://171.22.22.137/data/slike/$slika" alt="$artikal">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="input-group" style="display: block!important;">
                                                    <a href="product-full.html" style="font-weight: bold; color: black!important; display: flex; justify-content: center; align-items: center;"> $artikal </a>  
                                                    <p class="w-100" style="font-size: 14px; padding-top: 10px; padding-left: 20px; color: gray;">
                                                        <i class="fas fa-chevron-circle-right" style="color: #fbaa00!important;"></i> <b>KB:</b> $kataloskibroj
                                                    </p> 
                                                    <p class="w-100" style="font-size: 14px; padding-left: 20px; color: gray;">
                                                        <i class="fas fa-chevron-circle-right" style="color: #fbaa00!important;"></i> <b>KW:</b> $kw 
                                                    </p>
                                                    <p class="w-100" style="font-size: 14px; padding-left: 20px; color: gray;">
                                                        <i class="fas fa-chevron-circle-right" style="color: #fbaa00!important;"></i> <b>CCM:</b> $ccm
                                                    </p>
                                                    <p class="w-100" style="font-size: 14px; padding-left: 20px; color: gray;">
                                                        <i class="fas fa-chevron-circle-right" style="color: #fbaa00!important;"></i><b> Gorivo:</b> Dizel
                                                    </p>
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
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
                        }
                        ?>
                    </div>
                </div>

                <div class="block-space block-space--layout--divider-nl"></div>
                <div class="block block-sale">
                    <div class="block-sale__content">
                        <div class="block-sale__header">
                            <div class="block-sale__title">Vozila u dolasku</div>
                            <div class="block-sale__subtitle">Pošaljite upit za dio po vozilima!</div>
                            <div class="block-sale__controls">
                                <div class="arrow block-sale__arrow block-sale__arrow--prev arrow--prev">
                                    <button class="arrow__button" type="button"><svg width="7" height="11">
                                            <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="block-sale__link"><a href=""></a></div>
                                <div class="arrow block-sale__arrow block-sale__arrow--next arrow--next">
                                    <button class="arrow__button" type="button"><svg width="7" height="11">
                                            <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="decor block-sale__header-decor decor--type--center">
                                    <div class="decor__body">
                                        <div class="decor__start"></div>
                                        <div class="decor__end"></div>
                                        <div class="decor__center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-sale__body">
                            <div class="decor block-sale__body-decor decor--type--bottom">
                                <div class="decor__body">
                                    <div class="decor__start"></div>
                                    <div class="decor__end"></div>
                                    <div class="decor__center"></div>
                                </div>
                            </div>
                            <div class="block-sale__image" style="background-image: url('images/sale-1903x640.jpg');"></div>
                            <div class="container">
                                <div class="block-sale__carousel">
                                    <div class="owl-carousel">       
                                        <div class="block-products-carousel__column">
                                        <div class="block-products-carousel__cell">
                                            <div class="product-card product-card--layout--grid">
                                                <div class="product-card__actions-list">
                                                    <button class="product-card__action product-card__action--quickview" type="button" aria-label="Add to wishlist">
                                                        <svg width="16" height="16">
                                                        <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="product-card__image">
                                                    <div class="image image--type--product">
                                                        <a href="product-full.html" class="image__body">
                                                            <img class="image__tag" src="http://171.22.22.137/data/slike/$slika" alt="$artikal">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-card__info">
                                                    <div class="product-card__meta"><span class="product-card__meta-title">KB:</span> $kataloškibroj</div>
                                                    <div class="product-card__name">
                                                        <div>
                                                            <a href="product-full.html"> $artikal </a>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-lg"></div>
                <div class="block block-zone">
                    <div class="container">
                        <div class="block-zone__body">
                            <div class="block-zone__card category-card category-card--layout--overlay">
                                <div class="category-card__body">
                                    <div class="category-card__overlay-image">
                                        <img srcset="images/categories/category-overlay-1-mobile.jpg 530w, images/categories/category-overlay-1.jpg 305w" src="images/categories/category-overlay-1.jpg" sizes="(max-width: 575px) 530px, 305px" alt="">
                                    </div>
                                    <div class="category-card__overlay-image category-card__overlay-image--blur">
                                        <img srcset="images/categories/category-overlay-1-mobile.jpg 530w, images/categories/category-overlay-1.jpg 305w" src="images/categories/category-overlay-1.jpg" sizes="(max-width: 575px) 530px, 305px" alt="">
                                    </div>
                                    <div class="category-card__content">
                                        <div class="category-card__info">
                                            <div class="category-card__name">
                                                <a href="category-4-columns-sidebar.html">Wheels & Tires</a>
                                            </div>
                                            <ul class="category-card__children">
                                                <li><a href="category-4-columns-sidebar.html">Wheel Covers</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Brake Kits</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Tire Chains</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Wheel disks</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Tires</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Sensors</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Accessories</a></li>
                                            </ul>
                                            <div class="category-card__actions">
                                                <a href="shop-grid-4-columns-sidebar.html" class="btn btn-primary btn-sm">Shop All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__widget">
                                <div class="block-zone__widget-header">
                                    <div class="block-zone__tabs">
                                        <button class="block-zone__tabs-button block-zone__tabs-button--active" type="button">Featured</button>
                                        <button class="block-zone__tabs-button" type="button">Bestsellers</button>
                                        <button class="block-zone__tabs-button" type="button">Popular</button>
                                    </div>
                                    <div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev">
                                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="arrow block-zone__arrow block-zone__arrow--next arrow--next">
                                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                                <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-zone__widget-body">
                                    <div class="block-zone__carousel">
                                        <div class="block-zone__carousel-loader"></div>
                                        <div class="owl-carousel">
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-1-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 140-10440-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <div class="product-card__badges">
                                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                                    <div class="tag-badge tag-badge--new">new</div>
                                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                                </div>
                                                                <a href="product-full.html">Brandix Spark Plug Kit ASR-400</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">4 on 3 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$19.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-2-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-23743-C</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Brandix Brake Kit BDX-750Z370-S</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">5 on 22 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$224.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-3-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 009-50078-Z</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <div class="product-card__badges">
                                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                                </div>
                                                                <a href="product-full.html">Left Headlight Of Brandix Z54</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 14 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--new">$349.00</div>
                                                            <div class="product-card__price product-card__price--old">$415.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-4-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> A43-44328-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <div class="product-card__badges">
                                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                                </div>
                                                                <a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">4 on 26 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$589.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-5-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 729-51203-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Twin Exhaust Pipe From Brandix Z54</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">4 on 9 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$749.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-6-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-49386-C</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Motor Oil Level 5</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">5 on 2 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$23.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-7-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 753-38573-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Brandix Engine Block Z4</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">0 on 0 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$452.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-8-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Brandix Clutch Discs Z175</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 7 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$345.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-sm"></div>
                <div class="block block-zone">
                    <div class="container">
                        <div class="block-zone__body">
                            <div class="block-zone__card category-card category-card--layout--overlay">
                                <div class="category-card__body">
                                    <div class="category-card__overlay-image">
                                        <img srcset="images/categories/category-overlay-2-mobile.jpg 530w, images/categories/category-overlay-2.jpg 305w" src="images/categories/category-overlay-2.jpg" sizes="(max-width: 575px) 530px, 305px" alt="">
                                    </div>
                                    <div class="category-card__overlay-image category-card__overlay-image--blur">
                                        <img srcset="images/categories/category-overlay-2-mobile.jpg 530w, images/categories/category-overlay-2.jpg 305w" src="images/categories/category-overlay-2.jpg" sizes="(max-width: 575px) 530px, 305px" alt="">
                                    </div>
                                    <div class="category-card__content">
                                        <div class="category-card__info">
                                            <div class="category-card__name">
                                                <a href="category-4-columns-sidebar.html">Interior Parts</a>
                                            </div>
                                            <ul class="category-card__children">
                                                <li><a href="category-4-columns-sidebar.html">Dashboards</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Seat Covers</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Floor Mats</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Sun Shades</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Visors</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Car Covers</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Accessories</a></li>
                                            </ul>
                                            <div class="category-card__actions">
                                                <a href="shop-grid-4-columns-sidebar.html" class="btn btn-primary btn-sm">Shop All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__widget">
                                <div class="block-zone__widget-header">
                                    <div class="block-zone__tabs">
                                        <button class="block-zone__tabs-button block-zone__tabs-button--active" type="button">Featured</button>
                                        <button class="block-zone__tabs-button" type="button">Bestsellers</button>
                                        <button class="block-zone__tabs-button" type="button">Popular</button>
                                    </div>
                                    <div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev">
                                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="arrow block-zone__arrow block-zone__arrow--next arrow--next">
                                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                                <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-zone__widget-body">
                                    <div class="block-zone__carousel">
                                        <div class="block-zone__carousel-loader"></div>
                                        <div class="owl-carousel">
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-1-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 140-10440-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <div class="product-card__badges">
                                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                                    <div class="tag-badge tag-badge--new">new</div>
                                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                                </div>
                                                                <a href="product-full.html">Brandix Spark Plug Kit ASR-400</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">4 on 3 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$19.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-2-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-23743-C</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Brandix Brake Kit BDX-750Z370-S</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">5 on 22 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$224.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-3-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 009-50078-Z</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <div class="product-card__badges">
                                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                                </div>
                                                                <a href="product-full.html">Left Headlight Of Brandix Z54</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 14 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--new">$349.00</div>
                                                            <div class="product-card__price product-card__price--old">$415.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-4-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> A43-44328-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <div class="product-card__badges">
                                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                                </div>
                                                                <a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">4 on 26 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$589.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-5-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 729-51203-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Twin Exhaust Pipe From Brandix Z54</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">4 on 9 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$749.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-6-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-49386-C</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Motor Oil Level 5</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">5 on 2 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$23.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-7-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 753-38573-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Brandix Engine Block Z4</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">0 on 0 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$452.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-8-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Brandix Clutch Discs Z175</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 7 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$345.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-sm"></div>
                <div class="block block-zone">
                    <div class="container">
                        <div class="block-zone__body">
                            <div class="block-zone__card category-card category-card--layout--overlay">
                                <div class="category-card__body">
                                    <div class="category-card__overlay-image">
                                        <img srcset="images/categories/category-overlay-3-mobile.jpg 530w, images/categories/category-overlay-3.jpg 305w" src="images/categories/category-overlay-3.jpg" sizes="(max-width: 575px) 530px, 305px" alt="">
                                    </div>
                                    <div class="category-card__overlay-image category-card__overlay-image--blur">
                                        <img srcset="images/categories/category-overlay-3-mobile.jpg 530w, images/categories/category-overlay-3.jpg 305w" src="images/categories/category-overlay-3.jpg" sizes="(max-width: 575px) 530px, 305px" alt="">
                                    </div>
                                    <div class="category-card__content">
                                        <div class="category-card__info">
                                            <div class="category-card__name">
                                                <a href="category-4-columns-sidebar.html">Engine & Drivetrain</a>
                                            </div>
                                            <ul class="category-card__children">
                                                <li><a href="category-4-columns-sidebar.html">Timing Belts</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Spark Plugs</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Oil Pans</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Engine Gaskets</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Oil Filters</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Engine Mounts</a></li>
                                                <li><a href="category-4-columns-sidebar.html">Accessories</a></li>
                                            </ul>
                                            <div class="category-card__actions">
                                                <a href="shop-grid-4-columns-sidebar.html" class="btn btn-primary btn-sm">Shop All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__widget">
                                <div class="block-zone__widget-header">
                                    <div class="block-zone__tabs">
                                        <button class="block-zone__tabs-button block-zone__tabs-button--active" type="button">Featured</button>
                                        <button class="block-zone__tabs-button" type="button">Bestsellers</button>
                                        <button class="block-zone__tabs-button" type="button">Popular</button>
                                    </div>
                                    <div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev">
                                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="arrow block-zone__arrow block-zone__arrow--next arrow--next">
                                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                                <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-zone__widget-body">
                                    <div class="block-zone__carousel">
                                        <div class="block-zone__carousel-loader"></div>
                                        <div class="owl-carousel">
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-1-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 140-10440-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <div class="product-card__badges">
                                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                                    <div class="tag-badge tag-badge--new">new</div>
                                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                                </div>
                                                                <a href="product-full.html">Brandix Spark Plug Kit ASR-400</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">4 on 3 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$19.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-2-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-23743-C</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Brandix Brake Kit BDX-750Z370-S</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">5 on 22 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$224.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-3-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 009-50078-Z</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <div class="product-card__badges">
                                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                                </div>
                                                                <a href="product-full.html">Left Headlight Of Brandix Z54</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 14 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--new">$349.00</div>
                                                            <div class="product-card__price product-card__price--old">$415.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-4-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> A43-44328-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <div class="product-card__badges">
                                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                                </div>
                                                                <a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">4 on 26 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$589.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-5-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 729-51203-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Twin Exhaust Pipe From Brandix Z54</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">4 on 9 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$749.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-6-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-49386-C</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Motor Oil Level 5</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">5 on 2 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$23.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-7-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 753-38573-B</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Brandix Engine Block Z4</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">0 on 0 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$452.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-zone__carousel-item">
                                                <div class="product-card">
                                                    <div class="product-card__actions-list">
                                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                                            <svg width="16" height="16">
                                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                                            <svg width="16" height="16">
                                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                                            <svg width="16" height="16">
                                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="product-full.html" class="image__body">
                                                                <img class="image__tag" src="images/products/product-8-245x245.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z</div>
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="product-full.html">Brandix Clutch Discs Z175</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating">
                                                            <div class="rating product-card__rating-stars">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-card__rating-label">3 on 7 reviews</div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div class="product-card__price product-card__price--current">$345.00</div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2" />
                                                                <circle cx="15" cy="17" r="2" />
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-nl"></div>
                <div class="block-banners block">
                    <div class="container">
                        <div class="block-banners__list">
                            <a href="" class="block-banners__item block-banners__item--style--one">
                                <span class="block-banners__item-image"><img src="images/banners/banner1.jpg" alt=""></span>
                                <span class="block-banners__item-image block-banners__item-image--blur"><img src="images/banners/banner1.jpg" alt=""></span>
                                <span class="block-banners__item-title">Motor Oils</span>
                                <span class="block-banners__item-details">
                                    Synthetic motor oil with free shipping<br>
                                    Friction free life guaranteed
                                </span>
                                <span class="block-banners__item-button btn btn-primary btn-sm">
                                    Shop Now
                                </span>
                            </a>
                            <a href="" class="block-banners__item block-banners__item--style--two">
                                <span class="block-banners__item-image"><img src="images/banners/banner2.jpg" alt=""></span>
                                <span class="block-banners__item-image block-banners__item-image--blur"><img src="images/banners/banner2.jpg" alt=""></span>
                                <span class="block-banners__item-title">Save up to $40</span>
                                <span class="block-banners__item-details">
                                    Luxurious interior part for real aesthetes<br>
                                    Leather, fabric, ivory and more.
                                </span>
                                <span class="block-banners__item-button btn btn-primary btn-sm">
                                    Shop Now
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-nl"></div>
                <div class="block block-posts-carousel block-posts-carousel--layout--grid" data-layout="grid">
                    <div class="container">
                        <div class="section-header">
                            <div class="section-header__body">
                                <h2 class="section-header__title">Latest News</h2>
                                <div class="section-header__spring"></div>
                                <ul class="section-header__links">
                                    <li class="section-header__links-item">
                                        <a href="" class="section-header__links-link">Special Offers</a>
                                    </li>
                                    <li class="section-header__links-item">
                                        <a href="" class="section-header__links-link">New Arrivals</a>
                                    </li>
                                    <li class="section-header__links-item">
                                        <a href="" class="section-header__links-link">Reviews</a>
                                    </li>
                                </ul>
                                <div class="section-header__arrows">
                                    <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                                <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="section-header__divider"></div>
                            </div>
                        </div>
                        <div class="block-posts-carousel__carousel">
                            <div class="owl-carousel">
                                <div class="block-posts-carousel__item">
                                    <div class="post-card">
                                        <div class="post-card__image">
                                            <a href="post-full-width.html">
                                                <img src="images/posts/post-1-730x485.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-card__content">
                                            <div class="post-card__category">
                                                <a href="blog-classic-right-sidebar.html">Special Offers</a>
                                            </div>
                                            <div class="post-card__title">
                                                <h2><a href="post-full-width.html">Philosophy That Addresses Topics Such As Goodness</a></h2>
                                            </div>
                                            <div class="post-card__date">
                                                By <a href="">Jessica Moore</a> on October 19, 2019
                                            </div>
                                            <div class="post-card__excerpt">
                                                <div class="typography">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                                                    nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                                                    Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate.
                                                </div>
                                            </div>
                                            <div class="post-card__more">
                                                <a href="post-full-width.html" class="btn btn-secondary btn-sm">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-posts-carousel__item">
                                    <div class="post-card">
                                        <div class="post-card__image">
                                            <a href="post-full-width.html">
                                                <img src="images/posts/post-2-730x485.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-card__content">
                                            <div class="post-card__category">
                                                <a href="blog-classic-right-sidebar.html">Latest News</a>
                                            </div>
                                            <div class="post-card__title">
                                                <h2><a href="post-full-width.html">Logic Is The Study Of Reasoning And Argument Part 2</a></h2>
                                            </div>
                                            <div class="post-card__date">
                                                By <a href="">Jessica Moore</a> on September 5, 2019
                                            </div>
                                            <div class="post-card__excerpt">
                                                <div class="typography">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                                                    nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                                                    Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate.
                                                </div>
                                            </div>
                                            <div class="post-card__more">
                                                <a href="post-full-width.html" class="btn btn-secondary btn-sm">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-posts-carousel__item">
                                    <div class="post-card">
                                        <div class="post-card__image">
                                            <a href="post-full-width.html">
                                                <img src="images/posts/post-3-730x485.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-card__content">
                                            <div class="post-card__category">
                                                <a href="blog-classic-right-sidebar.html">New Arrivals</a>
                                            </div>
                                            <div class="post-card__title">
                                                <h2><a href="post-full-width.html">Some Philosophers Specialize In One Or More Historical Periods</a></h2>
                                            </div>
                                            <div class="post-card__date">
                                                By <a href="">Jessica Moore</a> on August 12, 2019
                                            </div>
                                            <div class="post-card__excerpt">
                                                <div class="typography">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                                                    nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                                                    Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate.
                                                </div>
                                            </div>
                                            <div class="post-card__more">
                                                <a href="post-full-width.html" class="btn btn-secondary btn-sm">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-posts-carousel__item">
                                    <div class="post-card">
                                        <div class="post-card__image">
                                            <a href="post-full-width.html">
                                                <img src="images/posts/post-4-730x485.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-card__content">
                                            <div class="post-card__category">
                                                <a href="blog-classic-right-sidebar.html">Special Offers</a>
                                            </div>
                                            <div class="post-card__title">
                                                <h2><a href="post-full-width.html">A Variety Of Other Academic And Non-Academic Approaches Have Been Explored</a></h2>
                                            </div>
                                            <div class="post-card__date">
                                                By <a href="">Jessica Moore</a> on Jule 30, 2019
                                            </div>
                                            <div class="post-card__excerpt">
                                                <div class="typography">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                                                    nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                                                    Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate.
                                                </div>
                                            </div>
                                            <div class="post-card__more">
                                                <a href="post-full-width.html" class="btn btn-secondary btn-sm">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-posts-carousel__item">
                                    <div class="post-card">
                                        <div class="post-card__image">
                                            <a href="post-full-width.html">
                                                <img src="images/posts/post-5-730x485.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-card__content">
                                            <div class="post-card__category">
                                                <a href="blog-classic-right-sidebar.html">New Arrivals</a>
                                            </div>
                                            <div class="post-card__title">
                                                <h2><a href="post-full-width.html">Germany Was The First Country To Professionalize Philosophy</a></h2>
                                            </div>
                                            <div class="post-card__date">
                                                By <a href="">Jessica Moore</a> on June 12, 2019
                                            </div>
                                            <div class="post-card__excerpt">
                                                <div class="typography">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                                                    nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                                                    Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate.
                                                </div>
                                            </div>
                                            <div class="post-card__more">
                                                <a href="post-full-width.html" class="btn btn-secondary btn-sm">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-posts-carousel__item">
                                    <div class="post-card">
                                        <div class="post-card__image">
                                            <a href="post-full-width.html">
                                                <img src="images/posts/post-6-730x485.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-card__content">
                                            <div class="post-card__category">
                                                <a href="blog-classic-right-sidebar.html">Special Offers</a>
                                            </div>
                                            <div class="post-card__title">
                                                <h2><a href="post-full-width.html">Logic Is The Study Of Reasoning And Argument Part 1</a></h2>
                                            </div>
                                            <div class="post-card__date">
                                                By <a href="">Jessica Moore</a> on May 21, 2019
                                            </div>
                                            <div class="post-card__excerpt">
                                                <div class="typography">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                                                    nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                                                    Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate.
                                                </div>
                                            </div>
                                            <div class="post-card__more">
                                                <a href="post-full-width.html" class="btn btn-secondary btn-sm">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
            <!-- site__body / end -->
</main>

<?php include 'footer.php'; ?>