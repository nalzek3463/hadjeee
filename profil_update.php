<?php
session_start();
if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];

    $ime = $_POST["Ime"];
    $prezime = $_POST["Prezime"];
    $email = $_POST["Email"];
    $broj_telefona = $_POST["Broj_telefona"];
    $adresa = $_POST["Adresa"];
    $pb_grad = $_POST["Pb_grad"];

    include("db_conn.php");

    $sql = "UPDATE users SET ime=?, prezime=?, email=?, broj_telefona=?, adresa=?, postanski_broj_grad=? WHERE id=?";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("SQL error: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssssssi", $ime, $prezime, $email, $broj_telefona, $adresa, $pb_grad, $user_id);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['success_message'] = "Uspješno ste uredili profil";
        header("Location: profil_uredi.php");
        exit();
    } else {
        die("Greška prilikom izvršavanja SQL upita: " . mysqli_error($conn));
    }
}
?>
