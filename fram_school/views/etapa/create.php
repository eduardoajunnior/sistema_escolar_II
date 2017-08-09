<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Etapa */

$this->title = 'Create Etapa';
$this->params['breadcrumbs'][] = ['label' => 'Etapas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
