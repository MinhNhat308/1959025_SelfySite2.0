<?php
  $navlinks = ["home", "about", "photos", "resume"];
  $current_page = basename($_SERVER["SCRIPT_NAME"],".php");
  function outputNav($navlinks, $current_page){
    $output = "";
    $href;
    foreach ($navlinks as $link ) {
      if($link == "home"){
        $href = "index";
      }else {
        $href = $link;
      }
        $output .= "<li><a href='{$href}.php'>".ucfirst($link)."</a> </li>";
    }
    echo $output;
  }
  function outputCSS($navlinks, $current_page){
    foreach ($navlinks as $link) {
      if($link == "home" && $current_page == "index"){
        $href = "P1";
        break;
      }elseif ($link == "about" && $current_page == $link) {
        $href = "P2";
        break;
      }
      elseif ($link == "resume" && $current_page == $link) {
        $href = "re";
        break;
      }
      elseif ($link == $current_page) {
        $href = $link;
      }
    }
    echo "<link rel='stylesheet' href='{$href}.css'>";}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Minh Nhat's Selfy Site</title>
    <?php
      outputCSS($navlinks, $current_page);
     ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Merriweather&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="https://www.x1wind.com/wp-content/uploads/material/x1wind-logo-color-short.svg" alt="">
      </div>
      <div class="main-menu">
        <label for="hamburger" class="hamburger">☰</label>
        <input type="checkbox" name="hamburger" class="hamburger">
        <nav>
          <ul>
            <?php
              outputNav($navlinks, $current_page);
             ?>
          </ul>
        </nav>
      </div>
    </header>
