
<?php

function webCrawl($url,$depth) {
   $c=1;
    while ($c<=$depth) {
         $doc =new DOMDocument();
         $doc->loadHTML(file_get_contents($url));
         $linklist =$doc->getElementsByTagName("a");
         $links=array();
         $index=0;

    foreach ($linklist as $link) {
         $links[$index] =$link->getAttribute("href");
         echo "<br>";

    if (preg_match("/photo/", $links[$index])){
	     echo "the url images == $links[$index] = depth is".$c;
         }

    else {
	     echo "the url Links == $links[$index]= depth is".$c;
         }
         $index++;
         echo "<br>";
    }   
         $url=$links[$c-1];
         
         $c++;
    }   
}
webCrawl("https://www.google.com",2);

  ?>