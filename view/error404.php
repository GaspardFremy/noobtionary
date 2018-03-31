<?php $title = 'error'; ?>

<?php ob_start(); ?>


<h1>Erreur 404</h1>
<a href="./index.php?action=home">retour à l'accueil</a>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
