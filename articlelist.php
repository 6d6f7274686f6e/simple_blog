<?php

 $names = explode('@@', file_get_contents('./data/titles'));

 $forbidden = array('..', '.');
 $paths = scandir('./data/articles');
