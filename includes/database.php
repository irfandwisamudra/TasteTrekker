<?php
require_once("base.php");

function getAllDataMenus() {
  return mysqli_query($GLOBALS["db"],"SELECT * FROM menu")->fetch_all(MYSQLI_ASSOC);
}

function getAllDataCategories() {
  return mysqli_query($GLOBALS["db"],"SELECT * FROM category")->fetch_all(MYSQLI_ASSOC);
}