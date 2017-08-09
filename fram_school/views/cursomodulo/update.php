<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cursomodulo */

$this->title = 'Update Cursomodulo: ' . $model->idmodulo;
$this->params['breadcrumbs'][] = ['label' => 'Cursomodulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmodulo, 'url' => ['view', 'idmodulo' => $model->idmodulo, 'idcurso' => $model->idcurso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cursomodulo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
