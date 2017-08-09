<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\horario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'segunda')->textInput() ?>

    <?= $form->field($model, 'terca')->textInput() ?>

    <?= $form->field($model, 'quarta')->textInput() ?>

    <?= $form->field($model, 'quinta')->textInput() ?>

    <?= $form->field($model, 'sexta')->textInput() ?>

    <?= $form->field($model, 'sabado')->textInput() ?>

    <?= $form->field($model, 'horainicio')->textInput() ?>

    <?= $form->field($model, 'horafim')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
