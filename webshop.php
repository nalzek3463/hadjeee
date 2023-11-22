<?php
include("./db_conn.php");
include("./includes/filterPaginacijaQuery.php")
?>

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
</head>
<?php include("./includes/header.php");?>
<body>

    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--divider-nl"></div>
        <div class="block-split block-split--has-sidebar">
            <div class="container">
                <div class="block-split__row row no-gutters">
                    <div class="block-split__item block-split__item-sidebar">
                        <div class="card widget widget-categories" style="position: sticky; top: 20px; z-index: 100;">
                            <div class="sidebar__body">
                                <div class="sidebar__content">
                                    <div class="widget widget-filters widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                                        <div class="card widget widget-categories" style="position: sticky!important; top: 20px!important;">
                                            <div class="widget__header">
                                                <h4>Filter pretraga</h4>
                                            </div>
                                            <div style="width: 85%; margin-left: 20px;">
                                                <form action="#" method="GET" id="filter-form">
                                                    <label for="kataloski_broj">Kataloški broj dijela:</label>
                                                    <input class="form-control" type="text" placeholder="Upiši kataloški broj" name="kataloski_broj" id="kataloski_broj"><br>

                                                    <label for="naziv_artikla">Naziv dijela:</label>
                                                    <input class="form-control" type="text" placeholder="Upiši naziv artikla" name="naziv_artikla" id="naziv_artikla" list="listadio"><br>
                                                    <?php include("./includes/lista/listaDio.php"); ?>

                                                    <div class="form-group">
                                                        <label for="manufacturer">Marka vozila:</label>
                                                        <select class="form-control form-control-select2" id="marka" name="marka" aria-label="Marka vozila" onchange="document.getElementById('tipgrupa').style.display = '';uraditip(this.value, 'tip')">
                                                            <option value="#">Odaberite marku</option>
                                                            <?php include("./includes/lista/listaMarka.php"); ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group" id="tipgrupa" style="display: none;">
                                                        <label for="model">Model i godina vozila:</label>
                                                        <select class="form-control form-control-select2" id="tip" name="tip" aria-label="Tip/Model vozila">
                                                            <option value="#">Odaberite model</option>
                                                            <?php include("./includes/lista/listaModel.php"); ?>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-filter">Pretraži</button>
                                                    <button type="button" class="btn btn-secondary btn-lg btn-block" id="reset-filter">Resetiraj filter</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-split__item block-split__item-content col-auto">
                        <div class="block">
                            <div class="products-view">
                                <div class="products-view__list products-list products-list--grid--3" data-layout="grid" data-with-features="true">
                                    <div class="products-list__content">
                                        <?php include("./includes/fetch/fetch_proizvodi.php"); ?>
                                    </div>
                                </div>

                                <div class="products-view__pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <?php
                                            $brojStranica = ceil($totalProizvoda / $proizvodaPoStranici);
                                            $brojStranicaZaPrikaz = 10;

                                            // Funkcija za generiranje raspona brojeva
                                            function generirajRaspon($pocetak, $kraj)
                                            {
                                                for ($i = $pocetak; $i <= $kraj; $i++) {
                                                    echo "<li class='page-item" . ($GLOBALS['trenutnaStranica'] == $i ? ' active' : '') . "'>";
                                                    echo "<a class='page-link' href='?page=$i'>$i</a>";
                                                    echo "</li>";
                                                }
                                            }

                                            // Ispravljeno generiranje paginacije
                                            if ($brojStranica <= $brojStranicaZaPrikaz) {
                                                generirajRaspon(1, $brojStranica);
                                            } else {
                                                $srediste = floor($brojStranicaZaPrikaz / 2);

                                                if ($trenutnaStranica <= $srediste) {
                                                    generirajRaspon(1, $brojStranicaZaPrikaz);
                                                } elseif ($trenutnaStranica >= ($brojStranica - $srediste)) {
                                                    generirajRaspon($brojStranica - $brojStranicaZaPrikaz + 1, $brojStranica);
                                                } else {
                                                    generirajRaspon($trenutnaStranica - $srediste, $trenutnaStranica + $srediste);
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </nav>
                                    <div class="products-view__pagination-legend">
                                        Prikazujem <?php echo min($proizvodaPoStranici * $trenutnaStranica, $totalProizvoda); ?> od ukupno <?php echo $totalProizvoda; ?> proizvoda
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
        </div>
    </div>
    <!-- site__body / end -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Definicija funkcije uraditip u globalnom opsegu
        function uraditip(marka, elementId) {
            idMarke = marka.split('|')[0];
            // Sada možete napraviti AJAX poziv kako biste dohvatili modele vozila za tu marku
            // Primjer:
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
</body>

<?php include("./includes/footer.php"); ?>

</html>