<?php
  require_once("db.php");
  require_once("./components/modal/modalForm.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
  <title>My Posts</title>
</head>
<body>
  <div class="container">
    <nav class="nav">
      <h1>My Posts</h1>
      <div class="nav-buttons">
        <button class="add" onclick="openModal()">
          <img src="./img/add.svg" alt="Add" width="24px" height="24px">
        </button>
        <button class="remove">
          <img src="./img/trash.svg" alt="Trash" width="24px" height="24px">
        </button>
      </div>
    </nav>
    <div class="posts">
      <?php
        require_once("./components/posts/posts.php");
      ?>
    </div>
  </div>
</body>
<script src="script.js"></script>
</html>