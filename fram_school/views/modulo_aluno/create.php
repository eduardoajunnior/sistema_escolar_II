<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ModuloAluno */

$this->title = 'Create Modulo Aluno';
$this->params['breadcrumbs'][] = ['label' => 'Modulo Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modulo-aluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
