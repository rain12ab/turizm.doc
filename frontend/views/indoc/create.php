<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Indoc */

$this->title = 'Create Indoc';
$this->params['breadcrumbs'][] = ['label' => 'Indocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>
