<?php ini_set('display_errors',1); ?>

<form action="completeProfile.php" method="GET">
    <input type="text" id="test" name="login" placeholder="Saisissez login">
    <input type="password" name="passwd" id="password">
    <input type="submit" value="Se connecter">
</form>
<!-- 
<?php
if(isset($_GET['login']) && isset($_GET['passwd']) && !empty($_GET['passwd']) && !empty($_GET['login'])){
    ?>
    Ici nous allons récupérer les valeurs<br/>
    Le login que vous avez saisi est : <?php echo $_GET['login']; ?><br/>
    Le mot de passe que vous avez saisi est : <?php echo $_GET['passwd']; ?><br/>
<?php }

?> -->



