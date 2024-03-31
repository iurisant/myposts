<?php
  require_once("./config/db.php");
  require_once("./app/views/modal/form.php");
  require_once("./app/controllers/selectedPostsController.php");
  require_once("./app/controllers/insertPostsController.php");
  require_once("./app/controllers/deletePostsController.php");
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>My Posts</title>
</head>
<body>
  <div class="container">
    <nav class="nav">
      <h1>My Posts</h1>
      <form class="nav-buttons" method="post">
        <button class="add" type="button" onclick="openModal()">
          <img src="./assets/add.svg" alt="Add" width="24px" height="24px">
        </button>
        <button class="remove" name="deletePost" value="deleted" type="submit">
          <img src="./assets/trash.svg" alt="Trash" width="24px" height="24px">
        </button>
      </form>
    </nav>
    <div class="posts">
      <?php
        require_once("./app/views/posts/post.php");
      ?>
    </div>
  </div> 
</body>
<script src="script.js"></script>
</html>