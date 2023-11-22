<?php



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