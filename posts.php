<?php
foreach ($conn->query("SELECT * FROM posts") as $row) {
  echo 
  "<div id=post_". $row['id'] . " class='post'>" .
    "<h3 id=post_". $row['id'] . ">" . $row['titulo'] . "</h3><br>" .
    "<p id=post_". $row['id'] . ">" . $row['descricao'] . "</p>" .
  "</div>";
}
?>
<script>
  var longClickTimer;
  var targetElements = document.querySelectorAll(".post");

  if (targetElements.length > 0) {
  targetElements.forEach(function(targetElement) {
    targetElement.addEventListener("mousedown", function(event) {
      longClickTimer = setTimeout(function() {
        var selected = document.getElementById(event.target.id).style;
        if(selected.boxShadow != ""){
          selected.boxShadow = "";
          selected.backgroundColor = "var(--tertiary-color)"
        }else{
          selected.boxShadow = "#0067C0 0px 0px 0px 2px inset";
          selected.backgroundColor = "#0067c014"
        }
      }, 500);
  });

    targetElement.addEventListener("mouseup", function(event) {
      clearTimeout(longClickTimer);
    });
  });
  }
</script>
