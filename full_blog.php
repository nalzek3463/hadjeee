<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Target Auto-Otpad</title>
    <link rel="icon" type="image/png" href="/AutoTarget/images/logo/kljuc.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blog_style.css">
    <link rel="stylesheet" href="css/style.header-spaceship-variant-one.css" media="(min-width: 1200px)">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


</head>

<body>


    <?php

    include("./includes/header.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM posts WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $id = $row['id'];
            $user_id = $row['user_id'];
            $topic_id = $row['topic_id'];
            $title = $row['title'];
            $image = $row['image'];
            $body = $row['body'];
            $created_at = $row['created_at'];
            $formatiranDatum = date('d.m.Y', strtotime($created_at));

            echo <<<HTML

        <!-- site__body -->
        <div class="site__body">
            <div class="block post-view">
                <div class="post-view__header post-header post-header--has-image">
                    <div class="post-header__image" style="background-image: url('$image');"></div>
                    <div class="post-header__body">
                        <div class="post-header__categories">
                            <ul class="post-header__categories-list">
                                <li class="post-header__categories-item">
                                    <a href="blog.php" class="post-header__categories-link">Blogovi</a>
                                </li>
                            </ul>
                        </div>
                        <h1 class="post-header__title">$title</h1>
                        <div class="post-header__meta">
                            <ul class="post-header__meta-list">
                                <li class="post-header__meta-item">By <a href="" class="post-header__meta-link">Auto Target</a></li>
                                <li class="post-header__meta-item">$formatiranDatum</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="post-view__body">
                        <div class="post-view__item post-view__item-sidebar">
                            
                            <div class="card widget widget-posts">
                                <div class="widget__header">
                                    <h4>Latest Posts</h4>
                                </div>
                                <ul class="widget-posts__list">
                                    <li class="widget-posts__item">
                                        <div class="widget-posts__image">
                                            <a href="">
                                                <img src="images/posts/post-1-70x70.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="widget-posts__info">
                                            <div class="widget-posts__name">
                                                <a href="">Philosophy That Addresses Topics Such As Goodness</a>
                                            </div>
                                            <div class="widget-posts__date">October 19, 2019</div>
                                        </div>
                                    </li>
                                    <li class="widget-posts__item">
                                        <div class="widget-posts__image">
                                            <a href="">
                                                <img src="images/posts/post-2-70x70.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="widget-posts__info">
                                            <div class="widget-posts__name">
                                                <a href="">Logic Is The Study Of Reasoning And Argument Part 2</a>
                                            </div>
                                            <div class="widget-posts__date">September 5, 2019</div>
                                        </div>
                                    </li>
                                    <li class="widget-posts__item">
                                        <div class="widget-posts__image">
                                            <a href="">
                                                <img src="images/posts/post-3-70x70.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="widget-posts__info">
                                            <div class="widget-posts__name">
                                                <a href="">Some Philosophers Specialize In One Or More Historical Periods</a>
                                            </div>
                                            <div class="widget-posts__date">August 12, 2019</div>
                                        </div>
                                    </li>
                                    <li class="widget-posts__item">
                                        <div class="widget-posts__image">
                                            <a href="">
                                                <img src="images/posts/post-4-70x70.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="widget-posts__info">
                                            <div class="widget-posts__name">
                                                <a href="">A Variety Of Other Academic And Non-Academic Approaches Have Been Explored</a>
                                            </div>
                                            <div class="widget-posts__date">Jule 30, 2019</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-view__item post-view__item-post">
                            <div class="post-view__card post">
                                <div class="post__body typography">
                                   <p> 
HTML;
            echo html_entity_decode($body);
            echo <<<HTML
                                    </p>
                                    <figure>
                                        <a href="">
                                            <img src="$image" alt="">
                                        </a>
                                    </figure>
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

    include("./includes/footer.php");
    ?>

</body>

</html>