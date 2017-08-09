<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Frequenciamoduloaluno */

$this->title = 'Create Frequenciamoduloaluno';
$this->params['breadcrumbs'][] = ['label' => 'Frequenciamoduloalunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frequenciamoduloaluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
