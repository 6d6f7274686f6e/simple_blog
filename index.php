<?php

if(file_exists("articlelist.php"))
{
  include("articlelist.php");
}

?>

<!DOCTYPE html>
<html>
 <head>
  <title>Simple Blog</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css"/>
 </head>
 <body>
  <header>
   <h1>Simple Blog</h1>
  </header>
    <h2>Articles:</h2>
    <?php
      if(!count($names))
      {
    ?>
        <p>
          There is no article yet...
        </p>
    <?php
      }
      else
      {
    ?>
        <ul>
        <?php
          for($i=count($names)-1; $i >= 0; $i--)
          {
            $current_id = $paths[$i];
            $current_name = $names[$i];
        ?>
              <li>
                <a href="article.php?id=<?php echo $i ?>">
                  <?php echo $current_name; ?>
                </a>
              </li>
        <?php
          }
        ?>
        </ul>
    <?php } 
      include('footer.php');
    ?>
 </body>
</html>
