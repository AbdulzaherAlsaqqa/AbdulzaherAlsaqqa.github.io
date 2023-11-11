<?php

$user_id = $_GET['id'];
$userData = $this->model->getUser($user_id);

if (!$userData) {
  echo "Invalid user ID.";
  exit;
}



?>

