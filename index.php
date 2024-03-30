<?php
  require_once("./config/db.php");
  require_once("./app/controllers/insertPostsController.php");
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
          <img src="./assets/add.svg" alt="Add" width="24px" height="24px">
        </button>
        <button class="remove">
          <img src="./assets/trash.svg" alt="Trash" width="24px" height="24px">
        </button>
      </div>
    </nav>
    <div class="posts">
      <?php
        require_once("./app/views/posts/post.php");
      ?>
    </div>
  </div>
  

  <!--INICIO MODAL FORMULÁRIO-->
  <div class="modal" id="containerModal">
    <form method="post" id="postsForm">
      <h1>Novo Post</h1><br>
      
      <label for="title">Titulo<span> *</span></label>  
      <input name="title" id="title" placeholder="Titulo" value="" form="postsForm" maxlength="64" type="text">

      <label for="description">Description<span> *</span></label>  
      <textarea name="description" form="postsForm" value="" id="description" maxlength="512" placeholder="Descrição" cols="30" rows="10"></textarea><br>

      <button id="submit" type="submit">Adicionar</button>
      <button id="cancel" type="button" onclick="closeModal()">Cancelar</button>
    </form>
  </div> 
  <!--FIM MODAL FORMULÁRIO-->
  
</body>
<script src="script.js"></script>
</html>