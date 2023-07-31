<?php ini_set('display_errors', 1);
require_once('functions.php');
?>




<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Systeme ajout PHP/SQL</title>
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
                addTask();
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
                $contenu = getTask();
           
                echo " 
                                <form class='row'>
                                <input type='text' name='taskname' class='form-control mb-3' value='" . htmlspecialchars($contenu['name_task'], ENT_QUOTES, 'UTF-8') . "'>
                                <input type='text' name='taskdesc' class='form-control mb-3' value='" . htmlspecialchars($contenu['desc_task'], ENT_QUOTES, 'UTF-8')  . "'>
                                <input type='date' name='taskdate' class='form-control mb-3' value='" . $contenu['date_task'] . "'>
                                <select name='status' class='form-control mb-3'>
                                <option value='" . $contenu['status_task'] . "' selected>" . $contenu['status_task'] . "</option>
                                <option value='A faire'>A faire</option>
                                <option value='Urgent'>Urgent</option>
                                <option value='Fait'>Fait</option>
                                </select>
                                <input type='hidden' name='idtoupdate' value='" . $contenu['id_task'] . "'>
                                <input type='submit' name='modifier' class='w-50 btn btn-lg btn-primary' value='modifier'>
                                </form>                   
                                ";
            }

            if (isset($_GET['modifier']) && $_GET['modifier'] == "modifier") {
                updateTask();
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

                        $contenu = getTasks();
                        // Afficher chaque tâche
                        for ($i = 0; $i < count($contenu); $i++) {
                            echo "<tr>";
                            echo "<td>" . $contenu[$i]['name_task'] . "</td>";
                            echo "<td>" . $contenu[$i]['desc_task'] . "</td>";
                            echo "<td>" . $contenu[$i]['date_task'] . "</td>";
                            echo "<td>" . $contenu[$i]['status_task'] . "</td>";
                            echo "<td><a href='?taskaction=Supprimer&idtodelete=" . ($contenu[$i]['id_task']) . "'>Supprimer</a> <a href='?taskaction=Update&idtoupdate=" . ($contenu[$i]['id_task']) . "'>Mettre a jour</a></td>";
                            echo "</tr>";
                        }
                        /***************
                         * SUPPRESSION *
                         ***************/
                        if (isset($_GET['taskaction']) && $_GET['taskaction'] == "Supprimer") {
                            deleteTask();
                        }





                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>





</body>

</html>