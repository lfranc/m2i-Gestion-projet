<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require_once '../entities/Developpeur.php';
?>
<html>
            <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width">
                        <link rel="stylesheet" type="text/css" href="../css/main.css">
                        <link rel="stylesheet" type="text/css" href="../css/nav.css">
                        <title>DeveloppeurUpdateIHM.php</title>
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
                                    <h1>Modifier le Profile d'un  Developpeur</h1>
                                    
                                    <?php echo $lsNom;  ?>

                                    <form action='../controls/DeveloppeurControl.php' method='POST'>
                                                <select name="listeDeveloppeurs">
                                                            <?php
                                                                //echo $lsContenu;
                                                                //$lsContenu = "";
                                                                //$tLines = "";
                                                                for ($i = 0; $i < count($tLines); $i++) {
                                                                            $line = $tLines[$i];
                                                                            ?>

                                                                                            <option value="<?php echo $line->getIdDeveloppeur(); ?>"><?php echo $line->getNomDeveloppeur(); ?></option>

                                                                            <?php
                                                                }
                                                            ?>
                                                </select>
                                                <input type="hidden" name="action" value="DeveloppeurUpdateSelection" />
                                                <button type='submit'>Sélectionner</button>
                                    </form>


                                    <form action='../controls/DeveloppeurControl.php' method='POST'>
                                                <table class='formulaireTable'>
                                                            <tr>
                                        <!--                        <td>
                                                                    <label for='idDeveloppeur' class='etiquette'>Id Developpeur</label>
                                                                </td>-->
                                                                        <td>
                                                                                    <input type='hidden' value='<?php echo $id; ?>' name='idDeveloppeur' id='idDeveloppeur' />
                                                                        </td>
                                                            </tr>
                                                            <tr>
                                                                        <td>
                                                                                    <label for='nomDeveloppeur' class='etiquette'>Nom Developpeur</label>
                                                                        </td>
                                                                        <td>
                                                                                    <input type='text' value='<?php echo $lsNom; ?>' name='nomDeveloppeur' id='nomDeveloppeur' />
                                                                        </td>
                                                            </tr>
                                                            <tr>
                                                                        <td>
                                                                                    <label for='prenomDeveloppeur' class='etiquette'>Prénom Developpeur</label>
                                                                        </td>
                                                                        <td>
                                                                                    <input type='text' value='<?php echo $lsPrenom; ?>' name='prenomDeveloppeur' id='prenomDeveloppeur' />
                                                                        </td>
                                                            </tr>
                                                            <tr>
                                                                        <td>
                                                                                    <label for='langagesDeveloppeur' class='etiquette'>Langages Developpeur</label>
                                                                        </td>
                                                                        <td>
                                                                                    <input type='text' value='<?php echo $lsLangages; ?>' name='langagesDeveloppeur' id='langagesDeveloppeur' />
                                                                        </td>
                                                            </tr>


                                                            <tr>
                                                                        <td>
                                                                                    <input type="hidden" name="action" value="DeveloppeurUpdateValidation" />
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


