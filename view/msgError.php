<?php $title = 'msg error'; ?>
<?php $headernav = 'activate'; ?>

<?php ob_start(); ?>

    <div class="spacer-container">
        <div class="alert alert-danger my-5" role="alert">
            <h4 class="alert-heading">Erreur</h4>
            <?= $msgError ?>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>
