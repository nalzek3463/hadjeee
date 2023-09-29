<?php
include("db_conn.php");

// Upit za dohvat marki iz baze podataka
$sql = "SELECT id, naziv FROM marka ORDER BY naziv ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    // Generisanje opcija
    while ($row = $result->fetch_assoc()) {
        $idMarke = $row['id'];
        $markaVozila = $row['naziv'];
        echo "<option value='$idMarke|$markaVozila'>$markaVozila</option>";
    }

}
?>






