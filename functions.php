<?php
function connectToDatabase()
{
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'live_task';
    $charset = 'utf8mb4';

    try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $pdo = new PDO($dsn, $username, $password);
        return $pdo;
    } catch (PDOException $e) {
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }
}



/*************************************
 * RECUPERATION DE TOUTES LES TACHES *
 *************************************/
function getTasks(){
    $query = "SELECT * FROM task";
    $stmt = connectToDatabase()->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

/****************************
 * RECUPERATION D'UNE TACHE *
 ****************************/
function getTask(){
    $query = "SELECT * FROM task WHERE id_task=:idTask";
    $stmt = connectToDatabase()->prepare($query);
    $stmt->bindValue(':idTask', $_GET['idtoupdate']);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result; 
}

/*********************
 * AJOUT D'UNE TACHE *
 *********************/
function addTask(){
    $query = "INSERT INTO task (id_task, name_task, desc_task, date_task, status_task) VALUES (NULL, ?, ?, ?, ?)";
    $stmt = connectToDatabase()->prepare($query);
    $params = [$_GET['taskname'], $_GET['taskdesc'], $_GET['taskdate'], $_GET['status']];
    $stmt->execute($params);
    echo "<script>window.location='./'</script>";
}

/***************************
 * MISE A JOUR D'UNE TACHE *
 ***************************/
function updateTask(){
    $query = "UPDATE task SET name_task=?, desc_task=?, date_task=?, status_task=? WHERE task.id_task = ?";
    $stmt = connectToDatabase()->prepare($query);
    $stmt->execute([$_GET['taskname'], $_GET['taskdesc'], $_GET['taskdate'], $_GET['status'], $_GET['idtoupdate']]);
    // $stmt->debugDumpParams();
    //debugDumpParams() sert à verifier ce qui est envoyé. 
   echo "<script>window.location='./'</script>";
}

/***************************
 * SUPPRESSION D'UNE TACHE *
 ***************************/
function deleteTask(){
    $query = "DELETE FROM task WHERE task.id_task = ?";
    $stmt = connectToDatabase()->prepare($query);
    $stmt->execute([$_GET['idtodelete']]);
    echo "<script>window.location='./'</script>";
}
