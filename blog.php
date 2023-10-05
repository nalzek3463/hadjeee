<?php 
include("header.php");
include("db_conn.php");

$sql = 'SELECT * FROM posts';
$result = mysqli_query($conn, $sql);
$blogObjave = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!-- Page Wrapper -->
<div class="page-wrapper">
<!-- Content -->
<div class="content clearfix">

  <!-- Main Content -->
  <div class="main-content">
  <h1 class="recent-post-title">Blog</h1>
<?php
  foreach($blogObjave as $blogObjava) {
  $id = $blogObjava['id'];
  $user_id = $blogObjava['user_id'];
  $topic_id = $blogObjava['topic_id'];
  $title = $blogObjava['title'];
  $image = $blogObjava['image'];
  $body = $blogObjava['body'];
  $created_at = $blogObjava['created_at'];

echo <<<HTML

    <div class="post clearfix">
      <img src="$image" alt="" class="post-image">
      <div class="post-preview">
        <h2><a href="blog_full.php?id=$id" style="color: black;">$title</a></h2>
        <i class="far fa-user"> Auto Target</i>
        &nbsp;
        <i class="far fa-calendar"> $created_at</i>
        <p class="preview-text">
          Kratki opis. Testiramo.
        </p>
        <a href="blog_full.php?id=$id" class="btn btn-warning dugmeCitaj">Čitaj više</a>
      </div>
    </div>
HTML;
}
?>


  </div>
  <!-- // Main Content -->

  <div class="sidebar">

    <div class="section search">
      <h2 class="section-title">Search</h2>
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

<?php include("footer.php");
