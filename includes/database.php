<?php
require_once("base.php");

function getAllMenus()
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM menu")->fetch_all(MYSQLI_ASSOC);
}

function getAllCategories()
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM category")->fetch_all(MYSQLI_ASSOC);
}

function countCategories()
{
  return intVal(mysqli_query($GLOBALS["db"], "SELECT COUNT(category_id) FROM category")->fetch_row()[0]);
}

function getAllMenusWithRecipes()
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM menu INNER JOIN recipe ON menu.menu_id = recipe.menu_id")->fetch_all(MYSQLI_ASSOC);
}

function getRecipeWithMenuByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM menu INNER JOIN recipe ON menu.menu_id = recipe.menu_id WHERE recipe.recipe_id='$recipe_id'")->fetch_assoc();
}

function getIngredientsByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM ingredient WHERE recipe_id='$recipe_id'")->fetch_all(MYSQLI_ASSOC);
}

function getMethodsByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM method WHERE recipe_id='$recipe_id'")->fetch_all(MYSQLI_ASSOC);
}

function insertUser($data)
{
  return mysqli_query($GLOBALS["db"], "INSERT INTO user (username, email, `password`, `level`)
    VALUES ('" . htmlspecialchars($data['username']) . "',
    '" . htmlspecialchars($data['email']) . "', 
    '" . password_hash($data['password'], PASSWORD_BCRYPT) . "', 
    '0' )");
}

function getLevelByUserId($user_id)
{
  return intVal(mysqli_query($GLOBALS["db"], "SELECT `level` FROM user WHERE user_id = $user_id")->fetch_row()[0]);
}

function isUsernameExists($username) {
  return intval(mysqli_fetch_assoc(mysqli_query($GLOBALS["db"], "SELECT COUNT(*) as count FROM user WHERE username = '" . mysqli_real_escape_string($GLOBALS["db"], $username) . "'"))['count']) > 0;
}

function isEmailExists($email) {
  return intval(mysqli_fetch_assoc(mysqli_query($GLOBALS["db"], "SELECT COUNT(*) as count FROM user WHERE email = '" . mysqli_real_escape_string($GLOBALS["db"], $email) . "'"))['count']) > 0;
}
