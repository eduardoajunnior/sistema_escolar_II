<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModuloAlunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modulo Alunos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modulo-aluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Modulo Aluno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idaluno',
            'idmodulo',
            'nota1',
            'nota2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
