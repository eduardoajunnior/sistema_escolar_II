<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConteudoprogramaticoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Conteudoprogramaticos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conteudoprogramatico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Conteudoprogramatico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idconteudoprogramatico',
            'nome',
            'aula',
            'idmodulo',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
