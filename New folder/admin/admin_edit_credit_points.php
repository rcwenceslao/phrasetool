<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>Admin ~ Phrasetool by Rimpido</title>

    <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../../vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">

    <style type="text/css">

        .pagination a {
          color: black;
          float: left;
          padding: 8px 16px;
          text-decoration: none;
          transition: background-color .3s;
        }

        /* Style the active/current link */
        .pagination a.active {
          background-color: dodgerblue;
          color: white;
        }

        /* Add a grey background color on mouse-over */
        .pagination a:hover:not(.active) {background-color: #ddd;}
    
    </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="" alt="" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="../../images/icon/user.jpg" alt="User" />
                    </div>
                    <h4 class="name">User</h4>
                    <a href="#">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>User
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../user/users-list.html">
                                        <i class="fas fa-users"></i>List Of Users</a>
                                </li>
                                <li>
                                    <a href="#.html">
                                        <i class="fas fa-user-plus"></i>New User</a>
                                </li>
                                <li>
                                    <a href="edit-profile.html">
                                        <i class="fas fa-edit"></i>Edit Own Profile</a>
                                </li>
                                <li>
                                    <a href="admin_company_info.html">
                                        <i class="fas fa-eye"></i>View Company</a>
                                </li>
                                <li>
                                    <a href="admin_edit_company.html">
                                        <i class="far fa-edit"></i>Edit Company</a>
                                </li>
                                <!--
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>System Status</a>
                                </li>
                            -->
                            </ul>
                        </li>

                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-quote-left"></i>Phrasetext
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../phrasetext/phrasetext_landing.html">
                                        <i class="fas fa-search"></i>Search Phrasetext</a>
                                </li>
                                <li>
                                    <a href="../phrasetext/missing_phrasetext.html">
                                        <i class="fas fa-exclamation-circle"></i>Missing Translation</a>
                                </li>
                                <li>
                                    <a href="../phrasetext/list_phraseheads.html">
                                        <i class="fas fa-list-ol"></i>List Phraseheads</a>
                                </li>
                                <li>
                                    <a href="../phrasetext/new_phrasehead.html">
                                        <i class="far fa-plus-square"></i>New Phrasehead</a>
                                </li>
                               
                            </ul>
                        </li>


                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-alt"></i>Phrasecatalogue
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../phrasecatalogue/list_and_map.html">
                                        <i class="fas fa-map-signs"></i>List and Map</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/new_phrasecatalogue.html">
                                        <i class="fas fa-plus"></i>New Phrasecatalogue</a>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow2" href="#">
                                        <i class="fas fa-file-download"></i>Import
                                        <span class="arrow2">
                                           <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class= "list-unstyled navbar__sub-list js-sub-list2">
                                        <li>
                                            <a href="../phrasecatalogue/phrasecatalogue_import.html">
                                                <i class="fas fa-file-download"></i>Phrasecatalogue Import
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../phrasecatalogue/phraseset_import.html">
                                                <i class="fas fa-file-download"></i>Phraseset Import
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../phrasecatalogue/propertytree_import.html">
                                                <i class="fas fa-file-download"></i>Propertytree Import
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow2" href="#">
                                        <i class="fas fa-file-export"></i>Export
                                        <span class="arrow2">
                                            <i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class = "list-unstyled navbar__sub-list js-sub-list2">
                                        <li>
                                            <a href="../phrasecatalogue/phrasecatalogue_export.html">
                                                <i class="fas fa-file-export"></i>Phrasecatalogue Export
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/phrasecatalogue_comparison.html">
                                        <i class="fas fa-greater-than-equal"></i>Phrasecatalogue Comparison</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/resume_phrase_mapping.html">
                                        <i class="fas fa-map"></i>Resume Phrase mapping</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/list_phrasegroup.html">
                                        <i class="fas fa-th-list"></i>List Phrase Group</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/new_phrasegroup.html">
                                        <i class="far fa-file"></i>New Phrase Group</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/compress_phrasecatalogue.html">
                                        <i class="fas fa-compress"></i>Compress Phrasecatalogue</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/list_special_data.html">
                                        <i class="fas fa-eye"></i>View Special Data</a>
                                </li>
                               
                            </ul>
                        </li>

                         <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tag"></i>Label
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../label/list_label.html">
                                        <i class="fas fa-list"></i>List Labels</a>
                                </li>
                                <li>
                                    <a href="../label/new_label.html">
                                        <i class="fas fa-plus"></i>New Label</a>
                                </li>
                                
                            </ul>
                        </li>
                        

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-language"></i>Language
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../language/language_landing.html">
                                        <i class="fas fa-list-ol"></i>List Languages</a>
                                </li>
                                <li>
                                    <a href="../language/new_language.html">
                                        <i class="far fa-plus-square"></i>New Language</a>
                                </li>
                                <li>
                                    <a href="../language/list_language_codes.html">
                                        <i class="far fa-list-alt"></i>List Language Codes</a>
                                </li>
                                <li>
                                    <a href="../language/new_language_code.html">
                                        <i class="fas fa-folder-plus"></i>New Language Code</a>
                                </li>
                                <li>
                                    <a href="../language/copy_language_code.html">
                                        <i class="far fa-clone"></i>Copy Language Codes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-secret"></i>Admin
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="admin_landing.php">
                                        <i class="far fa-calendar-alt"></i>Translations per month and user</a>
                                </li>
                                <li>
                                    <a href="admin_not_translated.html">
                                        <i class="fas fa-exclamation"></i>Missing Translations of Languagetexts</a>
                                </li>
                                <li>
                                    <a href="admin_country_not_translated.html">
                                        <i class="far fa-flag"></i>Missing Translations of Countrynames</a>
                                </li>
                                <li>
                                    <a href="admin_company_list.html">
                                        <i class="fas fa-list"></i>List of Companies</a>
                                </li>
                                <li>
                                    <a href="admin_new_company.html">
                                        <i class="far fa-plus-square"></i>New Company</a>
                                </li>
                                <li>
                                    <a href="admin_credit_point.html">
                                        <i class="fas fa-coins"></i>List Creditpoints</a>
                                </li>
                                
                               
                            </ul>
                        </li>
                         <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-question-circle"></i>Help
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                 <li>
                                    <a href="../help/help_landing.html">
                                        <i class="far fa-file-alt"></i>Web Navigation</a>
                                </li>
                                <li>
                                    <a href="../help/help-user.html">
                                        <i class="far fa-file-alt"></i>User Data and Registration</a>
                                </li>
                                <li>
                                    <a href="../help/help_phrasetexts_translations.html">
                                        <i class="fas fa-globe-europe"></i>Phrasetexts and Translations</a>
                                </li>
                                <li>
                                    <a href="../help/help_phrasecatalogues_mapping.html">
                                        <i class="fas fa-map-signs"></i>Phrasecatalogues and Mapping</a>
                                </li>
                                <li>
                                    <a href="../help/help-import-export.html">
                                        <i class="fas fa-arrows-alt-h"></i>Import and Export</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-tag"></i>Labels</a>
                                </li>
                                
                               
                            </ul>
                        </li>
                        <!--
                        <li>
                            <a href="inbox.html">
                                <i class="fas fa-chart-bar"></i>P</a>
                            <span class="inbox-num">3</span>
                        </li>
                    
                        <li>
                            <a href="#">
                                <i class="fas fa-shopping-basket"></i>eCommerce</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>Features
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="table.html">
                                        <i class="fas fa-table"></i>Tables</a>
                                </li>
                                <li>
                                    <a href="form.html">
                                        <i class="far fa-check-square"></i>Forms</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                                </li>
                                <li>
                                    <a href="map.html">
                                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">
                                        <i class="fas fa-sign-in-alt"></i>Login</a>
                                </li>
                                <li>
                                    <a href="register.html">
                                        <i class="fas fa-user"></i>Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">
                                        <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">
                                        <i class="fab fa-flickr"></i>Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">
                                        <i class="fas fa-comment-alt"></i>Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">
                                        <i class="far fa-window-maximize"></i>Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">
                                        <i class="far fa-id-card"></i>Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">
                                        <i class="far fa-bell"></i>Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">
                                        <i class="fas fa-tasks"></i>Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">
                                        <i class="far fa-window-restore"></i>Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">
                                        <i class="fas fa-toggle-on"></i>Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">
                                        <i class="fas fa-th-large"></i>Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">
                                        <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                </li>
                                <li>
                                    <a href="typo.html">
                                        <i class="fas fa-font"></i>Typography</a>
                                </li>
                            </ul>
                        </li>
                        -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="../../image/icon/logo-white.png" alt="" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search Phrasetext" />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <!--
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            -->
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <!--
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    -->
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="../user/system-status.html">
                                                <i class="fas fa-signal"></i>System Status</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="../privacy/impress.html">
                                                <i class="fas fa-info"></i>Impress</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="../privacy/privacy-statement.html">
                                                <i class="fas fa-lock"></i>Privacy Statement</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="../privacy/debugging.html">
                                                <i class="fas fa-lock"></i>Debugging</a>
                                        </div>
                                        <!--
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="../../images/icon/logo-white.png" alt="" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="../../images/icon/user.jpg" alt="User" />
                        </div>
                        <h4 class="name">User</h4>
                        <a href="#">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>User
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../user/users-list.html">
                                        <i class="fas fa-users"></i>List Of Users</a>
                                </li>
                                <li>
                                    <a href="#.html">
                                        <i class="fas fa-user-plus"></i>New User</a>
                                </li>
                                <li>
                                    <a href="edit-profile.html">
                                        <i class="fas fa-edit"></i>Edit Own Profile</a>
                                </li>
                                <li>
                                    <a href="admin_company_info.html">
                                        <i class="fas fa-eye"></i>View Company</a>
                                </li>
                                <li>
                                    <a href="admin_edit_company.html">
                                        <i class="far fa-edit"></i>Edit Company</a>
                                </li>
                                <li>
                                    <a href="../user/system-status.html">
                                        <i class="fas fa-tachometer-alt"></i>System Status</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Phrasetext
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../phrasetext/phrasetext_landing.html">
                                        <i class="fas fa-search"></i>Search Phrasetext</a>
                                </li>
                                <li>
                                    <a href="../phrasetext/missing_phrasetext.html">
                                        <i class="fas fa-exclamation-circle"></i>Missing Translation</a>
                                </li>
                                <li>
                                    <a href="../phrasetext/list_phraseheads.html">
                                        <i class="fas fa-list-ol"></i>List Phraseheads</a>
                                </li>
                                <li>
                                    <a href="../phrasetext/new_phrasehead.html">
                                        <i class="far fa-plus-square"></i>New Phrasehead</a>
                                </li>
                               
                            </ul>
                        </li>


                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-alt"></i>Phrasecatalogue
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../phrasecatalogue/list_and_map.html">
                                        <i class="fas fa-map-signs"></i>List and Map</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/new_phrasecatalogue.html">
                                        <i class="fas fa-plus"></i>New Phrasecatalogue</a>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow2" href="#">
                                        <i class="fas fa-file-download"></i>Import
                                        <span class="arrow2">
                                           <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class= "list-unstyled navbar__sub-list js-sub-list2">
                                        <li>
                                            <a href="../phrasecatalogue/phrasecatalogue_import.html">
                                                <i class="fas fa-file-download"></i>Phrasecatalogue Import
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../phrasecatalogue/phraseset_import.html">
                                                <i class="fas fa-file-download"></i>Phraseset Import
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../phrasecatalogue/propertytree_import.html">
                                                <i class="fas fa-file-download"></i>Propertytree Import
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow2" href="#">
                                        <i class="fas fa-file-export"></i>Export
                                        <span class="arrow2">
                                            <i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class = "list-unstyled navbar__sub-list js-sub-list2">
                                        <li>
                                            <a href="../phrasecatalogue/phrasecatalogue_export.html">
                                                <i class="fas fa-file-export"></i>Phrasecatalogue Export
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/phrasecatalogue_comparison.html">
                                        <i class="fas fa-greater-than-equal"></i>Phrasecatalogue Comparison</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/resume_phrase_mapping.html">
                                        <i class="fas fa-map"></i>Resume Phrase mapping</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/list_phrasegroup.html">
                                        <i class="fas fa-th-list"></i>List Phrase Group</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/new_phrasegroup.html">
                                        <i class="far fa-file"></i>New Phrase Group</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/compress_phrasecatalogue.html">
                                        <i class="fas fa-compress"></i>Compress Phrasecatalogue</a>
                                </li>
                                <li>
                                    <a href="../phrasecatalogue/list_special_data.html">
                                        <i class="fas fa-eye"></i>View Special Data</a>
                                </li>
                               
                            </ul>
                        </li>

                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Label
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../label/list_label.html">
                                        <i class="fas fa-list"></i>List Labels</a>
                                </li>
                                <li>
                                    <a href="../label/new_label.html">
                                        <i class="fas fa-plus"></i>New Label</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!--
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Property Tree
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        <i class="fas fa-tachometer-alt"></i>List Trees</a>
                                </li>
                                <li>
                                    <a href="index2.html">
                                        <i class="fas fa-tachometer-alt"></i>Property Tree Import</a>
                                </li>
                                <li>
                                    <a href="index3.html">
                                        <i class="fas fa-tachometer-alt"></i>Property Tree Export</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>List Phrasesets</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>Copy Phraseset</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>Phraseset Import</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>Phraseset Export</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>List Properties</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>New Property</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>List Classes</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>List Attributes</a>
                                </li>
                               
                            </ul>
                        </li>
                    -->

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Language
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               <li>
                                    <a href="../language/language_landing.html">
                                        <i class="fas fa-list-ol"></i>List Languages</a>
                                </li>
                                <li>
                                    <a href="../language/new_language.html">
                                        <i class="far fa-plus-square"></i>New Language</a>
                                </li>
                                <li>
                                    <a href="../language/list_language_codes.html">
                                        <i class="far fa-list-alt"></i>List Language Codes</a>
                                </li>
                                <li>
                                    <a href="../language/new_language_code.html">
                                        <i class="fas fa-folder-plus"></i>New Language Code</a>
                                </li>
                                <li>
                                    <a href="../language/copy_language_code.html">
                                        <i class="far fa-clone"></i>Copy Language Codes</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Admin
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                 <li>
                                    <a href="admin_landing.php">
                                        <i class="far fa-calendar-alt"></i>Translations per month and user</a>
                                </li>
                                <li>
                                    <a href="admin_not_translated.html">
                                        <i class="fas fa-exclamation"></i>Missing Translations of Languagetexts</a>
                                </li>
                                <li>
                                    <a href="admin_country_not_translated.html">
                                        <i class="far fa-flag"></i>Missing Translations of Countrynames</a>
                                </li>
                                <li>
                                    <a href="admin_company_list.html">
                                        <i class="fas fa-list"></i>List of Companies</a>
                                </li>
                                <li>
                                    <a href="admin_new_company.html">
                                        <i class="far fa-plus-square"></i>New Company</a>
                                </li>
                                <li>
                                    <a href="admin_credit_point.html">
                                        <i class="fas fa-coins"></i>List Creditpoints</a>
                                </li>
                                
                               
                            </ul>
                        </li>
                         <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Help
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../help/help_landing.html">
                                        <i class="far fa-file-alt"></i>Web Navigation</a>
                                </li>
                                <li>
                                    <a href="../help/help-user.html">
                                        <i class="far fa-file-alt"></i>User Data and Registration</a>
                                </li>
                                <li>
                                    <a href="../help/help_phrasetexts_translations.html">
                                        <i class="fas fa-globe-europe"></i>Phrasetexts and Translations</a>
                                </li>
                                <li>
                                    <a href="../help/help_phrasecatalogues_mapping.html">
                                        <i class="fas fa-map-signs"></i>Phrasecatalogues and Mapping</a>
                                </li>
                                <li>
                                    <a href="../help/help-import-export.html">
                                        <i class="fas fa-arrows-alt-h"></i>Import and Export</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-tag"></i>Labels</a>
                                </li>
                                
                               
                            </ul>
                        </li>
                        <!--
                        <li>
                            <a href="inbox.html">
                                <i class="fas fa-chart-bar"></i>P</a>
                            <span class="inbox-num">3</span>
                        </li>
                    
                        <li>
                            <a href="#">
                                <i class="fas fa-shopping-basket"></i>eCommerce</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>Features
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="table.html">
                                        <i class="fas fa-table"></i>Tables</a>
                                </li>
                                <li>
                                    <a href="form.html">
                                        <i class="far fa-check-square"></i>Forms</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                                </li>
                                <li>
                                    <a href="map.html">
                                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">
                                        <i class="fas fa-sign-in-alt"></i>Login</a>
                                </li>
                                <li>
                                    <a href="register.html">
                                        <i class="fas fa-user"></i>Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">
                                        <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">
                                        <i class="fab fa-flickr"></i>Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">
                                        <i class="fas fa-comment-alt"></i>Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">
                                        <i class="far fa-window-maximize"></i>Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">
                                        <i class="far fa-id-card"></i>Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">
                                        <i class="far fa-bell"></i>Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">
                                        <i class="fas fa-tasks"></i>Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">
                                        <i class="far fa-window-restore"></i>Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">
                                        <i class="fas fa-toggle-on"></i>Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">
                                        <i class="fas fa-th-large"></i>Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">
                                        <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                </li>
                                <li>
                                    <a href="typo.html">
                                        <i class="fas fa-font"></i>Typography</a>
                                </li>
                            </ul>
                        </li>
                        -->
                    </ul>
                </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Admin</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Edit Credit Points</li>
                                        </ul>
                                    </div>
                                    <!--
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->


            <!-- Container Start -->
            <center>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Edit Credit Point</div>
                                <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                
                                                <div class="col col-md-12">
                                                    <br>
                                                    Phrasetext<i style="color: red;">*</i> <br>
                                                    <div class="btn-group">
                                                        <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <option value="1">Value1</option>
                                                                    <option value="2">Value2</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-12">
                                                    <br>
                                                    Company<i style="color: red;">*</i> <br>
                                                    <div class="btn-group">
                                                        <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <option value="1">Rimpido</option>
                                                                    <option value="2">KRKA</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-12">
                                                    <br>
                                                    Value<i style="color: red;">*</i><br>
                                                    <div class="input-group">
                                                        <input type="text" id="input1-group2" name="input1-group2" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col col-md-12">
                                                    <br>
                                                    User<i style="color:red;">*</i> <br>
                                                    <div class="btn-group">
                                                        <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <option value="1">jessaminechaka</option>
                                                                    <option value="2">ruelwenceslao</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                <div class="col col-md-12">
                                                    <br>
                                                    Timestamp<i style="color:red;">*</i><br>
                                                    <div class="btn-group">
                                                        <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <option value="1">January</option>
                                                                    <option value="2">February</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                            <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <?php

                                                                    for ($x = 1; $x < 30; $x++){
                                                                        echo "<option value=". $x .">". $x ."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="btn-group">
                                                            <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <?php

                                                                    for ($x = 1999; $x < 2040; $x++){
                                                                        echo "<option value=". $x .">". $x ."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="btn-group">
                                                            <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <?php

                                                                    for ($x = 1; $x < 13; $x++){
                                                                        echo "<option value=". $x .">". $x ."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="btn-group">
                                                            <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <?php

                                                                    for ($x = 00; $x < 60; $x++){
                                                                        echo "<option value=". $x .">". $x ."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <div class="col-12 col-md-12">
                                                                <select name="select" id="select" class="form-control">
                                                                    <option value="1">AM</option>
                                                                    <option value="2">PM</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                            </div>
                                                
                                            </div>
                                        </form>
                                         <br>
                                             <button type="submit" class="btn btn-success btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                </div>
                        </div>
                    </div>
            </center>

                                <!-- MODAL -->

                                <div class="modal fade" id="deletePhraseHead" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                           <div class="modal-header">
                                                 <h5 class="modal-title" id="smallmodalLabel">Confirm Deletion?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                           </div>
                                <div class="modal-body">
                                    <p>
                                        Are you sure you want to delete this Language?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Confirm</button>
                                </div>
                                        </div>
                                    </div>
                                </div>



            <!-- 
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">10,368</h2>
                                    <span class="desc">members online</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">388,688</h2>
                                    <span class="desc">items sold</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">1,086</h2>
                                    <span class="desc">this week</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">$1,060,386</h2>
                                    <span class="desc">total earnings</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            END STATISTIC-->
            <!--
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8">
                                
                                <div class="recent-report2">
                                    <h3 class="title-3">recent reports</h3>
                                    <div class="chart-info">
                                        <div class="chart-info__left">
                                            <div class="chart-note">
                                                <span class="dot dot--blue"></span>
                                                <span>products</span>
                                            </div>
                                            <div class="chart-note">
                                                <span class="dot dot--green"></span>
                                                <span>Services</span>
                                            </div>
                                        </div>
                                        <div class="chart-info-right">
                                            <div class="rs-select2--dark rs-select2--md m-r-10">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">All Properties</option>
                                                    <option value="">Products</option>
                                                    <option value="">Services</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--dark rs-select2--sm">
                                                <select class="js-select2 au-select-dark" name="time">
                                                    <option selected="selected">All Time</option>
                                                    <option value="">By Month</option>
                                                    <option value="">By Day</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-report__chart">
                                        <canvas id="recent-rep2-chart"></canvas>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-xl-4">
                               
                                <div class="task-progress">
                                    <h3 class="title-3">task progress</h3>
                                    <div class="au-skill-container">
                                        <div class="au-progress">
                                            <span class="au-progress__title">Web Design</span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="90">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">HTML5/CSS3</span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="85">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">WordPress</span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="95">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">Support</span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="95">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        -->
<!--
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6">
                               
                                <div class="user-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>name</td>
                                                    <td>role</td>
                                                    <td>type</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role admin">admin</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user">user</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option value="">Full Control</option>
                                                                <option value="" selected="selected">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user">user</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option value="">Full Control</option>
                                                                <option value="" selected="selected">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role member">member</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-xl-6">
                                
                                <div class="map-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-map"></i>map data</h3>
                                    <div class="filters">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Worldwide</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="map-wrap m-t-45 m-b-80">
                                        <div id="vmap" style="height: 284px;"></div>
                                    </div>
                                    <div class="table-wrap">
                                        <div class="table-responsive table-style1">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>United States</td>
                                                        <td>$119,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td>$70,261.65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>United Kingdom</td>
                                                        <td>$46,399.22</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive table-style1">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Germany</td>
                                                        <td>$20,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>France</td>
                                                        <td>$10,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Russian</td>
                                                        <td>$5,366.96</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>
-->
<!--
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 Rimpido GmbH. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../vendor/slick/slick.min.js">
    </script>
    <script src="../../vendor/wow/wow.min.js"></script>
    <script src="../../vendor/animsition/animsition.min.js"></script>
    <script src="../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../vendor/select2/select2.min.js">
    </script>
    <script src="../../vendor/vector-map/jquery.vmap.js"></script>
    <script src="../../vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="../../vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../../vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="../../js/main.js"></script>

</body>

</html>
<!-- end document-->