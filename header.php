<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DEAPN</title>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css" />
    <script
      src="https://kit.fontawesome.com/d46f73e943.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <!-- desktop nav -->
      <nav class="desktop-nav" id="nav">
        <ul class="main-nav">
          <a href="index.html" class="nav-logo">
            <img src="./images/logo.svg" class="logo" alt="brand-logo" />
          </a>
          <li>
            <a href="index.html" class="nav-item">Home</a>
          </li>
          <li>
            <a href="#defence" class="nav-item">Defence</a>
          </li>
          <li>
            <a href="#articles" class="nav-item">Articles</a>
          </li>
        </ul>
        <div class="nav-btn">
          <a href="#" class="nav-btn-text">Register</a>
        </div>
      </nav>

      <!-- mobile nav -->
      <nav class="mobile-nav">
        <img
          src="images/fi-rr-menu-burger.svg"
          alt="hamburger-icon"
          class="hamburger-icon"
        />
        <a href="index.html" class="nav-logo">
          <img src="images/logo.svg" alt="logo" class="logo" />
        </a>
        <a href="#" class="nav-btn nav-btn-text">Register</a>
      </nav>

      <!-- hamburger menu -->
      <nav class="hamburger-nav">
        <ul class="hamburger-menu">
          <li>
            <a href="index.html" class="nav-item">Home</a>
          </li>
          <li>
            <a href="#defence" class="nav-item">Defence</a>
          </li>
          <li>
            <a href="#articles" class="nav-item">Articles</a>
          </li>
        </ul>
      </nav>
    </header>