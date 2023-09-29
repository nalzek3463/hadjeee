

<?php include 'header.php'; 


?>


<main>
    <div class="site__body">
        <div class="block-finder block">
            <div class="block-finder__image" style="background-image: url('images/banners/Naslovni_banner1.png');"></div>
            <div class="block-finder__body container container--max--xl">
                <div style="justify-items: center; display: inline-block; padding-bottom: 20px;">
                    <p style="font-size: 40px;font-family: 'Anton', sans-serif; letter-spacing: 1px;">Pretražite našu bazu <strong style="font-weight: 500; color: #fbaa00; font-size: 50px;">AUTODIJELOVA</strong><br><p style="font-size: 30px; font-family: 'Anton', sans-serif; letter-spacing: 1px;">Više od 200.000 dijelova na stanju.</p></p>
                </div>
                <form class="block-finder__form" action="webshop.php" method="GET" id="filter-form">
                    <div class="block-finder__form-control block-finder__form-control--select">
                        <select name="naziv_artikla" aria-label="Naziv artikla"  id="naziv_artikla">
                            <option value="none">Odaberi naziv artikla</option>
                            <?php include("listaNaziviArtikala.php"); ?>
                        </select>
                    </div>
                    <div class="block-finder__form-control block-finder__form-control--select">
                        <select id="marka" name="marka" aria-label="Vehicle Make"  onchange="uraditip(this.value, 'tip')" disabled>
                            <option value="none">Odaberi Marku</option>
                            <?php include("listaMarka.php"); ?>
                        </select>
                    </div>
                    <div class="block-finder__form-control block-finder__form-control--select">
                        <select id="tip" name="tip" aria-label="Vehicle Model" disabled>
                            <option value="none">Odaberi Model</option>
                            <?php include("listaModel.php");?>
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
                        <h2 class="section-header__title">Novi aritkli - <i style="color: grey; font-weight: 200;"> Pošaljite upit!</i></h2>
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
                        <?php include("fetch_zadnjidio.php"); ?>
                    </div>
                </div>
            </div>
                <div class="block-space block-space--layout--divider-nl"></div>
                <div class="block block-sale">
                <div class="block-sale__content">
                    <div class="block-sale__header">
                        <div class="block-sale__title">Automobili u dolasku</div>
                        <div class="block-sale__subtitle">Pošaljite upit za dijelove!</div>
                        <div class="block-sale__controls">
                            <div class="arrow block-sale__arrow block-sale__arrow--prev arrow--prev">
                                <button class="arrow__button" type="button"><svg width="7" height="11">
                                        <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                    </svg>
                                </button>
                            </div>
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
                                    <?php include("fetch_auta.php"); ?>
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
                <?php include("fetch_blog.php"); ?>
                <div class="block-space block-space--layout--before-footer"></div>
        </div>
            <!-- site__body / end -->
</main>

<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

function uraditip(marka, elementId) {
        idMarke = marka.split('|')[0];
        // Sada možete napraviti AJAX poziv kako biste dohvatili modele vozila za tu marku
        // Primjer:
        $.ajax({
            url: 'listaModel.php', // Stvorite PHP skriptu koja će dohvatiti modele za idMarke
            type: 'GET',
            data: { idMarke: idMarke },
            success: function(response) {
                // Ovdje možete ažurirati opcije za odabir modela u HTML-u
                $("#" + elementId).html(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }


$(document).ready(function() {
        // Handler za submit forme za filtriranje
        $("#filter-form").submit(function(event) {
            event.preventDefault();
            var kataloskiBroj = $("#kataloski_broj").val();
            var nazivArtikla = $("#naziv_artikla").val();
            var marka = $("#marka").val();
            var model = $("#tip").val();

            // Dodajte kodiraniModel u URL za pretragu
            window.location.href = "webshop.php?kataloski_broj=" + kataloskiBroj + "&naziv_artikla=" + nazivArtikla + "&marka=" + marka + "&tip=" + model;


        });
    
        // Handler za resetiranje filtera
        $("#reset-filter").click(function() {
            // Preusmjerite na početnu stranicu bez filtera
            window.location.href = "webshop.php";
        });
    });

    // Čekajte da se dokument učita
$(document).ready(function() {
    // Dodajte event listener za prijevoz tipke F5 (keyCode 116)
    $(document).keydown(function(e) {
        if (e.keyCode == 116) {
            // Osvježite stranicu bez filtera
            window.location.href = "webshop.php";
        }
    });
});
</script>