

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
        <title>DeveloppeurDeleteIHM.php</title>
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
            <h1>Supprimer un Developpeur</h1>
            <form action='../controls/DeveloppeurControl.php' method='POST'>
                <table class='formulaireTable'>
                    <tr>
                        <td>
                            <label for='idDeveloppeur' class='etiquette'>Id Developpeur</label>
                        </td>
                        <td>
                            <input type='text' value='100' name='idDeveloppeur' id='idProjet' />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='nomDeveloppeur' class='etiquette'>Nom Developpeur</label>
                        </td>
                        <td>
                            <input type='text' value='' name='nomDeveloppeur' id='nomProjet' />
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            <input type="hidden" name="action" value="DeveloppeurDeleteValidation" />
                        </td>
                        <td>
                            <button type='submit'>Supprimer</button>
                        </td>
                    </tr>
                </table>
            </form>
            <p>
                <label id='lblMessage'>
                    <?php
                    echo $lsMessage;
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



