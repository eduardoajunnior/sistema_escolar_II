<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Frequenciamoduloaluno */

$this->title = 'Update Frequenciamoduloaluno: ' . $model->idfrequenciamoduloaluno;
$this->params['breadcrumbs'][] = ['label' => 'Frequenciamoduloalunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idfrequenciamoduloaluno, 'url' => ['view', 'idfrequenciamoduloaluno' => $model->idfrequenciamoduloaluno, 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="frequenciamoduloaluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
