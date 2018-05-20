# simple_blog
A very simple blog system.

You'll need to delete the *data/articles/placeholder* and *data/titles* files after copying the files on your server.
Please see the _Customization_ section below for more details on things you could bother modifying.

# Writing an article
To create an article, just create a plain text file in the *data/articles/* folder __with the date and time of the
writing at the beginning of the filename__. The article file can (and will, very probably) contain some html.

You'll then need to add the following lines to the *data/titles* file:
` @@
` the article's name

You can upload images and various files in the *data/files* directory, although it is not mandatory and files can be
uploaded anywhere on your server as long as you link then properly.

# Customization
You can (and should) customize the following files:

* *footer.php*
* *index.php* (change the title of the page to your liking)
* *article.php* (ditto)
* *style.css* (customize the appearance to your liking)

Almost every other file is just here for automation.

# How does the whole thing work?
*index.php* lists the files in the *data/articles* directory and name each link with the names in the *data/titles*
file. *article.php* _GET_s an _id_ and display the corresponding file's contents. For more information, please read
[this blog post](http://martin.thepig.chez.com/log/article.php?id=2).
