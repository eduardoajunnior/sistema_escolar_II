<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FeriadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feriado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idferiado') ?>

    <?= $form->field($model, 'inicio_feriado') ?>

    <?= $form->field($model, 'fim_feriado') ?>

    <?= $form->field($model, 'idetapa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
