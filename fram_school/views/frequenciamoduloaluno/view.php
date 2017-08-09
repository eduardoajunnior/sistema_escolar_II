<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Frequenciamoduloaluno */

$this->title = $model->idfrequenciamoduloaluno;
$this->params['breadcrumbs'][] = ['label' => 'Frequenciamoduloalunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frequenciamoduloaluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idfrequenciamoduloaluno' => $model->idfrequenciamoduloaluno, 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idfrequenciamoduloaluno' => $model->idfrequenciamoduloaluno, 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idfrequenciamoduloaluno',
            'data_',
            'presente',
            'idaluno',
            'idmodulo',
        ],
    ]) ?>

</div>
