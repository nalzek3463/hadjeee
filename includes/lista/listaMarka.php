<?php



$sql = "SELECT id, naziv FROM marka ORDER BY naziv ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  

    while ($row = $result->fetch_assoc()) {
        $markaID = $row['id'];
        $markaNaziv = $row['naziv'];
        echo "<option value='$markaID'>$markaNaziv</option>";
    }

}
?>






