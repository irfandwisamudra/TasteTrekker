<?php
require_once("base.php");

function getAllMenus() {
  return mysqli_query($GLOBALS["db"],"SELECT * FROM menu")->fetch_all(MYSQLI_ASSOC);
}

function getAllCategories() {
  return mysqli_query($GLOBALS["db"],"SELECT * FROM category")->fetch_all(MYSQLI_ASSOC);
}

function countCategories() {
  return intVal(mysqli_query($GLOBALS["db"],"SELECT COUNT(category_id) FROM category")->fetch_row()[0]);
}

function getAllMenusWithRecipes() {
  return mysqli_query($GLOBALS["db"],"SELECT * FROM menu INNER JOIN recipe ON menu.menu_id = recipe.menu_id")->fetch_all(MYSQLI_ASSOC);
}

function getRecipeWithMenuByRecipeId($recipe_id) {
  return mysqli_query($GLOBALS["db"],"SELECT * FROM menu INNER JOIN recipe ON menu.menu_id = recipe.menu_id WHERE recipe.recipe_id='$recipe_id'")->fetch_assoc();
}

function getIngredientsByRecipeId($recipe_id) {
  return mysqli_query($GLOBALS["db"],"SELECT * FROM ingredient WHERE recipe_id='$recipe_id'")->fetch_all(MYSQLI_ASSOC);
}

function getMethodsByRecipeId($recipe_id) {
  return mysqli_query($GLOBALS["db"],"SELECT * FROM method WHERE recipe_id='$recipe_id'")->fetch_all(MYSQLI_ASSOC);
}