<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'file')->fileInput() ?>
    <?php if(!$model->isNewRecord): ?>
      <?= Html::img(['/file', 'id' => $model->file_id], ['width' => 300, 'alt' => 'Imagen del banner']); ?>
    <?php endif; ?>

    <?= $form->field($model, 'file2')->fileInput() ?>
    <?php if(!$model->isNewRecord): ?>
      <?= Html::img(['/file', 'id' => $model->file2_id], ['width' => 300, 'alt' => 'Imagen del banner']); ?>
    <?php endif; ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList($model->type_options) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
