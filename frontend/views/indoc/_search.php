<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\IndocSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indoc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'our_number') ?>

    <?= $form->field($model, 'guest_number') ?>

    <?= $form->field($model, 'file') ?>

    <?= $form->field($model, 'date_ijro') ?>

    <?php // echo $form->field($model, 'main_ijro') ?>

    <?php // echo $form->field($model, 'ijrochilar') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
