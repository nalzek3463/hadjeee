<?php 
 session_start(); // Start the session
 include("db_conn.php");
?>

    <header>
        
        <!-- site__header -->
        <header class="site__header">
            <div class="header">
                <div class="header__megamenu-area megamenu-area"></div>
                <div class="header__topbar-start-bg"></div>
                <div class="header__topbar-start">
                    <div class="topbar topbar--spaceship-start">
                        <div class="topbar__item-text d-none d-xxl-flex"><a class="topbar__link" href="index.php">Početna</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="webshop.php">Webshop</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="otkup_vozila.php">Otkup vozila</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="onama.php">O nama</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="kontakt.php">Kontakt</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="blog.php">Blog</a></div>
                    </div>
                </div>
                <div class="header__topbar-end-bg"></div>
                <div class="header__topbar-end">
                    <div class="topbar topbar--spaceship-end">
                        <div class="topbar__item-button">
                            <a href="https://www.facebook.com/autotarget.ba" class="topbar__button">
                                <span class="topbar__button-label">Facebook</span>
                            </a>
                        </div>
                        <div class="topbar__item-button">
                            <a href="https://www.instagram.com/auto.target/" class="topbar__button">
                                <span class="topbar__button-label">Instagram</span>
                            </a>
                        </div>
                        <div class="topbar__item-button">
                            <a href="https://olx.ba/shops/AutoTarget/aktivni" class="topbar__button">
                                <span class="topbar__button-label">OLX</span>
                            </a>
                        </div>
                        <div class="topbar__item-button">
                            <a href="https://www.njuskalo.hr/moje-njuskalo/poslovni/moji-oglasi/aktivni-oglasi" class="topbar__button">
                                <span class="topbar__button-label">Njuškalo</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header__logo">
                    <a href="index.php" class="logo">
                        <div class="logo__image">
                            <!-- logo -->
                            <img style="height: 70px;" src="/AutoTarget/images/logo/logo.png" alt="AutoTarget">
                            <!-- logo / end -->
                        </div>
                    </a>
                </div>
                <div class="header__search">
                    <div class="search">
                        <form action="" class="search__body" method="GET" id="filter-form">
                            <div class="search__shadow"></div>
                            <input class="search__input" type="text" placeholder="Upišite kataloški broj dijela" name="kataloski_broj" id="kataloski_broj">
                            <button class="search__button search__button--start" type="button">
                                <span class="search__button-icon"><svg width="20" height="20">
                                        <path d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0C15.5,10.2,14,11.3,14,12z" />
                                    </svg>
                                </span>
                                <span class="search__button-title">Select Vehicle</span>
                            </button>
                            <button class="search__button search__button--end" type="submit">
                                <span class="search__button-icon"><svg width="20" height="20">
                                        <path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="search__box"></div>
                            <div class="search__decor">
                                <div class="search__decor-start"></div>
                                <div class="search__decor-end"></div>
                            </div>
                            
                            <div class="search__dropdown search__dropdown--vehicle-picker vehicle-picker">
                                <div class="search__dropdown-arrow"></div>
                                <div class="vehicle-picker__panel vehicle-picker__panel--list vehicle-picker__panel--active" data-panel="list">
                                    <div class="vehicle-picker__panel-body">
                                        <div class="vehicle-picker__text">
                                            Select a vehicle to find exact fit parts
                                        </div>
                                        <div class="vehicles-list">
                                            <div class="vehicles-list__body">
                                                <label class="vehicles-list__item">
                                                    <span class="vehicles-list__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="header-vehicle" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="vehicles-list__item-info">
                                                        <span class="vehicles-list__item-name">2011 Ford Focus S</span>
                                                        <span class="vehicles-list__item-details">Engine 2.0L 1742DA L4 FI Turbo</span>
                                                    </span>
                                                    <button type="button" class="vehicles-list__item-remove">
                                                        <svg width="16" height="16">
                                                            <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                        </svg>
                                                    </button>
                                                </label>
                                                <label class="vehicles-list__item">
                                                    <span class="vehicles-list__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="header-vehicle" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="vehicles-list__item-info">
                                                        <span class="vehicles-list__item-name">2019 Audi Q7 Premium</span>
                                                        <span class="vehicles-list__item-details">Engine 3.0L 5626CC L6 QK</span>
                                                    </span>
                                                    <button type="button" class="vehicles-list__item-remove">
                                                        <svg width="16" height="16">
                                                            <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                        </svg>
                                                    </button>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="vehicle-picker__actions">
                                            <button type="button" class="btn btn-primary btn-sm" data-to-panel="form">Add A Vehicle</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="vehicle-picker__panel vehicle-picker__panel--form" data-panel="form">
                                    <div class="vehicle-picker__panel-body">
                                        <div class="vehicle-form vehicle-form--layout--search">
                                            <div class="vehicle-form__item vehicle-form__item--select">
                                                <select class="form-control form-control-select2" aria-label="Year">
                                                    <option value="none">Select Year</option>
                                                    <option>2010</option>
                                                    <option>2011</option>
                                                    <option>2012</option>
                                                    <option>2013</option>
                                                    <option>2014</option>
                                                    <option>2015</option>
                                                    <option>2016</option>
                                                    <option>2017</option>
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                    <option>2020</option>
                                                </select>
                                            </div>
                                            <div class="vehicle-form__item vehicle-form__item--select">
                                                <select class="form-control form-control-select2" aria-label="Brand" disabled>
                                                    <option value="none">Select Brand</option>
                                                    <option>Audi</option>
                                                    <option>BMW</option>
                                                    <option>Ferrari</option>
                                                    <option>Ford</option>
                                                    <option>KIA</option>
                                                    <option>Nissan</option>
                                                    <option>Tesla</option>
                                                    <option>Toyota</option>
                                                </select>
                                            </div>
                                            <div class="vehicle-form__item vehicle-form__item--select">
                                                <select class="form-control form-control-select2" aria-label="Model" disabled>
                                                    <option value="none">Select Model</option>
                                                    <option>Explorer</option>
                                                    <option>Focus S</option>
                                                    <option>Fusion SE</option>
                                                    <option>Mustang</option>
                                                </select>
                                            </div>
                                            <div class="vehicle-form__item vehicle-form__item--select">
                                                <select class="form-control form-control-select2" aria-label="Engine" disabled>
                                                    <option value="none">Select Engine</option>
                                                    <option>Gas 1.6L 125 hp AT/L4</option>
                                                    <option>Diesel 2.5L 200 hp AT/L5</option>
                                                    <option>Diesel 3.0L 250 hp MT/L5</option>
                                                </select>
                                            </div>
                                            <div class="vehicle-form__divider">Or</div>
                                            <div class="vehicle-form__item">
                                                <input type="text" class="form-control" placeholder="Enter VIN number" aria-label="VIN number">
                                            </div>
                                        </div>
                                        <div class="vehicle-picker__actions">
                                            <div class="search__car-selector-link">
                                                <a href="" data-to-panel="list">Back to vehicles list</a>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-sm" disabled>Add A Vehicle</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header__indicators">
                    <div class="indicator">
                        <a href="wishlist.php" class="indicator__button">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <path d="M23,4c3.9,0,7,3.1,7,7c0,6.3-11.4,15.9-14,16.9C13.4,26.9,2,17.3,2,11c0-3.9,3.1-7,7-7c2.1,0,4.1,1,5.4,2.6l1.6,2l1.6-2C18.9,5,20.9,4,23,4 M23,2c-2.8,0-5.4,1.3-7,3.4C14.4,3.3,11.8,2,9,2c-5,0-9,4-9,9c0,8,14,19,16,19s16-11,16-19C32,6,28,2,23,2L23,2z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="indicator indicator--trigger--click">
                        <?php
                        include("./prijava_provjera.php");
                        ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- site__header / end -->
    </header>
