<?php
/**
 * Created by PhpStorm.
 * User: 平凡
 * Date: 2023/11/2
 * Time: 22:02
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'name')->label("自定义name"); ?>
<?= $form->field($model,'email')->label("自定义email");; ?>
<div class="form-group">
    <?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
</div>
<?php ActiveForm::end() ?>