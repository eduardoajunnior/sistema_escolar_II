<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Feriado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feriado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idferiado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inicio_feriado')->textInput() ?>

    <?= $form->field($model, 'fim_feriado')->textInput() ?>

    <?= $form->field($model, 'idetapa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
