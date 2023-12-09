<?php
ob_start();
session_start();
define("BASEURL", "http://localhost:8080/TasteTrekker");
define("BASEPATH", $_SERVER["DOCUMENT_ROOT"] . "/TasteTrekker");
$GLOBALS["db"] = mysqli_connect("localhost", "root", "", "tastetrekker");
