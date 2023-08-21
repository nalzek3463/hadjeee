<?php
//connect database
$conn = mysqli_connect('localhost', 'nala', 'nala123', 'autotarget');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
//write query 
$sql = 'SELECT artikal, kb, slika1 FROM dijelovi1 ORDER BY id DESC LIMIT 10';


//make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Home One — Red Parts</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.header-spaceship-variant-one.css" media="(min-width: 1200px)">
    <link rel="stylesheet" href="css/style.mobile-header-variant-one.css" media="(max-width: 1199px)">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

    <div class="block-products-carousel__carousel">
        <div class="block-products-carousel__carousel-loader"></div>
        <div class="owl-carousel">
            <?php

            foreach ($products as $product) {
                $artikal = $product['artikal'];
                $kataloškibroj = $product['kb'];
                $slika = $product['slika1'];
                echo <<<HTML
            <div class="block-products-carousel__column">
                <div class="block-products-carousel__cell">
                    <div class="product-card product-card--layout--grid">
                        <div class="product-card__actions-list">
                            <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                <svg width="16" height="16">
                                    <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3zM3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                </svg>
                            </button>
                            <button class="product-card__action product-card__action--quickview" type="button" aria-label="Add to wishlist">
                                <svg width="16" height="16">
                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                </svg>
                            </button>
                        </div>
                        <div class="product-card__image">
                            <div class="image image--type--product">
                                <a href="product-full.html" class="image__body">
                                    <img class="image__tag" src="images/products/product-1-245x245.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="product-card__info">
                            <div class="product-card__meta"><span class="product-card__meta-title">KB:</span> $kataloškibroj</div>
                            <div class="product-card__name">
                                <div>
                                    <a href="product-full.html"> $artikal </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-card__footer">
                            <a href="viber://add?number=+387644474621" target="_blank">
                                <button class="image-button"></button>
                            </a>
                            <a href="https://wa.me/+387644474621" target="_blank">
                                 <button class="whatsapp-button"></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            HTML;
            }
            ?>
        </div>
    </div>
</body>

</html>