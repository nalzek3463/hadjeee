<?php
session_start();
include "db_conn.php";

if(isset($_POST['korisnicko_ime']) && isset($_POST['sifra'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$ime = validate($_POST['korisnicko_ime']);
$pass= validate($_POST['sifra']);

if(empty($ime)) {
    header ("Location: index.php?error=Korisničko ime je potrebno");
    exit();
}
else if(empty($pass)) {
    header ("Location: index.php?error=Šifra je potrebna");
    exit();
}

$sql = "SELECT * FROM korisnici WHERE korisnicko_ime='$ime' AND sifra='$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if($row['korisnicko_ime'] === $ime && $row['sifra'] === $pass) {
        echo "Prijava uspješna!";
        $_SESSION['korisnico_ime'] = $row['korisnicko_ime'];
        $_SESSION['ime'] = $row['ime'];
        $_SESSION['korisnik_id'] = $row['korisnik_id'];
        header("Location: home.php");
        exit();
    } 
    else {
        header("Location: index.php?error=Netačano korisničko ime ili šifra");
        exit();
    }
}
else {
    header("Location: index.php");
    exit();
}
?>