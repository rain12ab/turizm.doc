<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\Indoc */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <?= $this->title;?>
            </div>
            <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class="col-md-4">
                        <?= $form->field($model, 'our_number')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $form->field($model, 'guest_number')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $form->field($model, 'date_ijro')->textInput(['type' => 'date']) ?>
                    </div>
                </div>
                        <?= $form->field($model, 'file[]')->widget(FileInput::classname(), [
                            'options' => ['multiple' => true],
                            'pluginOptions' => [
                                'initialPreviewAsData'=>true,
                                'showPreview' => true,
                                'showCaption' => false,
                                'showRemove' => true,
                                'showUpload' => false,
                            ],
                        ]); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'main_ijro')->textInput() ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'ijrochilar')->textInput() ?>
                    </div>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
