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