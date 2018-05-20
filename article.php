<?php

if(file_exists("articlelist.php"))
{
  include("articlelist.php");
}

$article_title = "Article not found";
$article_contents = "<p>There is no article with this id!</p>";

if(isset($_GET['id']))
{
  $i = $_GET['id'];
  if($i + 2 < count($paths))
  {
    $article_title = $names[$i];
    $article_path  = $paths[$i + 2];
    $article_contents = file_get_contents("./data/articles/" . $article_path);
  }
}

$pagetitle = preg_replace('/\[.+\]/', '', $article_title);

?> 
<!DOCTYPE html>
<html>
 <head>
  <title>Simple Blog - <?php echo $pagetitle; ?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 <body>
  <header>
   <h1>Simple Blog</h1>
  </header>
    <h2><?php echo $article_title ?></h2>
    <div>
      <?php echo $article_contents ?>

      <p><a class = "soc" href="index.php">Go back...</a></p>
    </div>
    <?php 
      include("footer.php");
    ?>
 </body>
</html>
