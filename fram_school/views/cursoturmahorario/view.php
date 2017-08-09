<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cursoturmahorario */

$this->title = $model->idhorario;
$this->params['breadcrumbs'][] = ['label' => 'Cursoturmahorarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cursoturmahorario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idhorario' => $model->idhorario, 'idcurso' => $model->idcurso], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idhorario' => $model->idhorario, 'idcurso' => $model->idcurso], [
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
            'idhorario',
            'idcurso',
            'status',
        ],
    ]) ?>

</div>
