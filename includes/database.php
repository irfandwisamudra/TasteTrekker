<?php
require_once("base.php");
require_once(__DIR__ . '/../assets/libs/vendor/autoload.php');

use Ramsey\Uuid\Uuid;

$GLOBALS["uuid"] = substr(Uuid::uuid4()->toString(), -10);

function getAllCategories()
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM category")->fetch_all(MYSQLI_ASSOC);
}

function getIdAndNameCategories()
{
  return mysqli_query($GLOBALS["db"], "SELECT category_id, name_category FROM category")->fetch_all(MYSQLI_ASSOC);
}

function getAllCategoriesWithCountRecipes()
{
  return mysqli_query($GLOBALS["db"], "SELECT c.*, COUNT(m.menu_id) AS count_recipes
  FROM category c LEFT JOIN menu m
  ON c.category_id = m.category_id
  GROUP BY c.category_id")->fetch_all(MYSQLI_ASSOC);
}

function insertCategory($data, $image)
{
  return mysqli_query($GLOBALS["db"], "INSERT INTO category (category_id, name_category, desc_category, image_category)
  VALUES ('" . $GLOBALS['uuid'] . "',
  '" . htmlspecialchars($data['name_category']) . "', 
  '" . htmlspecialchars($data['desc_category']) . "',
  '" . htmlspecialchars($image) . "')");
}

function getAllMenusHighlight()
{
  return mysqli_query($GLOBALS["db"], "SELECT name_menu, image_menu FROM menu")->fetch_all(MYSQLI_ASSOC);
}

function getAllMenusWithNameCategory()
{
  return mysqli_query($GLOBALS["db"], "SELECT m.*, c.name_category FROM menu m INNER JOIN category c ON m.category_id = c.category_id")->fetch_all(MYSQLI_ASSOC);
}

function getAllMenusWithRecipes()
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM menu m LEFT JOIN recipe r ON m.menu_id = r.menu_id")->fetch_all(MYSQLI_ASSOC);
}

function insertMenu($data, $image)
{
  return mysqli_query($GLOBALS["db"], "INSERT INTO menu (menu_id, category_id, name_menu, price, image_menu)
  VALUES ('" . $GLOBALS['uuid'] . "',
  '" . htmlspecialchars($data['category_id']) . "', 
  '" . htmlspecialchars($data['name_menu']) . "', 
  '" . htmlspecialchars($data['price']) . "',
  '" . htmlspecialchars($image) . "')");
}

function getAllRecipesWithNameMenu()
{
  return mysqli_query($GLOBALS["db"], "SELECT r.*, m.name_menu FROM recipe r INNER JOIN menu m ON r.menu_id = m.menu_id")->fetch_all(MYSQLI_ASSOC);
}

function getRecipeWithMenuByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM recipe r INNER JOIN menu m ON r.menu_id = m.menu_id WHERE r.recipe_id='$recipe_id'")->fetch_assoc();
}

function getIngredientsByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM ingredient WHERE recipe_id='$recipe_id'")->fetch_all(MYSQLI_ASSOC);
}

function getMethodsByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM method WHERE recipe_id='$recipe_id'")->fetch_all(MYSQLI_ASSOC);
}

function getAllOrdersWithUsername()
{
  return mysqli_query($GLOBALS["db"], "SELECT o.*, u.username FROM `order` o INNER JOIN user u ON o.user_id = u.user_id")->fetch_all(MYSQLI_ASSOC);
}

function insertUser($data)
{
  return mysqli_query($GLOBALS["db"], "INSERT INTO user (user_id, username, email, `password`, image_user, `level`)
    VALUES ('" . $GLOBALS['uuid'] . "',
    '" . strtolower(str_replace(' ', '', stripslashes(htmlspecialchars($data['username'])))) . "',
    '" . htmlspecialchars($data['email']) . "', 
    '" . password_hash($data['password'], PASSWORD_BCRYPT) . "', 
    'default.png', 
    '0' )");
}

function getLevelByEmail($email)
{
  return intVal(mysqli_query($GLOBALS["db"], "SELECT `level` FROM user WHERE email = '$email'")->fetch_row()[0]);
}

function isUsernameExists($username)
{
  return intval(mysqli_fetch_assoc(mysqli_query($GLOBALS["db"], "SELECT COUNT(*) as count FROM user WHERE username = '" . mysqli_real_escape_string($GLOBALS["db"], $username) . "'"))['count']) > 0;
}

function isEmailExists($email)
{
  return intval(mysqli_fetch_assoc(mysqli_query($GLOBALS["db"], "SELECT COUNT(*) as count FROM user WHERE email = '" . mysqli_real_escape_string($GLOBALS["db"], $email) . "'"))['count']) > 0;
}

function getUserByEmail($email)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM user WHERE email='$email'")->fetch_all(MYSQLI_ASSOC)[0];
}

function getUserData($email)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM user WHERE email='$email' ")->fetch_assoc();
}

function getUserDataHighlight($email)
{
  return mysqli_query($GLOBALS["db"], "SELECT email, username FROM user WHERE email='$email' ")->fetch_assoc();
}
