<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\Accordion;

$date_ijro = strtotime($model->indoc->date_ijro);

$rem = $date_ijro - date('U');

$days = floor($rem/86400);

if ($days > 10) {
  $level = 'bg-success';
}
else if($days >= 10 || $days > 5) {
  $level = 'bg-info';
}
else if($days >= 5 || $days > 3) {
  $level = 'bg-warning';
}
else if($days >= 3 || $days > 1) {
  $level = 'bg-danger';
}
else if($days <= 0)
{
  $level = 'bg-dark';
}
else
{
  $level = 'bg-primary';
}

?>

<div class="col-md-6">
<div id="accordion">
  <div class="card <?= $level;?>">
    <div class="card-header" id="headingOne">
      <h1 class="mb-0">
        <button class="btn btn-link card-title" data-toggle="collapse" data-target="#<?= $model->id;?>" aria-expanded="true" aria-controls="<?= $model->id;?>">
          <?= 'Kirish xati № '.$model->indoc->our_number;?> | <?= 'Xatning indeksi № '.$model->indoc->guest_number;?> | Ijrochi: <?= $model->username->full_name;?> | Muddati: <?= $model->indoc->date_ijro;?>
        </button>
      </h1>
    </div>

    <div id="<?= $model->id;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <div class="row">
            <?php for($i=0; $i < count($model->file); $i++):?>
              <div class="col-md-4">
                <a href="<?= Yii::$app->request->baseUrl.'/files/'.$model->file[$i];?>" download data-pjax=0>
                  <div class="card">
                    <div class="card-body text-center" style="padding: 50px;">
                      <?= $model->file[$i];?>
                    </div>
                  </div>
                </a>
              </div>
            <?php endfor;?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
