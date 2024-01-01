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

function insertCategory($data)
{
  $validatedImage = validateImage($_FILES["image_category"]);
  if (!$validatedImage["success"]) {
    $_SESSION["errorMessage"] = $validatedImage["error"];
    return false;
  }

  return mysqli_query($GLOBALS["db"], "INSERT INTO category (category_id, name_category, desc_category, image_category)
  VALUES ('" . $GLOBALS['uuid'] . "',
  '" . htmlspecialchars($data['name_category']) . "', 
  '" . htmlspecialchars($data['desc_category']) . "',
  '" . htmlspecialchars($validatedImage['file_name']) . "')");
}

function validateImage($image)
{
  $allowedExtensions = ["jpg", "jpeg", "png"];
  $maxFileSize = 1 * 1024 * 1024;

  $imageName = $image["name"];
  $imageSize = $image["size"];
  $imageError = $image["error"];
  $imageTmpName = $image["tmp_name"];

  if ($imageError === 4) {
    return ["success" => false, "error" => "Pilih gambar terlebih dahulu!"];
  }

  $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
  $imageExtension = strtolower($imageExtension);
  if (!in_array($imageExtension, $allowedExtensions)) {
    return ["success" => false, "error" => "File yang Anda upload bukan gambar!"];
  }

  if ($imageSize > $maxFileSize) {
    return ["success" => false, "error" => "Ukuran gambar terlalu besar!"];
  }

  $newFileName = uniqid("", true) . "." . $imageExtension;

  move_uploaded_file($imageTmpName, "../assets/img/category/" . $newFileName);

  return ["success" => true, "file_name" => $newFileName];
}
