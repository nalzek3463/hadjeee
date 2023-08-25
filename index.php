

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
                        <?php include("zadnjidio_fetch.php"); ?>
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
                                        <?php include("auta_fetch.php"); ?>
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
                <?php include("blog_fetch.php"); ?>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
            <!-- site__body / end -->
</main>

<?php include 'footer.php'; ?>