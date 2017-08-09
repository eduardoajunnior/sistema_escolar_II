<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ModuloAluno */

$this->title = $model->idaluno;
$this->params['breadcrumbs'][] = ['label' => 'Modulo Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modulo-aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo], [
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
            'idaluno',
            'idmodulo',
            'nota1',
            'nota2',
        ],
    ]) ?>

</div>
