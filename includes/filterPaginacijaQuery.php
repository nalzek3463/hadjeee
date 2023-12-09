<?php

$proizvodaPoStranici = 30;
$trenutnaStranica = isset($_POST['page']) ? $_POST['page'] : 1;
$offset = ($trenutnaStranica - 1) * $proizvodaPoStranici;

$filterKataloskiBroj = isset($_POST['kataloski_broj']) ? $_POST['kataloski_broj'] : '';
$filterNazivArtikla = isset($_POST['naziv_artikla']) ? $_POST['naziv_artikla'] : '';
$filterMarka = isset($_POST['marka']) ? $_POST['marka'] : '';
$filterModel = isset($_POST['tip']) ? $_POST['tip'] : '';


$sqlCount = "SELECT COUNT(*) as total FROM dijelovi2 WHERE 1";

    if (!empty($filterKataloskiBroj)) {
        $sqlCount .= " AND katbroj = '$filterKataloskiBroj'";
    } 
    if (!empty($filterNazivArtikla) && $filterNazivArtikla !== '#') {
        $sqlCount .= " AND dio LIKE '$filterNazivArtikla'";
    } 
    if (!empty($filterMarka) && $filterMarka !== '#') {
        $markaID = explode('|', $filterMarka)[0];
        $sqlCount .= " AND marka = '$markaID'"; 
        
        if (!empty($filterModel) && $filterModel !== '#'){
            $modelID = explode('|', $filterModel)[0];
            $sqlCount .= " AND tip = '$modelID'";
        }     
    }  


$sql = "SELECT * FROM dijelovi2 WHERE 1";

    if (!empty($filterKataloskiBroj)) {
        $sql .= " AND katbroj = '$filterKataloskiBroj'";
    } 
    if (!empty($filterNazivArtikla) && $filterNazivArtikla !== '#') {
        $sql .= " AND dio LIKE '$filterNazivArtikla'";
    } 
    if (!empty($filterMarka) && $filterMarka !== '#') {
        $markaID = explode('|', $filterMarka)[0];
        $sql .= " AND marka = '$markaID'"; 
        
        if (!empty($filterModel) && $filterModel !== '#'){
            $modelID = explode('|', $filterModel)[0];
            $sql .= " AND tip = '$modelID'";     
        } 
    }

/*echo"SQLCOUNT UPIT: $sqlCount <br> ";*/

$resultCount = mysqli_query($conn, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$totalProizvoda = $rowCount['total'];

/*echo"SQL UPIT: $sql";*/

$sql .= " ORDER BY id ASC LIMIT $proizvodaPoStranici OFFSET $offset";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>