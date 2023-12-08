<?php

$proizvodaPoStranici = 30;
$trenutnaStranica = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($trenutnaStranica - 1) * $proizvodaPoStranici;

$filterKataloskiBroj = isset($_GET['kataloski_broj']) ? $_GET['kataloski_broj'] : '';
$filterNazivArtikla = isset($_GET['naziv_artikla']) ? $_GET['naziv_artikla'] : '';
$filterMarka = isset($_GET['marka']) ? $_GET['marka'] : '';
$filterModel = isset($_GET['tip']) ? $_GET['tip'] : '';

$sqlCount = "SELECT COUNT(*) as total FROM dijelovi2 WHERE 1";
$conditions = array();

    if (!empty($filterKataloskiBroj)) {
        $conditions[] = "katbroj = '$filterKataloskiBroj'";
       /* $sqlCount .= " AND katbroj = '$filterKataloskiBroj'";*/
    } 
    if (!empty($filterNazivArtikla)) {
        $conditions[] = "dio LIKE '%$filterNazivArtikla%'";
        /*$sqlCount .= " AND dio LIKE '%$filterNazivArtikla%'";*/
    } 
    if (!empty($filterMarka)) {
        echo"Ovo: $filterMarka";
        $markaParts = explode('|', $filterMarka);
        echo"A ovo je: $markaParts";
        if(count($markaParts) >= 0) {
            list($idMarke, $markaVozila) = $markaParts;
            $sqlCount .= " AND marka1 = '$markaVozila'";
           
        } else {
            echo"Array1: $idMarke, $markaVozila ";
        }
    } 
    if (!empty($filterModel)) {
        $modelParts = explode('|', $filterModel);
        if(count($modelParts) >= 2) {
            list($modelID, $model) = $modelParts;
            $sqlCount .= " AND tip1 = '$model'";
        } else {
            echo"Array2: $modelParts";
        }
    } 


$sql = "SELECT * FROM dijelovi2 WHERE 1";

    if (!empty($filterKataloskiBroj)) {
        $sql .= " AND katbroj = '$filterKataloskiBroj'";
    } 
    if (!empty($filterNazivArtikla)) {
        $sql .= " AND dio LIKE '%$filterNazivArtikla%'";
    } 
   /* if (!empty($filterMarka)) {
        list($idMarke, $markaVozila) = explode('|', $filterMarka);
        $sql .= " AND marka1 = '$markaVozila'";
    } 
    if (!empty($filterModel)) {
        list($modelID, $model) = explode('|', $filterModel);
        $sql .= " AND tip1 = '$model'";
    } */

    if (!empty($filterMarka)) {
        $markaParts = explode('%7C', $filterMarka);
        if(count($markaParts) >= 2) {
            list($idMarke, $markaVozila) = $markaParts;
            $sqlCount .= " AND marka1 = '$markaVozila'";
        } else {
            echo"Array3: $markaParts";
        }
    } 
    if (!empty($filterModel)) {
        $modelParts = explode('%7C', $filterModel);
        if(count($modelParts) >= 2) {
            list($modelID, $model) = $modelParts;
            $sqlCount .= " AND tip1 = '$model'";
        } else {
            echo"Array4: $modelParts";
        }
    } 









$resultCount = mysqli_query($conn, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$totalProizvoda = $rowCount['total'];

$sql .= " ORDER BY id ASC LIMIT $proizvodaPoStranici OFFSET $offset";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>