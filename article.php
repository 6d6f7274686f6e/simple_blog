<?php

$npaths = 0;
if(file_exists("articlelist.php"))
{
  include("articlelist.php");
}

$article_title = "Article not found";
$article_contents = "<p>There is no article with this id!</p>";
$i = -1;

if(isset($_GET['id']))
{
  $i = $_GET['id'];
  $npaths = count($paths);
  if($i + 2 < $npaths)
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
   <h1><a href="index.php">Simple Blog</a></h1>
  </header>
    <h2><?php echo $article_title ?></h2>
    <div>
      <?php echo $article_contents ?>
      <p>
        <hr />
        <a class = "soc" href="index.php">Go back...</a>
        <div class = "controlid">
        <?php
          if($i > 0)
          {
          ?>
            <a class = "soc" href="article.php?id=<?php echo ($i - 1); ?>">Previous</a>
          <?php
          }
          if($i + 3 < $npaths)
          {
          ?>
            <a class = "soc" href="article.php?id=<?php echo ($i + 1); ?>">Next</a>
          <?php
          }
          ?>
        </div>
      </p>
    </div>
    <?php 
      include("footer.php");
    ?>
 </body>
</html>
