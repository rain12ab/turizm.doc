<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Indoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'our_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guest_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->textInput() ?>

    <?= $form->field($model, 'date_ijro')->textInput() ?>

    <?= $form->field($model, 'main_ijro')->textInput() ?>

    <?= $form->field($model, 'ijrochilar')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
