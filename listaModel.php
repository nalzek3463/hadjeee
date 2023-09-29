<?php
include("db_conn.php");

if (isset($_GET['idMarke'])) {
    $idMarke = $_GET['idMarke'];
    $sql = "SELECT id, tip FROM tip2 WHERE marka = $idMarke ORDER BY tip ASC"; // Prilagodite tablicu i stupce prema svojoj bazi podataka
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $modeliOptions = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($modeliOptions as $option) {
            $modelID = $option['id'];
            $model = $option['tip'];
            echo "<option value='$modelID|$model'>$model</option>";
            
        }
    }

    
}
?>
