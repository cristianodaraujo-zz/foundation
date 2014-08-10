<?php

// deloga o usuário
session_start();
unset($_SESSION['loginUser']);
header('Location: ../index.php');