<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModuloAlunoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modulo-aluno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idaluno') ?>

    <?= $form->field($model, 'idmodulo') ?>

    <?= $form->field($model, 'nota1') ?>

    <?= $form->field($model, 'nota2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
