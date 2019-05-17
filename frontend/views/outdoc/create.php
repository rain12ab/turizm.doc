<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Outdoc */

$this->title = 'Create Outdoc';
$this->params['breadcrumbs'][] = ['label' => 'Outdocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outdoc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
