<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Upload de Arquivos';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Upload de Arquivos</h1>
    </div>

    <div class="body-content">
        <?php $form = ActiveForm::begin() ?>
            <?= $form->field($model, 'nome') ?>
            <?= $form->field($model, 'fotoCliente')->fileInput() ?>

            <?= Html::submitButton('Salvar', ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end()?>
    </div>
</div>
