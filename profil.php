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
                                        <a href="uredi_profil.php">Uredi Profil</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="account-garage.html">Garaža</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="account-orders.html">Historija transakcija</a>
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
                                            <a href="uredi_profil.php" class="btn btn-secondary btn-sm">Uredi Profil</a>
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
                                <div class="dashboard__orders card">
                                    <div class="card-header">
                                        <h5>Historija transakcija</h5>
                                    </div>
                                    <div class="card-divider"></div>
                                    <div class="card-table">
                                        <div class="table-responsive-sm">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>RB</th>
                                                        <th>Datum</th>
                                                        <th>Status</th>
                                                        <th>Ukupno</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="account-order-details.html">#8132</a></td>
                                                        <td>02 April, 2019</td>
                                                        <td>Pending</td>
                                                        <td>$2,719.00 for 5 item(s)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="account-order-details.html">#7592</a></td>
                                                        <td>28 March, 2019</td>
                                                        <td>Pending</td>
                                                        <td>$374.00 for 3 item(s)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="account-order-details.html">#7192</a></td>
                                                        <td>15 March, 2019</td>
                                                        <td>Shipped</td>
                                                        <td>$791.00 for 4 item(s)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
