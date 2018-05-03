<?php $title = 'error'; ?>

<?php ob_start(); ?>

<div class="spacer-container">
    <h1>Erreur 404</h1>
    <a href="./index.php?action=home">retour à l'accueil</a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
