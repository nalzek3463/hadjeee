
<?php

include("./db_conn.php");

$query = "SELECT artikal FROM filter_nazivi";
$result = $conn->query($query);

?>

<datalist id="listadio">
    <?php
    while ($row = $result->fetch_assoc()) {
        $naziv_artikla = $row['artikal'];
        echo "<option hidden value=\"$naziv_artikla\">$naziv_artikla</option>";
    }
    ?>

</datalist>



