<?php
require_once("base.php");
require_once("database.php");

function register($data)
{
  if (isUsernameExists($data['username'])) {
    $_SESSION["usernameExists"] = "Username sudah digunakan";
  }

  if (isEmailExists($data['email'])) {
    $_SESSION["emailExists"] = "Email sudah digunakan";
  }

  if (isset($_SESSION["usernameExists"]) || isset($_SESSION["emailExists"])) {
    return;
  }

  if (insertUser($data)) {
    unset($_POST);
    $_SESSION["registerSuccess"] = "Akun berhasil terdaftar. Silahkan Login.";
    header("Location: " . BASEURL . "/login.php");
    exit;
  }
}
