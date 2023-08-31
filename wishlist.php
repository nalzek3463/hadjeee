<?php include('header.php'); ?>
        <!-- site__body -->
        <div class="site__body">
            <div class="block-header block-header--has-breadcrumb block-header--has-title">
                <div class="container">
                    <div class="block-header__body">
                        <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                            <ol class="breadcrumb__list">
                                <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                                <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first">
                                    <a href="index.php" class="breadcrumb__item-link">Početna</a>
                                </li>
                                <li class="breadcrumb__item breadcrumb__item--parent">
                                    <a href="wishlist.php" class="breadcrumb__item-link">Lista želja</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container container--max--xl">
                    <div class="wishlist">
                        <table class="wishlist__table">
                            <thead class="wishlist__head">
                                <tr class="wishlist__row wishlist__row--head"> 
                                    <span  style="padding-left: 465px; color: #767575; font-size: 25px;"><b>Lista vaših želja</b></span>
                                </tr>
                                <tr class="wishlist__row wishlist__row--head">     
                                    <th class="wishlist__column wishlist__column--head wishlist__column--image">Slika</th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--product">Naziv artikla</th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--stock">ID broj artikla</th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--price">Kataloški broj</th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--button">Datum dodavanja</th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--remove"></th>
                                </tr>
                            </thead>
                            <tbody class="wishlist__body">
                                <tr class="wishlist__row wishlist__row--body">
                                    <td class="wishlist__column wishlist__column--body wishlist__column--image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-1-160x160.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="wishlist__column wishlist__column--body wishlist__column--product">
                                        <div class="wishlist__product-name">
                                            <a href="">Brandix Spark Plug Kit ASR-400</a>
                                        </div>
                                    </td>
                                    <td class="wishlist__column wishlist__column--body wishlist__column--product">
                                        <div class="wishlist__product-name">
                                            <div class="status-badge__text">$id</div>
                                        </div>
                                    </td>
                                    <td class="wishlist__column wishlist__column--body wishlist__column--product">
                                        <div class="wishlist__product-name">
                                            <div class="status-badge__text">$kataloskibroj</div>
                                        </div>
                                    </td>
                                    <td class="wishlist__column wishlist__column--body wishlist__column--product">
                                        <div class="wishlist__product-name">
                                            <div class="status-badge__text">$datum_dodavanja</div>
                                        </div>
                                    </td>
                                    <td class="wishlist__column wishlist__column--body wishlist__column--remove">
                                        <button type="button" class="wishlist__remove btn btn-sm btn-muted btn-icon">
                                            <svg width="12" height="12">
                                                <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4C11.2,9.8,11.2,10.4,10.8,10.8z" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
        <!-- site__body / end -->
<?php include('footer.php'); ?>