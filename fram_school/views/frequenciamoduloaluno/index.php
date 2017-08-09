<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FrequenciamoduloalunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Frequenciamoduloalunos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frequenciamoduloaluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Frequenciamoduloaluno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idfrequenciamoduloaluno',
            'data_',
            'presente',
            'idaluno',
            'idmodulo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
