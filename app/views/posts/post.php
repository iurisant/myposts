<?php

foreach ($conn->query("SELECT * FROM posts") as $row) {
  echo 
  "<div id=". $row['id'] . " class='post'>" .
    "<h3>" . $row['titulo'] . "</h3><br>" .
    "<p>" . $row['descricao'] . "</p>" .
  "</div>";
}
