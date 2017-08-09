<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ModuloAluno */

$this->title = 'Update Modulo Aluno: ' . $model->idaluno;
$this->params['breadcrumbs'][] = ['label' => 'Modulo Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idaluno, 'url' => ['view', 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modulo-aluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
