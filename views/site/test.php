<?php
use \yii\bootstrap\ActiveForm;
use \yii\bootstrap\Html;

$this->title = 'test';
$this->params['breadcrumbs'][] = $this->title;

/**
 * @var \app\models\Test $model
 */

$form = ActiveForm::begin();
echo $form->field($model, 'title')->textInput(["placeholder" => "тут title"]);
echo $form->field($model, 'content')->textarea();
echo $form->field($model, 'name')->textInput();
echo Html::submitButton();
ActiveForm::end();