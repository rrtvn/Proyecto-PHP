<?php
  session_start(); //obtiene la sesión activa
  session_destroy(); //elimina lo que está en la sesión
  header("Location: index.php"); //redirige al login
  exit();
