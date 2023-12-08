
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Target Auto-Otpad</title>
    <link rel="icon" type="image/png" href="/AutoTarget/images/logo/kljuc.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blog_style.css">
    <link rel="stylesheet" href="css/style.header-spaceship-variant-one.css" media="(min-width: 1200px)">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- scripts -->

</head>

<body>
    <?php include("./includes/header.php"); ?>
    <main>
        <div class="site__body">
            <div class="block-finder block">
                <div class="block-finder__image" style="background-image: url('images/banners/Naslovni_banner1.png');"></div>
                <div class="block-finder__body container container--max--xl">
                    <div style="justify-items: center; display: inline-block; padding-bottom: 20px;">
                        <p style="font-size: 40px;font-family: 'Anton', sans-serif; letter-spacing: 1px;">Pretražite našu bazu <strong style="font-weight: 500; color: #fbaa00; font-size: 50px;">AUTODIJELOVA</strong><br>
                        <p style="font-size: 30px; font-family: 'Anton', sans-serif; letter-spacing: 1px;">Više od 200.000 dijelova na stanju.</p>
                        </p>
                    </div>
                    <form class="block-finder__form" action="webshop.php" method="GET" id="filter-form">
                        <div class="block-finder__form-control block-finder__form-control--select">
                            <select name="naziv_artikla" aria-label="Naziv artikla" id="naziv_artikla">
                                <option value="none">Odaberi naziv artikla</option>
                                <?php include("./includes/lista/listaNaziviArtikala.php"); ?>
                            </select>
                        </div>
                        <div class="block-finder__form-control block-finder__form-control--select">
                            <select id="marka" name="marka" aria-label="Vehicle Make" onchange="uraditip(this.value, 'tip')" disabled>
                                <option value="none">Odaberi Marku</option>
                                <?php include("./includes/lista/listaMarka.php"); ?>
                            </select>
                        </div>
                        <div class="block-finder__form-control block-finder__form-control--select">
                            <select id="tip" name="tip" aria-label="Vehicle Model" disabled>
                                <option value="none">Odaberi Model</option>
                                <?php include("./includes/lista/listaModel.php"); ?>
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
                            <?php include("./includes/fetch/fetch_zadnjidio.php"); ?>
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
                                </div>s
                            </div>
                            <div class="block-sale__image" style="background-image: url('images/backgroundtest.png');"></div>
                            <div class="container">
                                <div class="block-sale__carousel">
                                    <div class="owl-carousel">
                                        <?php include("./includes/fetch/fetch_auta.php"); ?>
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
                            <a href="https://www.instagram.com/auto.target/" class="block-banners__item block-banners__item--style--one">
                                <span class="block-banners__item-image"><img src="images/banners/instagrambanner.png" alt=""></span>
                                <span class="block-banners__item-image block-banners__item-image--blur"><img src="images/banners/instagrambanner.png" alt=""></span>
                                <span class="block-banners__item-title">Instagram</span>
                                <span class="block-banners__item-details">
                                    Spremni ste za vožnju?<br>
                                    Pratite nas u stopu na Instagramu!
                                </span>
                                <span class="block-banners__item-button btn btn-primary btn-sm">
                                    Pristup
                                </span>
                            </a>
                            <a href="https://www.facebook.com/autotarget.ba" class="block-banners__item block-banners__item--style--one">
                                <span class="block-banners__item-image"><img src="images/banners/facebookbanner.png" alt=""></span>
                                <span class="block-banners__item-image block-banners__item-image--blur"><img src="images/banners/facebookbanner.png" alt=""></span>
                                <span class="block-banners__item-title">Facebook</span>
                                <span class="block-banners__item-details">
                                    Istražite više s nama.<br>
                                    Pridružite nam se na Facebooku.
                                </span>
                                <span class="block-banners__item-button btn btn-primary btn-sm">
                                    Pristup
                                </span>
                            </a>
                            <a href="https://olx.ba/shops/AutoTarget/aktivni" class="block-banners__item block-banners__item--style--one">
                                <span class="block-banners__item-image"><img src="images/banners/olxbanner.png" alt=""></span>
                                <span class="block-banners__item-image block-banners__item-image--blur"><img src="images/banners/olxbanner.png" alt=""></span>
                                <span class="block-banners__item-title">OLX</span>
                                <span class="block-banners__item-details">
                                    Posjetite našu prodavnicu na OLX.ba<br>
                                </span>
                                <span class="block-banners__item-button btn btn-primary btn-sm">
                                    Pristup
                                </span>
                            </a>
                            <a href="https://www.njuskalo.hr/moje-njuskalo/poslovni/moji-oglasi/aktivni-oglasi" class="block-banners__item block-banners__item--style--one">
                                <span class="block-banners__item-image"><img src="images/banners/njuskalobanner.png" alt=""></span>
                                <span class="block-banners__item-image block-banners__item-image--blur"><img src="images/banners/njuskalobanner.png" alt=""></span>
                                <span class="block-banners__item-title">Njuškalo</span>
                                <span class="block-banners__item-details">
                                    Posjetite našu prodavnicu na NJUSKALO.hr<br>  
                                </span>
                                <span class="block-banners__item-button btn btn-primary btn-sm">
                                    Pristup
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-nl"></div>
                <?php include("./includes/fetch/fetch_blog.php"); ?>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
            <!-- site__body / end -->
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function uraditip(marka, elementId) {
            idMarke = marka.split('|')[0];
            // Dohvati modele vozila za tu marku
            $.ajax({
                url: './includes/lista/listaModel.php', // Stvorite PHP skriptu koja će dohvatiti modele za idMarke
                type: 'GET',
                data: {
                    idMarke: idMarke
                },
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
    <?php include("./includes/footer.php"); ?>
</body>

</html>