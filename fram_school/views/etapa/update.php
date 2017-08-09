<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Etapa */

$this->title = 'Update Etapa: ' . $model->idetapa;
$this->params['breadcrumbs'][] = ['label' => 'Etapas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idetapa, 'url' => ['view', 'id' => $model->idetapa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etapa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
