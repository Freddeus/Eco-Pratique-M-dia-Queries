<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" href="img/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">	
    <!-- FANCYBOX -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

    <link rel="stylesheet" href="css/style.css">

    <title>
            <?php
            if  (strpos ($_SERVER ['PHP_SELF'],"index")) {
                echo "Accueil";
            } elseif (strpos ($_SERVER ['PHP_SELF'],"circuit")) {
                echo "Circuit court";
            } elseif (strpos ($_SERVER ['PHP_SELF'],"contact")) {
                echo "Contact";
            } elseif (strpos ($_SERVER ['PHP_SELF'],"economie")) {
                echo "Economie";
            }elseif (strpos ($_SERVER ['PHP_SELF'],"recyclage")) {
            echo "Recyclage";
            }

            ?>  
        </title>
</head>
<body>
    <header>
        <div class="header-top">
            <div id="container" class="imageLogo">
                <div class="logo-header-top">
                    <a>
                        <img src="img/main-logo.png" alt="Image" class="logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div id="container">
                <div class="el-hd-bot1">
                    <nav class="nav-hd-bt-left">
                        <ul>
                            <li><a class="a-start" href="index.php" title="Accueil">Accueil</a></li>
                            <li><a href="recyclage.php" title="Recyclage">Recyclage</a></li>
                            <li><a href="economie_energie.php" title="Economie d'énergie">Economie d'énergie</a></li>
                            <li><a href="circuit_court.php" title="Circuit court">Circuit court</a></li>
                            <li><a href="contact.php" title="Contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>    
    </header>
