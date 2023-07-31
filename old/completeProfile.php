<h1>Merci de compléter votre profil : </h1>
<form action="">
    <label for="nom">Nom</label>
    <input type="text" name="nom" value="" id="nom">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" value="" id="prenom">
    <label for="login">Login</label>
    <input type="text" name="login" value="<?php echo $_GET['login']; ?>" id="login" disabled>
    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp" value="<?php echo $_GET['passwd']; ?>" id="mdp" disabled>
</form>