<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Yogi Vemana University | YVU</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="yvu150-150.png">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    
    <?php
        function activeMenu($pageTitle, $currentTitle)
        {
            return ($pageTitle === $currentTitle) ? 'active' : '';
        }
    ?>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="assets/images/logo/header-main-logo-1.png"
            alt="YVU Logo" class="navbar-logo">

        <!-- <img src="assets/images/logo/yvu150-150.png"
            alt="YVU Emblem"
            style="height:50px; margin-right:10px;">

        <div class="brand-text">
            Yogi Vemana <br>
            <small>University</small>
        </div> -->
    </a>

    <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#ftco-nav"
            aria-controls="ftco-nav"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>


      <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ms-auto">

                <!-- Home -->
                <li class="nav-item <?= activeMenu('Home Page', $title) ?>">
                    <a href="<?= base_url('/') ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown has-submenu <?= in_array($title, [
                    'About Us',
                    'Director',
                    'Deputy Director'
                ]) ? 'active' : '' ?>">

                    <a href="#" class="nav-link dropdown-toggle has-submenu">About</a>

                    <ul class="sub-menu">

                        <li>
                            <a href="<?= base_url('about') ?>">Overview</a>
                        </li>
                        <li>
                            <a href="<?= base_url('controllers') ?>">Controllers</a>
                        </li>
                         <li>
                            <a href="<?= base_url('staff') ?>">Staff</a>
                        </li>
                        <li>
                            <a href="#">Chief Superintendent of External Exams</a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown has-submenu">

                    <a href="#" class="nav-link has-submenu">
                       Updates<span class="sub-arrow"></span>
                    </a>

                    <ul class="sub-menu">
                        <li>
                            <a class="dropdown-item" target="_blank" href="<?= base_url('latest-info') ?>">Latest Info</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="<?= base_url('notifications') ?>">Notifications</a>
                        </li>
                        <li>
                            <a class="dropdown-item" target="_blank" href="<?= base_url('circulars') ?>">Circulars</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= base_url('Timetables') ?>">Timetables</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="https://www.yvuexams.in/results.aspx" class="nav-link" target="_blank">
                        Results
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('downloads') ?>" class="nav-link">
                        Downloads
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('contact') ?>" class="nav-link">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('application-for-genuinity-verification') ?>" class="nav-link">
                        Application for Genuinity (Verification)
                    </a>
                </li>
                <!-- search -->
                <li class="nav-item">
                    <a href="<?= base_url('search') ?>" class="nav-link" title="Search">
                        <i class="icon-search"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <div id="google_translate_element" class="translate-box ml-5" style="display:none;"></div>
                    <div class="lang-switcher notranslate">
                    <select id="langSelect" onchange="setLang(this.value)" class="notranslate">
                        <option value="en" class="notranslate">English</option>
                        <option value="hi" class="notranslate">Hindi</option>
                        <option value="te" class="notranslate">Telugu</option>
                    </select>
                    </div>
                </li>
            </ul>
      </div>
    </div>
  </nav>



    <!-- END nav -->