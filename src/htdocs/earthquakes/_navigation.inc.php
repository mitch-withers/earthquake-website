<?php
  $section = "/earthquakes";

  echo "<a href='/earthquakes' class='up-one-level'>Earthquakes</a>",

  "<section>",

    navItem("${section}/map/", "Latest Earthquakes") .
    navItem("${section}/eqarchives/", "Earthquake Lists, Maps & Statistics") .
    navItem("${section}/search/", "Search Earthquake Catalog") .
    navItem("${section}/feed/", "Real-time Feeds & Notifications") .
    navItem("${section}/region.php", "Information by Region") .
    navItem("/data/comcat/", "ANSS ComCat Documentation") .
    navItem("${section}/errata.php", "Errata for Latest Earthquakes") ,

  "</section>"
  ;

?>