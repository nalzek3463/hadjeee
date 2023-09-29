<?php
include("header.php");
include("db_conn.php");

$proizvodaPoStranici = 30;
$trenutnaStranica = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($trenutnaStranica - 1) * $proizvodaPoStranici;

$filterKataloskiBroj = isset($_GET['kataloski_broj']) ? $_GET['kataloski_broj'] : '';
$filterNazivArtikla = isset($_GET['naziv_artikla']) ? $_GET['naziv_artikla'] : '';
$filterMarka = isset($_GET['marka']) ? $_GET['marka'] : '';
$filterModel = isset($_GET['tip']) ? $_GET['tip'] : '';

$sqlCount = "SELECT COUNT(*) as total FROM dijelovi2 WHERE 1";
if (!empty($filterKataloskiBroj)) {
    $sqlCount .= " AND katbroj = '$filterKataloskiBroj'";
} elseif (!empty($filterNazivArtikla)) {
    $sqlCount .= " AND dio LIKE '%$filterNazivArtikla%'";
} elseif (!empty($filterMarka)) {
    list($idMarke, $markaVozila) = explode('|', $filterMarka);
    $sqlCount .= " AND marka1 = '$markaVozila'";
} elseif (!empty($filterModel)) {
    list($modelID, $model) = explode('|', $filterModel);
    $sqlCount .= " AND tip1 = '$model'";
}

$resultCount = mysqli_query($conn, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$totalProizvoda = $rowCount['total'];

$sql = "SELECT * FROM dijelovi2 WHERE 1";
if (!empty($filterKataloskiBroj)) {
    $sql .= " AND katbroj = '$filterKataloskiBroj'";
} elseif (!empty($filterNazivArtikla)) {
    $sql .= " AND dio LIKE '%$filterNazivArtikla%'";
} elseif (!empty($filterMarka)) {
    list($idMarke, $markaVozila) = explode('|', $filterMarka);
    $sql .= " AND marka1 = '$markaVozila'";
} elseif (!empty($filterModel)) {
    list($modelID, $model) = explode('|', $filterModel);
    $sql .= " AND tip1 = '$model'";
}

$sql .= " ORDER BY id ASC LIMIT $proizvodaPoStranici OFFSET $offset";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>

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
                                                <?php include("listaDio.php"); ?>

                                                <div class="form-group">
                                                    <label for="manufacturer">Marka vozila:</label>
                                                    <select class="form-control form-control-select2" id="marka" name="marka" aria-label="Marka vozila" onchange="document.getElementById('tipgrupa').style.display = '';uraditip(this.value, 'tip')">
                                                        <option value="#">Odaberite marku</option>
                                                        <?php include("listaMarka.php"); ?>
                                                    </select>
                                                </div>

                                                <div class="form-group" id="tipgrupa" style="display: none;">
                                                    <label for="model">Model i godina vozila:</label>
                                                    <select class="form-control form-control-select2" id="tip" name="tip" aria-label="Tip/Model vozila">
                                                        <option value="#">Odaberite model</option>
                                                        <?php include("listaModel.php"); ?>
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
                                    <?php include("fetch_proizvodi.php"); ?>
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

<?php include("footer.php"); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Definicija funkcije uraditip u globalnom opsegu
    function uraditip(marka, elementId) {
        idMarke = marka.split('|')[0];
        // Sada možete napraviti AJAX poziv kako biste dohvatili modele vozila za tu marku
        // Primjer:
        $.ajax({
            url: 'listaModel.php', // Stvorite PHP skriptu koja će dohvatiti modele za idMarke
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