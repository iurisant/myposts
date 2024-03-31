<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
  if (isset($_POST['deletePost'])) {
    if ($_POST['deletePost'] === 'deleted' && isset($_SESSION['ids'])) {
      try { 
        $sql = "DELETE FROM posts WHERE id IN (:id)";
        $stmt = $conn->prepare($sql);

        foreach ($_SESSION['ids'] as $id) {
          $stmt->bindParam(":id", $id);
          $stmt->execute();
        }

        echo "
          <script>
            document.getElementById('containerModal').style.display = 'none'
            console.log('Posts deletados com sucesso!')
          </script>
        ";
      } catch(PDOException $e) {
        echo "
          <script>console.error(". $e .")</script>
        ";
      }
    } 
    $_SESSION['ids'] = null;
  }
  
}
