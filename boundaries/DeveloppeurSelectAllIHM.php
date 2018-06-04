

<!DOCTYPE html>
<!--
DeveloppeurSelectAllIHM.php
-->
<html>
            <head>
                        <meta charset="UTF-8">
                        <link rel="stylesheet" type="text/css" href="../css/main.css">
                        <link rel="stylesheet" type="text/css" href="../css/nav.css">
                        <title>DeveloppeurSelectAllIHM</title>
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
                                    <h1>Developpeur</h1>
                                    <table>
                                                <thead>
                                                            <tr>
                                                                        <th class='borde'>ID</th>
                                                                        <th class='borde'>Nom</th>
                                                                        <th class='borde'>Prénom</th>
                                                                        <th class='borde'>Langages</th>
                                                            </tr>
                                                </thead>
                                                <tbody>
                                                            <?php
                                                                echo $lsContenu;
                                                            ?>
                                                </tbody>
                                    </table>
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

