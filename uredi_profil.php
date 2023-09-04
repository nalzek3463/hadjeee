<?php include("header.php");?>


       <!-- site__body -->
        <div class="site__body">
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">Upravljaj profilom</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item">
                                        <a href="profil.php">Profil</a>
                                    </li>
                                    <li class="account-nav__item  account-nav__item--active ">
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
                            <div class="card">
                                <div class="card-header">
                                    <h5>Uredi profil</h5>
                                </div>
                                <div class="card-divider"></div>
                                    <div class="card-body card-body--padding--2">
                                        <div class="row no-gutters">
                                                <div class="col-6 col-lg-7 col-xl-6 w-75 p-3">
                                                <form action="update_profil.php" method="post">
                                                    <div class="form-group">
                                                        <label for="profile-first-name">Ime</label>
                                                        <input type="text" class="form-control" id="profile-first-name" placeholder="Upišite Ime" name="Ime">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profile-last-name">Prezime</label>
                                                        <input type="text" class="form-control" id="profile-last-name" placeholder="Upišite Prezime" name="Prezime">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profile-email">Email Adresa</label>
                                                        <input type="email" class="form-control" id="profile-email" placeholder="Upišite Email Adresu" name="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profile-phone">Broj telefona</label>
                                                        <input type="text" class="form-control" id="profile-phone" placeholder="Upišite Broj Telefona" name="Broj_telefona">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-7 col-xl-6 w-75 p-3">
                                                    <div class="form-group">
                                                        <label for="profile-first-name">Adresa</label>
                                                        <input type="text" class="form-control" id="profile-first-name" placeholder="Upišite Adresu" name="Adresa">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profile-last-name">Poštanski broj i Grad</label>
                                                        <input type="text" class="form-control" id="profile-last-name" placeholder="Upišite Poštanski Broj i Grad" name="Pb_grad">
                                                    </div>
                                                    <div class="form-group mb-0 float-right">
                                                        <button class="btn btn-primary mt-3">Snimi</button>
                                                    </div>
                                                    <?php

                                                    if (isset($_SESSION['success_message'])) {
                                                        echo '<div class="text-success mt-2">' . $_SESSION['success_message'] . '</div>';
                                                        unset($_SESSION['success_message']); // Ovo briše poruku kako se ne bi ponavljala pri osvježavanju stranice
                                                    }
                                                    ?>
                                                </div>
                                                </form>
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
        <?php include("footer.php");?>