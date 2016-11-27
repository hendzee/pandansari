<?php

  $function = $_POST["function"];

  switch ($function) {
    case "get_content":
      $data = $_POST["content"];
      get_content($data);
      break;

    default:
      # code...
      break;
  }

  function get_content($data){
    switch ($data) {
      case "home":
        include_once "home.php";
        break;

      case "menu":
        include_once "menu.php";
        break;

      case "contact":
        include_once "contact.php";
        break;

      default:
        # code...
        break;
    }
  }
?>
