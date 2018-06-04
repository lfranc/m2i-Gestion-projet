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
                        <title>ProjetUpdateIHM.php</title>
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
                                    <h1>Modifier un projet</h1>

                                    <form action='../controls/MainControl.php' method='POST'>
                                                <select name="listeProjet">
                                                            <?php
                                                                //echo $lsContenu;
                                                                //$lsContenu = "";
                                                                for ($i = 0; $i < count($tLines); $i++) {
                                                                            $line = $tLines[$i];
                                                                            ?>

                                                                            <option value="<?php echo $line->getIdDeveloppeur(); ?>"><?php echo $line->getNomDeveloppeur(); ?></option>

                                                                            <?php
                                                                }
                                                            ?>
                                                </select>

                                                <table class='formulaireTable'>
                                                            <tr>
                                                                        <td>
                                                                                    <label for='idProjet' class='etiquette'>Id projet</label>
                                                                        </td>
                                                                        <td>
                                                                                    <input type='text' value='100' name='idProjet' id='idProjet' />
                                                                        </td>
                                                            </tr>
                                                            <tr>
                                                                        <td>
                                                                                    <label for='nomProjet' class='etiquette'>Nom projet</label>
                                                                        </td>
                                                                        <td>
                                                                                    <input type='text' value='Redis Paris Picpus' name='nomProjet' id='nomProjet' />
                                                                        </td>
                                                            </tr>
                                                            <tr>
                                                                        <td>
                                                                                    <label for='dateDebut' class='etiquette'>Date debut</label>
                                                                        </td>
                                                                        <td>
                                                                                    <input type='text' value='2018-04-01' name='dateDebut' id='dateDebut' />
                                                                        </td>
                                                            </tr>
                                                            <tr>
                                                                        <td>
                                                                                    <label for='description' class='etiquette'>Description</label>
                                                                        </td>
                                                                        <td>
                                                                                    <input type='text' value='Redis' name='description' id='description' />
                                                                        </td>
                                                            </tr>
                                                            <tr>
                                                                        <td>
                                                                                    <input type="hidden" name="action" value="ProjetUpdateValidation" />
                                                                        </td>
                                                                        <td>
                                                                                    <button type='submit'>Modifier</button>
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
