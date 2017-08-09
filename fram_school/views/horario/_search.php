<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\horarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idhorario') ?>

    <?= $form->field($model, 'segunda') ?>

    <?= $form->field($model, 'terca') ?>

    <?= $form->field($model, 'quarta') ?>

    <?= $form->field($model, 'quinta') ?>

    <?php // echo $form->field($model, 'sexta') ?>

    <?php // echo $form->field($model, 'sabado') ?>

    <?php // echo $form->field($model, 'horainicio') ?>

    <?php // echo $form->field($model, 'horafim') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
