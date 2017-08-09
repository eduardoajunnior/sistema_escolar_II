<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cursomodulo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cursomodulo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idmodulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcurso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ordem')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
