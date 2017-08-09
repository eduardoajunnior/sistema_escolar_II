<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cursoturmahorario */

$this->title = 'Update Cursoturmahorario: ' . $model->idhorario;
$this->params['breadcrumbs'][] = ['label' => 'Cursoturmahorarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idhorario, 'url' => ['view', 'idhorario' => $model->idhorario, 'idcurso' => $model->idcurso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cursoturmahorario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
