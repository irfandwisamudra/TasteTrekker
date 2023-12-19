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

function getUserData($email)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM user WHERE email='$email' ")->fetch_assoc();
}

function getUserDataHighlight($email)
{
  return mysqli_query($GLOBALS["db"], "SELECT email, username FROM user WHERE email='$email' ")->fetch_assoc();
}

function validateEmail($data)
{
  if (getUserData($data['email']) == NULL) {
    return false;
  } else {
    return true;
  }
}

function validatePassword($data)
{
  $user = getUserData($data['email']);
  $passwordCheck = password_verify($data['password'], $user["password"]);
  if ($passwordCheck) {
    return true;
  } else {
    return false;
  }
}
