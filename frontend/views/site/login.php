<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm 
    <div style="color:#999;margin:1em 0">
        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
    </div>
*/

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login to Turizm.Doc';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-body">
            <center>
                <h3><?= $this->title;?></h3>
            </center>
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['style' => 'margin-top: 10px;']]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?php $checkboxTemplate = '<div class="form-check">{beginLabel}{input}{labelTitle}<span class="form-check-sign"><span class="check"></span></span>{endLabel}{error}{hint}</div>';?>


                <?= $form->field($model, 'rememberMe', ['labelOptions' => ['class' => 'form-check-label'], 'inputOptions' => ['class' => 'form-check-input']])->checkbox(['template' => $checkboxTemplate]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
    </div>
</div>

