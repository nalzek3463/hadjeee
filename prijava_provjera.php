<?php

if (isset($_SESSION['user_id'])) {
                                    
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM users WHERE user_id = '$user_id' LIMIT 1";
    
    $result = mysqli_query($conn,$query);
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $email = $row['email'];

    echo <<<HTML

        <a href="#" class="indicator__button">
            <span class="indicator__icon">
                <svg width="32" height="32">
                    <path d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z" />
                </svg>
            </span>
            <span class="indicator__title">Dobrodošli</span>
            <span class="indicator__value">$username</span>
        </a>
        <div class="indicator__content">
            <div class="account-menu">
                <div class="account-menu__divider"></div>
                <a href="profil.php" class="account-menu__user">
                    <div class="account-menu__user-avatar">
                        <img src="/AutoTarget/images/icon/avatar_muski.png" alt="Avatar">
                    </div>
                    <div class="account-menu__user-info">
                        <div class="account-menu__user-name">$username</div>
                        <div class="account-menu__user-email">$email</div>
                    </div>
                </a>
                <div class="account-menu__divider"></div>
                <ul class="account-menu__links">
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="account-dashboard.html">Garaža</a></li>
                    <li><a href="uredi_profil.php">Uredite Profil</a></li>
                </ul>
                <div class="account-menu__divider"></div>
                <ul class="account-menu__links">
                    <li><a href="odjava.php">Odjava</a></li>
                </ul>
                <div class="account-menu__divider"></div>
            </div>
        </div>
    HTML;
    }  
} else {
     echo <<<HTML

        <a href="#" class="indicator__button">
        <span class="indicator__icon">
            <svg width="32" height="32">
                <path d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z" />
            </svg>
        </span>
        <span class="indicator__title">Prijavite se</span>
        <span class="indicator__value">Moj profil</span>
        </a>
        <div class="indicator__content">
            <div class="account-menu">
                <form class="account-menu__form" method="post" action="prijava.php">
                    <div class="account-menu__form-title">
                        Prijavite se
                    </div>
                    <div class="form-group">
                        <label for="username" class="sr-only">Korisničko ime</label>
                        <input id="username" type="text" class="form-control form-control-sm" placeholder="Korisničko ime" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Šifra</label>
                        <div class="account-menu__form-forgot">
                            <input id="password" type="password" class="form-control form-control-sm" placeholder="Šifra" name="password">
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
}

?>

