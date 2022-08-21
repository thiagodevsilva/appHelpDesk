<?php

session_start();

if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 'autorizado') {
  header('Location: index.php?login=not_auth');
}


?>