<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Conteudoprogramatico */

$this->title = 'Update Conteudoprogramatico: ' . $model->idconteudoprogramatico;
$this->params['breadcrumbs'][] = ['label' => 'Conteudoprogramaticos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idconteudoprogramatico, 'url' => ['view', 'id' => $model->idconteudoprogramatico]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="conteudoprogramatico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
