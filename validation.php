<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish-portfolio - Bootstrap Theme</title>

    <!-- CSS: Bootstrap, stylish portfolio, FA5 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">

</head>

<body id="page-top" class="scroll-nav" style="overflow-x: hidden;">
    
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper" class="color-scheme-darker">
        <ul id="main-nav" class="sidebar-nav text-uppercase" style="font-size: 14px;">
            <li class="sidebar-brand">
                <a class="js-scroll-trigger nounderline" href="http://r0766008.sinners.be/Codon">Codon</a>
            </li>
            <li id="menu_item0" class="sidebar-nav-item current">
                <a class="js-scroll-trigger" href="http://r0766008.sinners.be/Codon">Home</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex color-scheme-primary">
        <div class="container my-auto text-white" style="z-index: 1;">
            <?php if (isset($_POST["voornaam"]) && $_POST["voornaam"] != "" && isset($_POST["achternaam"]) && $_POST["achternaam"] != "") echo "<h1>Hallo, ".$_POST["voornaam"]." ".$_POST["achternaam"]."</h1>\n"; else echo "<h1>Hallo, John Doe</h1>\n"; ?>
            <h3 class="mb-5">
                <em><?php if (isset($_POST["email"]) && $_POST["email"] != "") echo "Je email adres is ".$_POST["email"]."\n"; else echo "Je hebt geen email adres doorgegeven\n"; ?></em>
            </h3>
            <blockquote class="blockquote">
                <p class="mb-0"><?php if (isset($_POST["checkbox"]) && $_POST["checkbox"] == "ja") echo "Je wilt emails ontvangen op het doorgegeven email adres.\n"; else echo "Je wilt geen emails ontvangen.\n"; ?></p>
                <?php if (isset($_POST["bericht"]) && $_POST["bericht"] != "") echo "<h4>Bericht</h4><p class='blockquote-footer'>".$_POST["bericht"]."</p>\n"; else echo "<h2>Geen bericht</h2>\n"; ?>
            </blockquote>
        </div>
        <div class="overlay my-auto"><img src="img/programming.png" alt="Programmeer talen" class="img-fluid" style="width: 60%; position: absolute; right: -6%; top: 5%; transform: rotate(30deg);">
        </div>
    </header>

    <!-- JS: jQuery, Bootstrap, stylish portfolio -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="js/stylish-portfolio.min.js"></script>
    <script src="js/navigation.js"></script>

</body>

</html>
