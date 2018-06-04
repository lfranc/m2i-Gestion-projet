<?php

    require_once '../lib_php/Connexion.class.php';
    require_once '../lib_php/Transaxion.class.php';
    require_once '../daos/DeveloppeurDAO.php';
    require_once '../entities/Developpeur.php';
//require_once '../';

    $pdo = Connexion::seConnecter("../conf/bd.ini");

    $action = filter_input(INPUT_GET, "action");
    if ($action == null) {
                $action = filter_input(INPUT_POST, "action");
    }

    $lsContenu = "";
    $lsMessage = "";

    $id = "";
    $lsNom = "";
    $lsPrenom = "";
    $lsLangages = "";

//if ($action == null) {
//    $action = "selectAll";
//}

    switch ($action) {

                //...cas de l'insert
                case "DeveloppeurInsert":
                            include '../boundaries/DeveloppeurInsertIHM.php';
                            break;

                //...cas de l'InsertValidation en hidden
                case "DeveloppeurInsertValidation":
                            /*
                             * APPEL AU DAO
                             */
                            $idDeveloppeur = filter_input(INPUT_POST, "idDeveloppeur");
                            $nomDeveloppeur = filter_input(INPUT_POST, "nomDeveloppeur");
                            $prenomDeveloppeur = filter_input(INPUT_POST, "prenomDeveloppeur");
                            $langagesDeveloppeur = filter_input(INPUT_POST, "langagesDeveloppeur");

                            if ($idDeveloppeur != null && $nomDeveloppeur != null && $prenomDeveloppeur != null && $langagesDeveloppeur != null) {
                                        Transaxion::initialiser($pdo);
                                        $DeveloppeurDAO = new DeveloppeurDAO($pdo);
                                        $Developpeur = new Developpeur($idDeveloppeur, $nomDeveloppeur, $prenomDeveloppeur, $langagesDeveloppeur);
                                        $lsMessage = $DeveloppeurDAO->insert($Developpeur) . " enregistrement ajouté";
                                        Transaxion::valider($pdo);
                            } else {
                                        $lsMessage = "Toutes les saisies sont obligatoires";
                            }
                            include '../boundaries/DeveloppeurInsertIHM.php';
                            break;

                //...cas du selectAll
                case "DeveloppeurSelectAll":
                            $lsContenu = "";
                            //....instanciation de l'objet ProjetDAO
                            $DeveloppeurDAO = new DeveloppeurDAO($pdo);
                            $tLines = $DeveloppeurDAO->selectAll();
//        echo "<br><pre>";
//        var_dump($tLines);
//        echo "</pre><br>";
//        exit;
                            //....on boucle sur chaque ligne et valorisation 
                            foreach ($tLines as $line) {
                                        $lsContenu .= "<tr>\n";
                                        $lsContenu .= "<td class='borde'>" . $line->getIdDeveloppeur() . "</td>\n";
                                        $lsContenu .= "<td class='borde'>" . $line->getNomDeveloppeur() . "</td>\n";
                                        $lsContenu .= "<td class='borde'>" . $line->getPrenomDeveloppeur() . "</td>\n";
                                        $lsContenu .= "<td class='borde'>" . $line->getLangagesDeveloppeur() . "</td>\n";

                                        $lsContenu .= "</tr>\n";
                            }
                            include '../boundaries/DeveloppeurSelectAllIHM.php';
                            break;

                //...cas du Delete
                case "DeveloppeurDelete":
                            include '../boundaries/DeveloppeurDeleteIHM.php';
                            break;

                //...cas du deleteValidation en hidden
                case "DeveloppeurDeleteValidation":
                            /*
                             * APPEL AU DAO
                             */
                            $idDeveloppeur = filter_input(INPUT_POST, "idDeveloppeur");
                            $nomDeveloppeur = filter_input(INPUT_POST, "nomDeveloppeur");

                            if ($idDeveloppeur != null) {
                                        Transaxion::initialiser($pdo);
                                        $DeveloppeurDAO = new DeveloppeurDAO($pdo);
                                        $Developpeur = new Developpeur($idDeveloppeur, $nomDeveloppeur);
                                        $lsMessage = $DeveloppeurDAO->delete($Developpeur) . " enregistrement supprimé";
                                        Transaxion::valider($pdo);
                            } else {
                                        $lsMessage = "Toutes les saisies sont obligatoires";
                            }
                            include '../boundaries/DeveloppeurDeleteIHM.php';
                            break;












                case "DeveloppeurUpdate":

                            $DeveloppeurDAO = new DeveloppeurDAO($pdo);
                            $tLines = $DeveloppeurDAO->selectAll();

                            include '../boundaries/DeveloppeurUpdateIHM.php';
                            break;

                case "DeveloppeurUpdateSelection":

                            $DeveloppeurDAO = new DeveloppeurDAO($pdo);
                            $tLines = $DeveloppeurDAO->selectAll();

                            $id = filter_input(INPUT_POST, "listeDeveloppeurs");
                            $dev = $DeveloppeurDAO->selectOne($id);

                            $lsNom = $dev->getNomDeveloppeur();
                            $lsPrenom = $dev->getPrenomDeveloppeur();
                            $lsLangages = $dev->getLangagesDeveloppeur();



                            include '../boundaries/DeveloppeurUpdateIHM.php';
                            break;

                //...cas du UpdateValidation en hidden
                case "DeveloppeurUpdateValidation":
                            /*
                             * APPEL AU DAO
                             */

                            $DeveloppeurDAO = new DeveloppeurDAO($pdo);
                            $tLines = $DeveloppeurDAO->selectAll();


                            $idDeveloppeur = filter_input(INPUT_POST, "idDeveloppeur");
                            $nomDeveloppeur = filter_input(INPUT_POST, "nomDeveloppeur");
                            $prenomDeveloppeur = filter_input(INPUT_POST, "prenomDeveloppeur");
                            $langagesDeveloppeur = filter_input(INPUT_POST, "langagesDeveloppeur");


                            if ($idDeveloppeur != null && $nomDeveloppeur != null && $prenomDeveloppeur != null && $langagesDeveloppeur != null) {
                                        Transaxion::initialiser($pdo);
                                        $DeveloppeurDAO = new DeveloppeurDAO($pdo);
                                        $Developpeur = new Developpeur($idDeveloppeur, $nomDeveloppeur, $prenomDeveloppeur,$langagesDeveloppeur);
                                        $lsMessage = $DeveloppeurDAO->update($Developpeur) . " enregistrement modifié";
                                        Transaxion::valider($pdo);
                            } else {
                                        $lsMessage = "Toutes les saisies sont obligatoires";
                            }
                            include '../boundaries/DeveloppeurUpdateIHM.php';
                            break;

                default:
                            include '../boundaries/AccueilIHM.php';
                            break;
    }
?>    














