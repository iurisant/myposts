<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if(!empty($_POST["title"]) && !empty($_POST["description"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];    
    try {
      $sql = "INSERT INTO posts (titulo, descricao) VALUES (:titulo, :descricao)";

      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':titulo', $title);
      $stmt->bindParam(':descricao', $description);
      $stmt->execute();

      echo "
        <script>
        document.getElementById('containerModal').style.display = 'none'
          console.log('Inserção bem-sucedida!')
        </script>
      ";
    } catch(PDOException $e) {
      echo "
        <script>console.error(". $e .")</script>
      ";
    }
    header("location: index.php");
  }else{
    echo "
      <script> console.warn('Preencha todos os campos!');</script>
    ";
    header("location: index.php");
  }
}
?>

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