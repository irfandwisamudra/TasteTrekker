<?php
require_once("base.php");
require_once("database.php");

function register($data)
{
  if (isUsernameExists($data['username'])) {
    $error = "Username sudah digunakan";
    return;
  }

  if (isEmailExists($data['email'])) {
    $error = "Email sudah digunakan";
    return;
  }

  if (insertUser($data)) {
    $_SESSION["username"] = $data['username'];
    $_SESSION["level"] = getLevelByUserId($data['username']);
    $_SESSION["login"] = true;
    unset($_POST);
    header("Location: " . BASEURL . "/index.php");
    exit;
  }
}
