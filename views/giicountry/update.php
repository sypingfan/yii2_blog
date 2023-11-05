<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Giicountry $model */

$this->title = 'Update Giicountry: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Giicountries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'code' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="giicountry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
