<?php
include "./inc/config.inc";

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if ($post) {

  $pwd = stripslashes($_POST["pwd"]);

  $error = "";

  // check required fields
  if (!$pwd) {
    $error .= PASSWORD_REQUIRED;
  } else if ($pwd != PHOTOS_PASSWORD) {
    $error .= WRONG_PASSWORD;
  }

  if (!$error) {
    echo "OK";
  }
  else {
    echo $error;
  }

}
?>
