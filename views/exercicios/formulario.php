<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>

<h2>Formulário de Cadastro</h2>
<br>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'nome') ?>
    <?= $form->field($model, 'idade') ?>
    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar Dados', ['class'=>'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end() ?>