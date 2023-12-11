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

  <?php include("./includes/header.php"); ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Blog / Zanimljivosti</h1>
        <?php

        $sql = 'SELECT * FROM posts WHERE published = 1';
        $result = mysqli_query($conn, $sql);
        $blogObjave = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($blogObjave as $blogObjava) {
          $maxLenght = 250;
          $id = $blogObjava['id'];
          $user_id = $blogObjava['user_id'];
          $topic_id = $blogObjava['topic_id'];
          $title = $blogObjava['title'];
          $image = $blogObjava['image'];
          $body = $blogObjava['body'];
          $created_at = $blogObjava['created_at'];

          if (strlen($body) > $maxLenght) {
            $kratkiBody = substr($body, 0, $maxLenght) . '...';
          } else {
            $kratkiBody = $body;
          }

          echo <<<HTML

    <div class="post clearfix">
      <img src="http://localhost/AutoTarget/blog/assets/images/$image" alt="" class="post-image">
      <div class="post-preview" style="margin: 38px 0;">
        <h2><a href="./full_blog.php?id=$id" style="color: black;">$title</a></h2>
        <i class="far fa-user"> Auto Target</i>
        &nbsp;
        <i class="far fa-calendar"> $created_at</i>
        <a href="./full_blog.php?id=$id" class="btn btn-warning dugmeCitaj">Čitaj više</a>
      </div>
    </div>
HTML;

        }
        ?>


      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Pretraga</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Poems</a></li>
            <li><a href="#">Quotes</a></li>
            <li><a href="#">Fiction</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Motivation</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Life Lessons</a></li>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->
  <div class="block-space block-space--layout--before-footer"></div>

  <?php include("./includes/footer.php"); ?>

</body>



</html>