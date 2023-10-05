<?php 
include("db_conn.php");
include("header.php");

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

include("footer.php");
?>