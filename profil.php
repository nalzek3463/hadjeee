<?php 
include("header.php");

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM users WHERE user_id = '$user_id' LIMIT 1";
    
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $email = $row['email'];
        $ime = $row['ime'];
        $prezime = $row['prezime'];
        $adresa = $row['adresa'];
        $post_broj_grad = $row['postanski_broj_grad'];
        $broj_telefona = $row['broj_telefona'];

        echo <<<HTML
        <div class="site__body">
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">Upravljaj profilom</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item  account-nav__item--active ">
                                        <a href="profil.php">Profil</a>
                                    </li>
                                    <li class="account-nav__item">
                                        <a href="profil_uredi.php">Uredi Profil</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="account-garage.html">Garaža</a>
                                    </li>
                                    <li class="account-nav__divider" role="presentation"></li>
                                    <li class="account-nav__item ">
                                        <a href="odjava.php">Odjava</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="dashboard">
                                <div class="dashboard__profile card profile-card">
                                    <div class="card-body profile-card__body">
                                        <div class="profile-card__avatar">
                                            <img src="/AutoTarget/images/icon/avatar_muski.png" alt="Avatar">
                                        </div>
                                        <div class="profile-card__name">$ime $prezime</div>
                                        <div class="profile-card__email">$email</div>
                                        <div class="profile-card__edit">
                                            <a href="profil_uredi.php" class="btn btn-secondary btn-sm">Uredi Profil</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard__address card address-card address-card--featured">
                                    <div class="address-card__body">
                                        <div class="address-card__name">$ime $prezime</div>
                                        <div class="address-card__row">
                                            $post_broj_grad<br>
                                            $adresa
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Broj telefona</div>
                                            <div class="address-card__row-content">$broj_telefona</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Email Adresa</div>
                                            <div class="address-card__row-content">$email</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
        <!-- site__body / end -->
HTML;
    }
}

include("footer.php");  
?>
