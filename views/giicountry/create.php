<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Giicountry $model */

$this->title = 'Create Giicountry';
$this->params['breadcrumbs'][] = ['label' => 'Giicountries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giicountry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
