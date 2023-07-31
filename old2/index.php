<?php ini_set('display_errors', 1); ?>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Systeme ajout noSQL PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>



</head>

<body class="text-center" style="">

    <main class="form-signin  gx-5 row">
        <div class="col-12 col-md-4 p-5">
            <form>
                <h1 class="h3 mb-3 fw-normal">Ajouter une tache</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="taskname" name="taskname" placeholder="Saisissez un nom">
                    <label for="taskname">Nom de la tache</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="taskdesc" name="taskdesc" placeholder="Saisissez une description">
                    <label for="taskdesc">Description de la tache</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="taskdate" id="taskdate">
                    <label for="taskdate">Date limite</label>
                </div>
                <div class="form-floating mb-3">


                    <select name="status" id="taskstatus" class="form-control">
                        <option value="" disabled selected>Choissez un status</option>
                        <option value="A faire">A faire</option>
                        <option value="Urgent">Urgent</option>
                    </select>

                    <label for="taskstatus">Status</label>

                </div>


                <button class="w-100 btn btn-lg btn-primary" type="submit" value="ajouter" name="taskadd">Ajouter</button>

            </form>

            <?php

            /*********************
             * AJOUT D'UNE TACHE *
             *********************/

            if (isset($_GET['taskadd']) && $_GET['taskadd'] == "ajouter") {

                if (!empty($_GET['taskname']) && !empty($_GET['taskdesc']) && !empty($_GET['taskdate'])) {
                    // Récupérer la tâche à ajouter depuis le formulaire ou une autre source
                    $nouvelleTache = $_GET['taskname'] . "+-+" . $_GET['taskdesc'] . "+-+" . $_GET['taskdate'] . "+-+" . $_GET['status'];

                    // Vérifier si le fichier existe déjà
                    if (file_exists('taches.txt')) {
                        // Ouvrir le fichier en mode d'écriture et lecture
                        $fichier = fopen('taches.txt', 'a+');
                    } else {
                        // Créer un nouveau fichier s'il n'existe pas
                        $fichier = fopen('taches.txt', 'w');
                    }

                    // Écrire la nouvelle tâche dans le fichier
                    fwrite($fichier, $nouvelleTache . "\n");

                    // Fermer le fichier
                    fclose($fichier);

                    echo "<script>window.location='./'</script>";

                    //header("Location: ./");
                }
            }




            ?>

        </div>
        <div class="col-12 col-md-8 p-5">
            <h1 class="h3 mb-3 fw-normal">Liste des taches</h1>

            <?php

            /****************
             * MISE A JOUR *
             ****************/

            if (isset($_GET['taskaction']) && $_GET['taskaction'] == "Update") {
                $filename = 'taches.txt'; // Nom du fichier

                // Numéro de la ligne à supprimer
                $lineToUpdate = $_GET['idtoupdate'];

                // Lire le contenu du fichier dans un tableau
                $lines = file($filename);

                // Vérifier si la ligne demandée existe
                if (isset($lines[$lineToUpdate - 1])) {
                    $lineContent = $lines[$lineToUpdate - 1];
                    $parts = explode("+-+", $lineContent);
                    echo " 
                                <form class='row'>
                                <input type='text' name='taskname' class='form-control mb-3' value='" . $parts[0] . "'>
                                <input type='text' name='taskdesc' class='form-control mb-3' value='" . $parts[1] . "'>
                                <input type='date' name='taskdate' class='form-control mb-3' value='" . $parts[2] . "'>
                                <select name='status' class='form-control mb-3'>
                                <option value='" . $parts[3] . "' selected>" . $parts[3] . "</option>
                                <option value='A faire'>A faire</option>
                                <option value='Urgent'>Urgent</option>
                                <option value='Fait'>Fait</option>
                                </select>
                                <input type='hidden' name='idtoupdate' value='" . $_GET['idtoupdate'] . "'>
                                <input type='submit' name='modifier' class='w-50 btn btn-lg btn-primary' value='modifier'>
                                </form>
                                
                                
                                ";
                } else {
                    echo "La ligne $lineToUpdate n'existe pas dans le fichier.";
                }
            }

            if (isset($_GET['modifier']) && $_GET['modifier'] == "modifier") {

                $filename = 'taches.txt'; // Nom du fichier

                // Numéro de la ligne à modifier
                $lineToUpdate = $_GET['idtoupdate'];

                // Nouveau contenu de la ligne
                $newLineContent = $_GET['taskname'] . "+-+" . $_GET['taskdesc'] . "+-+" . $_GET['taskdate'] . "+-+" . $_GET['status'];

                // Lire le contenu du fichier dans un tableau
                $lines = file($filename);

                // Vérifier si la ligne à modifier existe
                if (isset($lines[$lineToUpdate - 1])) {
                    // Modifier le contenu de la ligne dans le tableau
                    $lines[$lineToUpdate - 1] = $newLineContent . "";

                    // Réécrire le contenu modifié dans le fichier
                    file_put_contents($filename, implode('', $lines));

                    echo "La ligne $lineToUpdate a été modifiée avec succès dans le fichier.";
                    echo "<script>window.location='./'</script>";
                } else {
                    echo "La ligne $lineToUpdate n'existe pas dans le fichier.";
                }
            }
            ?>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nom de la tache</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date limite</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Vérifier si le fichier existe
                        if (file_exists('taches.txt')) {
                            // Lire le contenu du fichier dans une variable
                            $contenu = file_get_contents('taches.txt');

                            // Diviser le contenu en un tableau de tâches
                            $taches = explode("\n", $contenu);

                            // Afficher chaque tâche
                            for ($i = 0; $i < count($taches) - 1; $i++) {

                                echo "<tr>";
                                $tacheUnitaire = explode("+-+", $taches[$i]);
                                for ($j = 0; $j < count($tacheUnitaire); $j++) {
                                    echo "<td>" . $tacheUnitaire[$j] . "</td>";
                                }


                                echo "<td><a href='?taskaction=Supprimer&idtodelete=" . ($i + 1) . "'>Supprimer</a> <a href='?taskaction=Update&idtoupdate=" . ($i + 1) . "'>Mettre a jour</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "Le fichier des tâches n'existe pas.";
                        }

                        /***************
                         * SUPPRESSION *
                         ***************/

                        if (isset($_GET['taskaction']) && $_GET['taskaction'] == "Supprimer") {
                            $filename = 'taches.txt'; // Nom du fichier

                            // Numéro de la ligne à supprimer
                            $lineToDelete = $_GET['idtodelete'];

                            // Lire le contenu du fichier dans un tableau
                            $lines = file($filename);

                            // Vérifier si la ligne à supprimer existe
                            if (isset($lines[$lineToDelete - 1])) {
                                // Supprimer la ligne du tableau
                                unset($lines[$lineToDelete - 1]);

                                // Réindexer le tableau
                                $lines = array_values($lines);

                                // Réécrire le contenu modifié dans le fichier
                                file_put_contents($filename, implode('', $lines));



                                echo "La ligne $lineToDelete a été supprimée avec succès du fichier.";
                                echo "<script>window.location='./'</script>";
                            } else {
                                echo "La ligne $lineToDelete n'existe pas dans le fichier.";
                            }
                        }





                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>





</body>

</html>