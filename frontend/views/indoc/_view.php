<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\Accordion;
//target="_blank"
?>

<div class="col-md-6">
<div id="accordion">
  <div class="card bg-primary">
    <div class="card-header" id="headingOne">
      <h1 class="mb-0">
        <button class="btn btn-link card-title" data-toggle="collapse" data-target="#<?= $model->id;?>" aria-expanded="true" aria-controls="<?= $model->id;?>">
          <?= 'Kirish xati № '.$model->our_number;?>
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
