<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\IndocSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Javob (Chiqish) xatlar';
$this->params['breadcrumbs'][] = $this->title;
$i = 1;
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title"><?= $this->title;?></h3>
            </div>
            <div class="card-body">
                <?php if(Yii::$app->user->identity->role == 1){
                    echo '<p>'.Html::a('Javob (Chiqish) xatni qo\'shish', ['create'], ['class' => 'btn btn-success']).'</p>';
                }?>

                <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_view',
                    'itemOptions' => ['tag' => null],
                    'options' => ['class' => 'row', 'id' => ''],
                    'summary' => '',
                ]); ?>

                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>
