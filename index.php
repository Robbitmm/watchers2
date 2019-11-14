<html>
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">

        <link rel="stylesheet" href="Styles/page.css" /> <!--media="screen and (max-width: 360px)"-->
        <link rel="stylesheet" href="Styles/index.css" />

        <title>Watchers - Home</title>
    </head>

    <body onload="D_button()">
        <?php
            require_once("header.php");
        ?>

        <div class="destaque">
            <img class="destaque" src="Images/Dark/Aside_Dark.png">

            <input class="destaque" type="radio" name="top5" value="primeiro">
            <input class="destaque" type="radio" name="top5" value="segundo">
            <input class="destaque" type="radio" name="top5" value="terceiro">
            <input class="destaque" type="radio" name="top5" value="quarto">
            <input class="destaque" type="radio" name="top5" value="quinto">
        </div>

    </body>
</html>