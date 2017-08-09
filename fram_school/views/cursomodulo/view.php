<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cursomodulo */

$this->title = $model->idmodulo;
$this->params['breadcrumbs'][] = ['label' => 'Cursomodulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cursomodulo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idmodulo' => $model->idmodulo, 'idcurso' => $model->idcurso], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idmodulo' => $model->idmodulo, 'idcurso' => $model->idcurso], [
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
            'idmodulo',
            'idcurso',
            'ordem',
        ],
    ]) ?>

</div>
