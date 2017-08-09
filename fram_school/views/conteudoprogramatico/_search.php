<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConteudoprogramaticoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="conteudoprogramatico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idconteudoprogramatico') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'aula') ?>

    <?= $form->field($model, 'idmodulo') ?>

    <?= $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
