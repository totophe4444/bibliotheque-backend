<?php 
ob_start(); 
?>
<div class="alert alert-danger" role="alert">
    <?= $erreurMsg ?>
</div>
<?php
$content = ob_get_clean();
$titre = "Erreurs" ;
require "vue/template.view.php";
?>