<?php


$sql = "SELECT id, artikal FROM filter_nazivi ORDER BY artikal ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    // Generisanje opcija
    while ($row = $result->fetch_assoc()) {
        $artikal = $row['artikal'];
        echo "<option value='$artikal'>$artikal</option>";
    }

}
?>






