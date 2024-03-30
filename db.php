<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=myposts","root","");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "
    <script> console.log('Conexão ao db estabelecida com sucesso!');</script>
  ";
} catch(PDOException $e) {
  echo "
    <script> console.log(". $e->getMessage() .");</script>
  ";
}