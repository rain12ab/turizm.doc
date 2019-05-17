<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Indoc */

$this->title = 'Create Indoc';
$this->params['breadcrumbs'][] = ['label' => 'Indocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indoc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
