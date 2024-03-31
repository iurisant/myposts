<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id']) && isset($_POST['action'])) {
  $id = $_POST['id'];
  $action = $_POST['action'];

  if (!isset($_SESSION['ids'])) {
    $_SESSION['ids'] = array();
  }
  
  if ($action === 'adicionar') {
    if (!in_array($id, $_SESSION['ids'])) {
        $_SESSION['ids'][] = $id; 
    }
    echo "Post id[". $id ."] Selecionado!";
  } elseif ($action === 'remover') {
    $key = array_search($id, $_SESSION['ids']);
    if ($key !== false) {
        unset($_SESSION['ids'][$key]);
    }
    echo "Post id[". $id ."] Desmarcado!";
  }
}