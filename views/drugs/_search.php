<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DrugsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drugs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'latin') ?>

    <?= $form->field($model, 'pokazaniya') ?>

    <?php // echo $form->field($model, 'protivopokazaniya') ?>

    <?php // echo $form->field($model, 'beremennost') ?>

    <?php // echo $form->field($model, 'pobochnye') ?>

    <?php // echo $form->field($model, 'homeopathy') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
