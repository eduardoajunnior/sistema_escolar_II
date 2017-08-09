<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Frequenciamoduloaluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="frequenciamoduloaluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data_')->textInput() ?>

    <?= $form->field($model, 'presente')->textInput() ?>

    <?= $form->field($model, 'idaluno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idmodulo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
