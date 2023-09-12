<?php
include("db_conn.php");

if (isset($_GET['naziv_artikla'])) {
    $nazivArtikla = $_GET['naziv_artikla'];
    // Dodajte SQL upit za dohvaćanje naziva artikala iz baze na temelju unosa korisnika
    $sql = "SELECT artikal FROM filter_nazivi WHERE artikal LIKE '%$nazivArtikla%'";
    $result = mysqli_query($conn, $sql);
    $naziviArtikala = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $naziviArtikala[] = $row['naziv_artikla'];
        echo $nazivArtikla;
    }

    // Ispisivanje naziva artikala kao HTML opcija
    foreach ($naziviArtikala as $naziv) {
        echo "<div class='predlozeni-artikal'>$naziv</div>";
    }
}

mysqli_close($conn);
?>
