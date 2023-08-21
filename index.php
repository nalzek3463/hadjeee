

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
        <div class="block block-products-carousel" data-layout="grid-4">
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