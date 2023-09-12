<?php
ob_start();
?>
<div class="col">
    <h2>Action</h2>
    <p class="alert alert-info"> <?= $cequejedoisfaire; ?></p>
</div>

<?php
$title = $titreDelaPage;
$ordreDeKevin =  ob_get_clean();
require_once('baseTemplate.php');

?>