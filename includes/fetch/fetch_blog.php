<div class="block block-posts-carousel block-posts-carousel--layout--grid" data-layout="grid">
    <div class="container">
        <div class="section-header">
            <div class="section-header__body">
                <h2 class="section-header__title">Blog</h2>
                <div class="section-header__spring"></div>
                <ul class="section-header__links">
                    <li class="section-header__links-item">
                        <a href="" class="section-header__links-link">Special Offers</a>
                    </li>
                    <li class="section-header__links-item">
                        <a href="" class="section-header__links-link">New Arrivals</a>
                    </li>
                    <li class="section-header__links-item">
                        <a href="" class="section-header__links-link">Reviews</a>
                    </li>
                </ul>
                <div class="section-header__arrows">
                    <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                        <button class="arrow__button" type="button"><svg width="7" height="11">
                                <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9C-0.1,9.8-0.1,10.4,0.3,10.7z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="section-header__divider"></div>
            </div>
        </div>
        <div class="block-posts-carousel__carousel">
            <div class="owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1370px, 0px, 0px); transition: all 0s ease 0s; width: 4795px;">

                        <?php
                        $sql = "SELECT * FROM posts WHERE published = 1 ORDER BY id DESC LIMIT 10";
                        $result = mysqli_query($conn, $sql);
                        $zadnje_objave = mysqli_fetch_all($result, MYSQLI_ASSOC);


                        foreach ($zadnje_objave as $zadnja_objava) {
                            $id = $zadnja_objava['id'];
                            $naslov = $zadnja_objava['title'];
                            $slika = $zadnja_objava['image'];
                            $sadrzaj = $zadnja_objava['body'];
                            $datum = $zadnja_objava['created_at'];

                            echo <<<HTML


                        <div class="owl-item cloned" style="width: 322.5px; margin-right: 20px;">
                            <div class="block-posts-carousel__item">
                                <div class="post-card">
                                    <div class="post-card__image">
                                        <a href="post-full-width.html">
                                            <img src="$slika" alt="slika">
                                        </a>
                                    </div>
                                    <div class="post-card__content">
                                        <div class="post-card__category">
                                            <a href="blog-classic-right-sidebar.html">New Arrivals</a>
                                        </div>
                                        <div class="post-card__title">
                                            <h2><a href="post-full-width.html">$naslov</a></h2>
                                        </div>
                                        <div class="post-card__date">
                                            By <a href="">AutoTarget</a>,  $datum
                                        </div>
                                        <div class="post-card__excerpt">
                                            <div class="typography">
                                                $sadrzaj
                                            </div>
                                        </div>
                                        <div class="post-card__more">
                                            <a href="post-full-width.html" class="btn btn-secondary btn-sm">Čitaj više</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


HTML;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>