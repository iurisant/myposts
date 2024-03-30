<?php
foreach ($conn->query("SELECT * FROM posts") as $row) {
  echo 
  "<div id=post_". $row['id'] . " class='post'>" .
    "<h3 id=post_". $row['id'] . ">" . $row['titulo'] . "</h3><br>" .
    "<p id=post_". $row['id'] . ">" . $row['descricao'] . "</p>" .
  "</div>";
}
