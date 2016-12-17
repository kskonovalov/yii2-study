<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Drugs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drugs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pokazaniya')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'protivopokazaniya')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'beremennost')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pobochnye')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'homeopathy')->textInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
