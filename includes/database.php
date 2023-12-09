<?php
require_once("base.php");


function getAllDataCategory()
{
    return mysqli_query($GLOBALS["db"], "SELECT * FROM category")->fetch_all(MYSQLI_ASSOC);
}