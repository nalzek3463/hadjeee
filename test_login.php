<?php 

$servername = "localhost";
$username = "nala";
$password = "nala123";
$dbname = "autotarget";

// Stvaranje veze
$conn = new mysqli($servername, $username, $password, $dbname);

// Provjera veze
if ($conn->connect_error) {
    die("Veza s bazom nije uspostavljena: " . $conn->connect_error);
} 


echo <<<HTML

<div class="indicator__content">
    <div class="account-menu">
        <form class="account-menu__form">
            <div class="account-menu__form-title">
                Prijavite se na svoj profil
            </div>
            <div class="form-group">
                <label for="korisnicko_ime" class="sr-only">Korisničko ime</label>
                <input id="korisnicko_ime" type="text" class="form-control form-control-sm" placeholder="Korisničko ime" name="korisnicko_ime">
            </div>
            <div class="form-group">
                <label for="sifra" class="sr-only">Šifra</label>
                <div class="account-menu__form-forgot">
                    <input id="sifra" type="password" class="form-control form-control-sm" placeholder="Šifra" name="sifra">
                    <a href="" class="account-menu__form-forgot-link">Zaboravio šifru?</a>
                </div>
            </div>
            <div class="form-group account-menu__form-button">
                <button type="submit" class="btn btn-primary btn-sm">Prijava</button>
            </div>
        </form>
        <div class="account-menu__divider"></div>
    </div>
</div>
HTML;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $korisnicko_ime = $_POST["korisnicko_ime"];
        $sifra = $_POST["sifra"];
        
        $sql = "SELECT * FROM korisnici WHERE korisnicko_ime = '$korisnicko_ime' AND sifra = '$sifra'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {

            echo <<<HTML
            <div class="indicator__content">
                <div class="account-menu">
                    <div class="account-menu__divider"></div>
                    <a href="" class="account-menu__user">
                        <div class="account-menu__user-avatar">
                            <img src="images/avatars/avatar-4.jpg" alt="">
                        </div>
                        <div class="account-menu__user-info">
                            <div class="account-menu__user-name">Ryan Ford</div>
                            <div class="account-menu__user-email">red-parts@example.com</div>
                        </div>
                    </a>
                    <div class="account-menu__divider"></div>
                    <ul class="account-menu__links">
                        <li><a href="account-dashboard.html">Profil</a></li>
                        <li><a href="account-dashboard.html">Garaža</a></li>
                        <li><a href="account-profile.html">Uredite Profil</a></li>
                        <li><a href="account-orders.html">Historija transakcija</a></li>
                    </ul>
                    <div class="account-menu__divider"></div>
                    <ul class="account-menu__links">
                        <li><a href="account-login.html">Odjava</a></li>
                    </ul>
                </div>
            </div>
        HTML;
        } else {
            $greska = "Podaci za prijavu nisu ispravni.";
            
            if (isset($greska)) {
                echo '<p style="color: red;">' . $greska . '</p>';
            }
            echo <<<HTML
            <div class="account-menu">
                <form class="account-menu__form">
                    <div class="account-menu__form-title">
                        Prijavite se na svoj profil
                    </div>
                    <div class="form-group">
                        <label for="header-signin-email" class="sr-only">Korisničko ime</label>
                        <input id="header-signin-email" type="email" class="form-control form-control-sm" placeholder="Korisničko ime">
                    </div>
                    <div class="form-group">
                        <label for="header-signin-password" class="sr-only">Šifra</label>
                        <div class="account-menu__form-forgot">
                            <input id="header-signin-password" type="password" class="form-control form-control-sm" placeholder="Šifra">
                            <a href="" class="account-menu__form-forgot-link">Zaboravio šifru?</a>
                        </div>
                    </div>
                    <div class="form-group account-menu__form-button">
                        <button type="submit" class="btn btn-primary btn-sm">Prijava</button>
                    </div>
                </form>
                <div class="account-menu__divider"></div>
            </div>
            HTML;
        }

} 
$conn->close();
?>
