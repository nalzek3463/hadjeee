<?php
include("header.php");
include("db_conn.php");


$proizvodaPoStranici = 30;
$trenutnaStranica = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($trenutnaStranica - 1) * $proizvodaPoStranici;


$filterKataloskiBroj = isset($_GET['kataloski_broj']) ? $_GET['kataloski_broj'] : '';


$sqlCount = "SELECT COUNT(*) as total FROM dijelovi1";
if (!empty($filterKataloskiBroj)) {
    $sqlCount .= " WHERE kb = '$filterKataloskiBroj'";
}
$resultCount = mysqli_query($conn, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$totalProizvoda = $rowCount['total'];


$sql = "SELECT id, artikal, marka, tip, kb, kw, ccm, slika1, slika2, slika3 FROM dijelovi1";
if (!empty($filterKataloskiBroj)) {
    $sql .= " WHERE kb = '$filterKataloskiBroj'";
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
                                            <form action="pretraga.php" method="GET" id="filter-form">
                                                <label for="kataloski_broj">Kataloški broj:</label>
                                                <input class="form-control" type="text" placeholder="Upiši kataloški broj" name="kataloski_broj" id="kataloski_broj"><br>

                                                <label for="naziv_artikla">Naziv artikla:</label>
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
    // Handler za submit forme za filtriranje po kataloškom broju
    $("#filter-form").submit(function(event) {
        event.preventDefault();
        var kataloskiBroj = $("#kataloski_broj").val();
        // Preusmjerite na istu stranicu s dodatnim GET parametrom za filtriranje
        window.location.href = "webshop.php?kataloski_broj=" + kataloskiBroj;
    });

    // Handler za resetiranje filtera
    $("#reset-filter").click(function() {
        // Preusmjerite na početnu stranicu bez filtera
        window.location.href = "webshop.php";
    });

    // Handler za unos naziva artikla i prikaz predloženih rezultata
    $("#naziv_artikla").keyup(function() {
        var nazivArtikla = $(this).val();
        // Slanje AJAX zahteva za pretragu i prikaz rezultata
        $.ajax({
            url: "pretraga.php",
            method: "GET",
            data: { naziv: nazivArtikla },
            success: function(response) {
                $("#predlozi").html(response);
            }
        });
    });
});
</script>

