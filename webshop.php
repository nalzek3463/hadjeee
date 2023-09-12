<?php
include("header.php");
include("db_conn.php");


$proizvodaPoStranici = 30;
$trenutnaStranica = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($trenutnaStranica - 1) * $proizvodaPoStranici;

$filterKataloskiBroj = isset($_GET['kataloski_broj']) ? $_GET['kataloski_broj'] : '';
$filterNazivArtikla = isset($_GET['naziv_artikla']) ? $_GET['naziv_artikla'] : '';
$filterMarka = isset($_GET['marka']) ? $_GET['marka'] : '';

$sqlCount = "SELECT COUNT(*) as total FROM dijelovi1 WHERE 1";
if (!empty($filterKataloskiBroj)) {
    $sqlCount .= " AND kb = '$filterKataloskiBroj'";
}
if (!empty($filterNazivArtikla)) {
    $sqlCount .= " AND artikal LIKE '%$filterNazivArtikla%'";
}
if (!empty($filterMarka)) {
    $sqlCount .= " AND marka LIKE '%$filterMarka%'";
}

$resultCount = mysqli_query($conn, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$totalProizvoda = $rowCount['total'];

$sql = "SELECT id, artikal, marka, tip, kb, kw, ccm, slika1, slika2, slika3 FROM dijelovi1 WHERE 1";
if (!empty($filterKataloskiBroj)) {
    $sql .= " AND kb = '$filterKataloskiBroj'";
}
if (!empty($filterNazivArtikla)) {
    $sql .= " AND artikal LIKE '%$filterNazivArtikla%'";
}
if (!empty($filterMarka)) {
    list($idMarke, $markaVozila) = explode('-', $filterMarka);
    $sql .= " AND marka = '$markaVozila'";
}


$sql .= " ORDER BY id DESC LIMIT $proizvodaPoStranici OFFSET $offset";
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
                                        <div id="nekiDiv">Test:</div>
                                            <form action="pretraga.php" method="GET" id="filter-form">
                                                <label for="kataloski_broj">Kataloški broj:</label>
                                                <input class="form-control" type="text" placeholder="Upiši kataloški broj" name="kataloski_broj" id="kataloski_broj"><br>

                                                <label for="naziv_artikla">Naziv artikla:</label>
                                                <input class="form-control" type="text" placeholder="Upiši naziv artikla" name="naziv_artikla" id="naziv_artikla" list="listadio"><br>
                                               
                                                <div class="form-group">
                                                    <label for="manufacturer">Marka:</label>
                                                    <select class="form-control form-control-clicked" id="marka" name="marka" aria-label="Marka vozila" onchange="document.getElementById('tipgrupa').style.display = '';uraditip(this.value, 'tip')">
                                                    <option value="">Odaberite marku</option>
                                                    <?php include("marka_Vozila.php"); ?>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group" id="tipgrupa" style="display:none">
                                                    <label for="model">Tip:</label>
                                                    <select class="form-control" id="tip" name="tip" aria-label="Tip/Model vozila">
                                                        <option value="">Odaberite model</option>  
                                                        <?php include("get_modeli.php");?>              
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-filter">Pretraži</button>
                                                <button type="button" class="btn btn-secondary btn-lg btn-block" id="reset-filter">Resetiraj filter</button>
                                            </form>
                                        </div>
                                        <?php include("listadio.php"); ?>
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
                                <?php include("proizvodi_fetch.php");?>
                                </div>
                            </div>

                            <div class="products-view__pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <?php
                                        $brojStranica = ceil($totalProizvoda / $proizvodaPoStranici);
                                        for ($i = 1; $i <= $brojStranica; $i++) {
                                            echo "<li class='page-item" . ($trenutnaStranica == $i ? ' active' : '') . "'>";
                                            echo "<a class='page-link' href='?page=$i'>$i</a>";
                                            echo "</li>";
                                        }
                                        ?>
                                    </ul>
                                </nav>
                                <div class="products-view__pagination-legend">
                                    Prikazujem <?php echo $proizvodaPoStranici * $trenutnaStranica; ?> od ukupno <?php echo $totalProizvoda; ?> proizvoda
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

$(document).ready(function() {
    // Handler za submit forme za filtriranje
    $("#filter-form").submit(function(event) {
        event.preventDefault();
        var kataloskiBroj = $("#kataloski_broj").val();
        var nazivArtikla = $("#naziv_artikla").val();
        var marka = $("#marka").val();

        // Preusmjerite na istu stranicu s dodatnim GET parametrima za filtriranje
        window.location.href = "webshop.php?kataloski_broj=" + kataloskiBroj + "&naziv_artikla=" + nazivArtikla + "&marka=" + marka;
    });
    let idMarke;
    function uraditip(marka, elementId) {
    // Dohvatite idMarke iz odabrane opcije
    idMarke = marka.split('-')[0];
    // Sada možete napraviti AJAX poziv kako biste dohvatili modele vozila za tu marku
    // Primjer:
    console.log(idMarke);
    $.ajax({
        url: 'get_modeli.php', // Stvorite PHP skriptu koja će dohvatiti modele za idMarke
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




    // Handler za resetiranje filtera
    $("#reset-filter").click(function() {
        // Preusmjerite na početnu stranicu bez filtera
        window.location.href = "webshop.php";
    });
});
</script>



