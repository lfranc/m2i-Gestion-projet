<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
            <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width">
                        <link rel="stylesheet" type="text/css" href="../css/main.css">
                        <link rel="stylesheet" type="text/css" href="../css/nav.css">
                        <title>Accueil Gestion de projet</title>
            </head>

            <body>
                        <header id="header">
                                    <?php
                                        include 'partials/Header.php';
                                    ?>
                        </header>

                        <nav id="nav">
                                    <?php
                                        include 'partials/Nav.php';
                                    ?>
                        </nav>

                        <article id="article">
                                    <h1>Accueil Gestion de projet</h1>
                                    <img src="../images/santella_femme_au_restaurant.jpg" alt="Image Accueil" />
                                    <p>
                                                <label id='lblMessage'>
                                                            <?php
                                                               // echo $lsMessage;
                                                            ?>
                                                </label>
                                    </p>

                        </article>

                        <footer id="js-footer" class="footer">
                                    <?php
                                        include 'partials/Footer.php';
                                    ?>
                        </footer>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                        <script type="text/javascript" src="../js/main.js"></script>
            </body>
</html>
