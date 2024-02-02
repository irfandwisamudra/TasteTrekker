<?php
require_once("base.php");
require_once(__DIR__ . '/../assets/libs/vendor/autoload.php');

use Ramsey\Uuid\Uuid;

$GLOBALS["uuid"] = substr(Uuid::uuid4()->toString(), -10);

function getAllCategories()
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM category")->fetch_all(MYSQLI_ASSOC);
}

function getAllIdAndNameCategories()
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

function getCategoryByCategoryId($category_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM category WHERE category_id = '$category_id'")->fetch_assoc();
}

function insertCategory($data, $image)
{
  return mysqli_query($GLOBALS["db"], "INSERT INTO category (category_id, name_category, desc_category, image_category)
  VALUES ('" . $GLOBALS['uuid'] . "',
  '" . htmlspecialchars($data['name_category']) . "', 
  '" . htmlspecialchars($data['desc_category']) . "',
  '" . htmlspecialchars($image) . "')");
}

function updateCategoryByCategoryId($data, $image, $category_id)
{
  return mysqli_query($GLOBALS["db"], "UPDATE category SET
  name_category = '" . htmlspecialchars($data['name_category']) . "', 
  desc_category = '" . htmlspecialchars($data['desc_category']) . "',
  image_category = '" . htmlspecialchars($image) . "'
  WHERE category_id = '$category_id'");
}

function deleteCategoryByCategoryId($category_id)
{
  return mysqli_query($GLOBALS["db"], "DELETE FROM category WHERE category_id='$category_id'");
}

function getAllMenusHighlight()
{
  return mysqli_query($GLOBALS["db"], "SELECT name_menu, image_menu FROM menu")->fetch_all(MYSQLI_ASSOC);
}

function getAllMenusWithNameCategory()
{
  return mysqli_query($GLOBALS["db"], "SELECT m.*, c.name_category FROM menu m INNER JOIN category c ON m.category_id = c.category_id")->fetch_all(MYSQLI_ASSOC);
}

function getAllMenusWithRecipeId()
{
  return mysqli_query($GLOBALS["db"], "SELECT m.*, r.recipe_id FROM menu m LEFT JOIN recipe r ON m.menu_id = r.menu_id")->fetch_all(MYSQLI_ASSOC);
}

function getAllMenusWithRecipeIdByCategoryId($category_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT m.*, r.recipe_id FROM menu m LEFT JOIN recipe r ON m.menu_id = r.menu_id WHERE category_id='$category_id'")->fetch_all(MYSQLI_ASSOC);
}


function getAllIdAndNameMenus()
{
  return mysqli_query($GLOBALS["db"], "SELECT menu_id, name_menu FROM menu")->fetch_all(MYSQLI_ASSOC);
}

function getMenuByMenuId($menu_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM menu WHERE menu_id = '$menu_id'")->fetch_assoc();
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

function updateMenuByMenuId($data, $image, $menu_id)
{
  return mysqli_query($GLOBALS["db"], "UPDATE menu SET
  category_id = '" . htmlspecialchars($data['category_id']) . "',
  name_menu = '" . htmlspecialchars($data['name_menu']) . "', 
  price = '" . htmlspecialchars($data['price']) . "',
  image_menu = '" . htmlspecialchars($image) . "'
  WHERE menu_id = '$menu_id'");
}

function deleteMenuByMenuId($menu_id)
{
  return mysqli_query($GLOBALS["db"], "DELETE FROM menu WHERE menu_id='$menu_id'");
}

function getAllRecipesWithNameMenu()
{
  return mysqli_query($GLOBALS["db"], "SELECT r.*, m.name_menu FROM recipe r INNER JOIN menu m ON r.menu_id = m.menu_id")->fetch_all(MYSQLI_ASSOC);
}

function getRecipesWithMenusByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM recipe r INNER JOIN menu m ON r.menu_id = m.menu_id WHERE r.recipe_id='$recipe_id'")->fetch_assoc();
}

function getAllIngredientsByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM ingredient WHERE recipe_id='$recipe_id'")->fetch_all(MYSQLI_ASSOC);
}

function getAllMethodsByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM method WHERE recipe_id='$recipe_id'")->fetch_all(MYSQLI_ASSOC);
}

function getRecipeByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM recipe WHERE recipe_id = '$recipe_id'")->fetch_assoc();
}

function getRecipeWithNameMenuByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT r.*, m.name_menu FROM recipe r INNER JOIN menu m ON r.menu_id = m.menu_id WHERE r.recipe_id='$recipe_id'")->fetch_assoc();
}

function insertRecipe($data, $image)
{
  return mysqli_query($GLOBALS["db"], "INSERT INTO recipe (recipe_id, menu_id, title, desc_recipe, serving, timing, image_recipe)
  VALUES ('" . $GLOBALS['uuid'] . "',
  '" . htmlspecialchars($data['menu_id']) . "', 
  '" . htmlspecialchars($data['title']) . "', 
  '" . htmlspecialchars($data['desc_recipe']) . "',
  '" . htmlspecialchars($data['serving']) . "',
  '" . htmlspecialchars($data['timing']) . "',
  '" . htmlspecialchars($image) . "')");
}

function updateRecipeByRecipeId($data, $image, $recipe_id)
{
  return mysqli_query($GLOBALS["db"], "UPDATE recipe SET
  menu_id = '" . htmlspecialchars($data['menu_id']) . "', 
  title = '" . htmlspecialchars($data['title']) . "', 
  desc_recipe = '" . htmlspecialchars($data['desc_recipe']) . "',
  serving = '" . htmlspecialchars($data['serving']) . "',
  timing = '" . htmlspecialchars($data['timing']) . "',
  image_recipe = '" . htmlspecialchars($image) . "'
  WHERE recipe_id = '$recipe_id'");
}

function deleteRecipeByRecipeId($recipe_id)
{
  return mysqli_query($GLOBALS["db"], "DELETE FROM recipe WHERE recipe_id='$recipe_id'");
}

function getAllOrdersWithUsername()
{
  return mysqli_query($GLOBALS["db"], "SELECT o.*, u.username FROM `order` o INNER JOIN user u ON o.user_id = u.user_id")->fetch_all(MYSQLI_ASSOC);
}

function getOrderByOrderId($order_id)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM `order` WHERE order_id = '$order_id'")->fetch_assoc();
}

function deleteOrderByOrderId($order_id)
{
  return mysqli_query($GLOBALS["db"], "DELETE FROM `order` WHERE order_id='$order_id'");
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

function getUsersData($email)
{
  return mysqli_query($GLOBALS["db"], "SELECT * FROM user WHERE email='$email' ")->fetch_assoc();
}

function getUsersDataHighlight($email)
{
  return mysqli_query($GLOBALS["db"], "SELECT email, username FROM user WHERE email='$email' ")->fetch_assoc();
}
