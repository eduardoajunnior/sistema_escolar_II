<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cursomodulo */

$this->title = 'Create Cursomodulo';
$this->params['breadcrumbs'][] = ['label' => 'Cursomodulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cursomodulo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
